<?php

namespace App\Controllers;

use App\Models\LocationModel;
use CodeIgniter\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $locationModel = new LocationModel();
        $data['locations'] = $locationModel->findAll(); // सर्व लोकेशन्स मिळवा

        return view('locations/index', $data);
    }

    public function create()
    {
        return view('locations/create');  // Create फॉर्म दाखवा
    }

    public function store()
    {
        $locationModel = new LocationModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'country' => $this->request->getPost('country'),
            'p_code' => $this->request->getPost('p_code'),
        ];

        $locationModel->save($data);
        return redirect()->to('/locations')->with('success', 'Location added successfully.');
    }

    public function edit($id)
    {
        $locationModel = new LocationModel();
        $data['location'] = $locationModel->find($id);

        if (!$data['location']) {
            return redirect()->to('/locations')->with('error', 'Location not found.');
        }

        return view('locations/edit', $data);
    }

    public function update($id)
    {
        $locationModel = new LocationModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'country' => $this->request->getPost('country'),
            'p_code' => $this->request->getPost('p_code'),
        ];

        $locationModel->update($id, $data);
        return redirect()->to('/locations')->with('success', 'Location updated successfully.');
    }

    public function delete($id)
    {
        $locationModel = new LocationModel();
        $locationModel->delete($id);

        return redirect()->to('/locations')->with('success', 'Location deleted successfully.');
    }
}
