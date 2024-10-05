<?php

namespace App\Controllers;

use App\Models\BedroomModel;
use CodeIgniter\HTTP\ResponseInterface;

class RoomsController extends BaseController
{

    protected $bedroomModel;

    public function __construct()
    {
        $this->bedroomModel = new BedroomModel();
    }

    public function getRoomsByFilters()
    {
        try {
            $rules = [
                'price_since' => 'permit_empty',
                'price_until' => 'permit_empty',
                'date_since' => 'permit_empty',
                'date_until' => 'permit_empty',
                'categories' => 'permit_empty',
                'page' => 'required',
                'limit' => 'required'
            ];

            if (!$this->validate($rules)) {
                return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
            }

            $response = $this->bedroomModel->getBedroomsFiltered(
                [
                    'price_min' => $this->request->getVar('price_since'),
                    'price_max' => $this->request->getVar('price_until'),
                    'since_date' => $this->request->getVar('date_since'),
                    'until_date' => $this->request->getVar('date_until'),
                    'type' => $this->request->getVar('categories'),
                    'page' => $this->request->getVar('page'),
                    'limit' => $this->request->getVar('limit')
                ]
            );


            return $this->getResponse($response, ResponseInterface::HTTP_OK);
        } catch (\Throwable $th) {
            return $this->getResponse([
                'error' => $th->getMessage()
            ], ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
