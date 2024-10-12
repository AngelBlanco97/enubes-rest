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

        $total = $bedroom['price'] * (strtotime($checkOut) - strtotime($checkIn)) / (60 * 60 * 24);

        $data['bedroom_id'] = $bedroomId;
        $data['user_id'] = $userId;
        $data['check_in'] = $data['from'];
        $data['check_out'] = $data['to'];
        $data['total'] = $total;

        $this->insert($data);

        return $this->find($this->insertID());
    }

    public function getReservationInfo($id)
    {
        return $this->select('bedrooms_reservations.id, bedrooms_reservations.check_in, bedrooms_reservations.check_out, bedrooms_reservations.created_at, bedrooms_reservations.updated_at, bedrooms.id as bedroom_id, bedrooms.name as bedroom_name, users.id as user_id, users.name as user_name')
            ->join('bedrooms', 'bedrooms.id = bedrooms_reservations.bedroom_id')
            ->join('users', 'users.id = bedrooms_reservations.user_id')
            ->where('bedrooms_reservations.id', $id)
            ->first();
    }
}
