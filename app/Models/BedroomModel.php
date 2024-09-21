<?php

namespace App\Models;

use CodeIgniter\Model;

class BedroomModel extends Model
{
    protected $table = 'bedrooms';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'bedrooms_type_id', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Se puede dividir en muchos métodos para hacerlo más legible e individualizado según casuísticas,e incluso con mayor performance para * la db si se necesita, pero para la prueba se gestiona en un este par de métodos para simplificar la prueba.
     */
    public function getBedroomsFiltered($filters)
    {
        $query = $this->db->table('bedrooms')
            ->select('bedrooms.id, bedrooms.name, bedrooms.description, bedrooms_type.name as type')
            ->join('bedrooms_type', 'bedrooms_type.id = bedrooms.bedrooms_type_id')
            ->join('bedroom_prices', 'bedroom_prices.bedroom_id = bedrooms.id')
            ->join('bedrooms_reservations', 'bookings.bedroom_id = bedrooms.id')
            ->join('bedrooms_images', 'bedrooms_images.bedroom_id = bedrooms.id');

        if (isset($filters['type'])) {
            $query->where('bedrooms.bedrooms_type_id', $filters['type']);
        }

        if (isset($filters['price_min']) && isset($filters['price_max'])) {
            $query->where('bedrooms.id IN (SELECT bedroom_id FROM bedroom_prices WHERE price_per_day BETWEEN ' . $filters['price_min'] . ' AND ' . $filters['price_max'] . ')');
        }

        if (isset($filters['price_min']) && !isset($filters['price_max'])) {
            $query->where('bedrooms.id IN (SELECT bedroom_id FROM bedroom_prices WHERE price_per_day >= ' . $filters['price_min'] . ')');
        }

        if (isset($filters['price_max']) && !isset($filters['price_min'])) {
            $query->where('bedrooms.id IN (SELECT bedroom_id FROM bedroom_prices WHERE price_per_day <= ' . $filters['price_max'] . ')');
        }

        if (isset($filters['since_date']) && isset($filters['until_date'])) {
            $query->where('bedrooms.id NOT IN (SELECT bedroom_id FROM bedrooms_reservations WHERE (since_date BETWEEN "' . $filters['since_date'] . '" AND "' . $filters['until_date'] . '") OR (until_date BETWEEN "' . $filters['since_date'] . '" AND "' . $filters['until_date'] . '"))');
        }

        if (isset($filters['since_date']) && !isset($filters['until_date'])) {
            $query->where('bedrooms.id NOT IN (SELECT bedroom_id FROM bookings WHERE since_date >= "' . $filters['since_date'] . '")');
        }

        if (isset($filters['until_date']) && !isset($filters['since_date'])) {
            $query->where('bedrooms.id NOT IN (SELECT bedroom_id FROM bookings WHERE until_date <= "' . $filters['until_date'] . '")');
        }

        return $query->get()->getResultArray();
    }

    public function getBedroom($id)
    {
        return $this->db->table('bedrooms')
            ->select('bedrooms.id, bedrooms.name, bedrooms.description, bedrooms_type.name as type')
            ->join('bedrooms_type', 'bedrooms_type.id = bedrooms.bedrooms_type_id')
            ->join('bedroom_prices', 'bedroom_prices.bedroom_id = bedrooms.id')
            ->join('bedrooms_reservations', 'bookings.bedroom_id = bedrooms.id')
            ->join('bedrooms_images', 'bedrooms_images.bedroom_id = bedrooms.id')
            ->where('bedrooms.id', $id)
            ->get()
            ->getRowArray();
    }
}
