<?php

namespace App\Models;

use CodeIgniter\Model;


class BedroomImagesModel extends Model
{
    protected $table = 'bedroom_images';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bedroom_id', 'image', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getBedroomImage($id)
    {
        return $this->find($id);
    }

    public function getBedroomImages()
    {
        return $this->findAll();
    }

    public function getBedroomImagesByBedroomId($bedroomId)
    {
        return $this->where('bedroom_id', $bedroomId)->findAll();
    }
}
