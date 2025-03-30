<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table      = 'ratings';
    protected $primaryKey = 'r_id';

    protected $allowedFields = ['review', 'p_id',];

    public function getRatings($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
