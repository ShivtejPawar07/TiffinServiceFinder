<?php

namespace App\Controllers;

use App\Models\tiffin_servicesModel;
use CodeIgniter\Controller;

class SearchTiffin extends Controller
{
    public function index()
    {
        $model = new tiffin_servicesModel();

        $data = [
            'cities' => $model->getCities(),
            'specializations' => $model->getSpecializations(),
            'tiffin_services' => [] // Empty result initially
        ];

        return view('search_tiffin', $data);
    }

    public function search()
    {
        $model = new TiffinServicesModel();
        $query = trim($this->request->getGet('query') ?? '');
        $city = trim($this->request->getGet('city') ?? '');
        $specialization = trim($this->request->getGet('specialization') ?? '');

        $builder = $model->builder();
        if (!empty($query)) {
            $builder->like('name', $query)
                    ->orLike('city', $query)
                    ->orLike('state', $query)
                    ->orLike('specializations', $query);
        }

        if (!empty($city)) {
            $builder->where('city', $city);
        }

        if (!empty($specialization)) {
            $builder->like('specializations', $specialization);
        }

        $data = [
            'cities' => $model->getCities(),
            'specializations' => $model->getSpecializations(),
            'tiffin_services' => $builder->get()->getResultArray()
        ];

        return view('search_tiffin', $data);
    }
}
