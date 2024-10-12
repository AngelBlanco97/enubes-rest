<?php

namespace App\Controllers;

use App\Models\BedroomReservationsModel;
use CodeIgniter\HTTP\ResponseInterface;

class BedroomReservationsController extends BaseController
{

    protected $bedroomReservations;

    public function __construct()
    {
        $this->bedroomReservations = new BedroomReservationsModel();
    }

    public function getReservationInfo($id)
    {
        try {
            $response = $this->bedroomReservations->getReservationInfo($id);

            return $this->getResponse($response, ResponseInterface::HTTP_OK);
        } catch (\Throwable $th) {
            return $this->getResponse([
                'error' => $th->getMessage()
            ], ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function reserveRoom($id)
    {
        try {
            $rules = [
                'from' => 'required',
                'to' => 'required'
            ];

            if (!$this->validate($rules)) {
                return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
            }

            $authenticationHeader = $this->request->getHeaderLine('Authorization');
            $user = getActiveUser($authenticationHeader);

            $response = $this->bedroomReservations->reserveBedroom($user['id'], $id, [
                'from' => $this->request->getVar('from'),
                'to' => $this->request->getVar('to')
            ]);

            return $this->getResponse($response, ResponseInterface::HTTP_OK);
        } catch (\Throwable $th) {
            return $this->getResponse([
                'error' => $th->getMessage()
            ], ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
