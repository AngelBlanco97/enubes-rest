<?php

namespace App\Models;


use CodeIgniter\Model;


class BedroomPriceModel extends Model
{
    protected $table = 'bedroom_prices';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bedroom_id', 'price', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getBedroomPrice($id)
    {
        return $this->find($id);
    }

    public function getBedroomPrices()
    {
        return $this->findAll();
    }
}
