<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BedroomTypeModel;
use CodeIgniter\HTTP\ResponseInterface;

class RoomTypesController extends BaseController
{
    public function getBedTypes()
    {
        try {
            $roomTypeModel = new BedroomTypeModel();
            $types = $roomTypeModel->findAll();
            return $this->getResponse($types, ResponseInterface::HTTP_OK);
        } catch (\Throwable $th) {
            return $this->getResponse([
                'error' => $th->getMessage()
            ], ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
