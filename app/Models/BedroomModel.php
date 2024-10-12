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
            ->select('bedrooms.id, bedrooms.name, bedrooms.description, bedrooms_type.name as type, bedroom_prices.price_per_day as price, GROUP_CONCAT(bedroom_images.url) as images, count(*) as total_count')
            ->join('bedrooms_type', 'bedrooms_type.id = bedrooms.bedrooms_type_id')
            ->join('bedroom_prices', 'bedroom_prices.bedroom_id = bedrooms.id')
            ->join('bedroom_images', 'bedroom_images.bedroom_id = bedrooms.id', 'left')
            ->groupBy('bedrooms.id');

        if (!empty($filters['type'])) {
            $query->where('bedrooms.bedrooms_type_id', $filters['type']);
        }

        if (!empty($filters['price_min']) || !empty($filters['price_max'])) {
            if (!empty($filters['price_min'])) {
                $query->where('bedroom_prices.price_per_day >=', $filters['price_min']);
            }
            if (!empty($filters['price_max'])) {
                $query->where('bedroom_prices.price_per_day <=', $filters['price_max']);
            }
        }

        if (!empty($filters['since_date']) && !empty($filters['until_date'])) {
            $query->where('bedrooms.id NOT IN (SELECT bedroom_id FROM bedrooms_reservations WHERE (since_date BETWEEN "' . $filters['since_date'] . '" AND "' . $filters['until_date'] . '") OR (until_date BETWEEN "' . $filters['since_date'] . '" AND "' . $filters['until_date'] . '"))', null, false);
        } elseif (!empty($filters['since_date'])) {
            $query->where('bedrooms.id NOT IN (SELECT bedroom_id FROM bedrooms_reservations WHERE since_date >= "' . $filters['since_date'] . '")', null, false);
        } elseif (!empty($filters['until_date'])) {
            $query->where('bedrooms.id NOT IN (SELECT bedroom_id FROM bedrooms_reservations WHERE until_date <= "' . $filters['until_date'] . '")', null, false);
        }

        if (!empty($filters['page']) && !empty($filters['limit'])) {
            $query->limit($filters['limit'], ($filters['page'] - 1) * $filters['limit']);
        } elseif (!empty($filters['limit'])) {
            $query->limit($filters['limit']);
        }

        $result = $query->get()->getResultArray();

        foreach ($result as &$room) {
            $room['images'] = !empty($room['images']) ? explode(',', $room['images']) : [];
        }
        $totalPages = ceil($query->countAllResults() / $filters['limit']);
        $totalResults = $query->countAllResults();

        return [
            'data' => $result,
            'pagination' => [
                'page' => $filters['page'],
                'limit' => $filters['limit'],
                'total' => $totalResults,
                'total_pages' => $totalPages
            ]
        ];
    }

    public function getBedroomById($id)
    {
        return $this->db->table('bedrooms')
            ->select('bedrooms.id, bedrooms.*, bedrooms_type.name as type, bedroom_prices.price_per_day as price, GROUP_CONCAT(DISTINCT bedroom_images.url) as images, GROUP_CONCAT(DISTINCT bedrooms_reservations.check_in, "-", bedrooms_reservations.check_out) as reservation_dates')
            ->join('bedrooms_type', 'bedrooms_type.id = bedrooms.bedrooms_type_id')
            ->join('bedroom_prices', 'bedroom_prices.bedroom_id = bedrooms.id')
            ->join('bedroom_images', 'bedroom_images.bedroom_id = bedrooms.id', 'left')
            ->join('bedrooms_reservations', 'bedrooms_reservations.bedroom_id = bedrooms.id', 'left')
            ->where('bedrooms.id', $id)
            ->groupBy('bedrooms.id')
            ->get()
            ->getRowArray();
    }
}
