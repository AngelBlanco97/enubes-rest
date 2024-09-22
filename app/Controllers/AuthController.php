<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends BaseController
{
    public function register()
    {
        $rules = [
            'name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'password_confirm' => 'required|matches[password]',
        ];

        $input = $this->getRequestInput($this->request);

        if (!$this->validateRequest($input, $rules)) {
            return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
        }

        $userModel = new UserModel();
        $userModel->save($input);

        return $this->getJWTForUser($input['email'], ResponseInterface::HTTP_CREATED);
    }

    public function login()
    {
        $rules = [
            'email' => 'required|min_length[6]|max_length[50]|valid_email',
            'password' => 'required|min_length[8]|max_length[255]|validateUser[email, password]'
        ];

        $errors = [
            'password' => [
                'validateUser' => 'Invalid login credentials provided'
            ]
        ];

        $input = $this->getRequestInput($this->request);


        if (!$this->validateRequest($input, $rules, $errors)) {
            return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
        }

        return $this->getJWTForUser($input['email']);
    }


    public function me()
    {
        try {
            $authenticationHeader = $this->request->getHeaderLine('Authorization');
            $user = getActiveUser($authenticationHeader);

            if (!$user) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'Usuario no encontrado']);
            }

            return $this->response->setStatusCode(200)->setJSON([
                'user' => $user
            ]);
        } catch (Exception $e) {
            return $this->response->setStatusCode(401)->setJSON(['error' => 'Token inválido o expirado']);
        }
    }


    private function getJWTForUser(string $email, int $responseCode = ResponseInterface::HTTP_OK)
    {
        try {
            $model = new UserModel();
            $user = $model->findUserByEmailAddress($email);
            unset($user['password']);

            helper('jwt');

            return $this->getResponse([
                'message' => 'User authenticated successfully',
                'user' => $user,
                'access_token' => getSignedJWTForUser($email)
            ]);
        } catch (\Exception $e) {
            return $this->getResponse([
                'error' => $e->getMessage()
            ], $responseCode);
        }
    }
}
