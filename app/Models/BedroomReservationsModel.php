<?php

namespace App\Models;


use CodeIgniter\Model;


class BedroomReservationsModel extends Model
{
    protected $table = 'bedrooms_reservations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bedroom_id', 'user_id', 'check_in', 'check_out', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function reserveBedroom($userId, $bedroomId, $data)
    {

        $checkIn = $data['from'];
        $checkOut = $data['to'];

        $existingReservations = $this->where('bedroom_id', $bedroomId)
            ->groupStart()
            ->where('check_in <', $checkOut)
            ->where('check_out >', $checkIn)
            ->groupEnd()
            ->findAll();

        if (!empty($existingReservations)) {
            throw new \Exception('Habitación no disponible para las fechas seleccionadas');
        }

        $data['bedroom_id'] = $bedroomId;
        $data['user_id'] = $userId;
        $data['check_in'] = $data['from'];
        $data['check_out'] = $data['to'];

        $this->insert($data);

        return $this->find($this->insertID());
    }
}
