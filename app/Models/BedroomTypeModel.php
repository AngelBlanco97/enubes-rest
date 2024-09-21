<?php

namespace App\Models;

use CodeIgniter\Model;

class BedroomTypeModel extends Model
{
    protected $table = 'bedrooms_type';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'nice_name', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getBedroomType($id)
    {
        return $this->find($id);
    }

    public function getBedroomTypes()
    {
        return $this->findAll();
    }
}
