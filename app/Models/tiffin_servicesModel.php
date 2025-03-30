<?php

namespace App\Models;

use CodeIgniter\Model;

class tiffin_servicesModel extends Model
{
    protected $table = 'tiffin_services';
    protected $primaryKey = 'h_id';
    protected $allowedFields = [
        'name', 'address', 'city', 'state', 'phone_no', 'email', 'specializations',
        'website_link', 'password', 'a_id', 'l_id', 'created_at'
    ];

    public function getTiffinServicesWithSpecializations()
    {
        return $this->db->table('tiffin_services')
            ->select('tiffin_services.*, COALESCE(STRING_AGG(specializations.name, \', \'), \'No Specializations\') AS specializations')
            ->join('tiffin_services_specializations', 'tiffin_services_specializations.h_id = tiffin_services.h_id', 'left')
            ->join('specializations', 'specializations.s_id = tiffin_services_specializations.s_id', 'left')
            ->groupBy('tiffin_services.h_id')
            ->get()
            ->getResultArray();
    }
}

