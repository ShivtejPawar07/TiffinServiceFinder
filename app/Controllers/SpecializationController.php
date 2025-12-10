<?php

namespace App\Controllers;

use App\Models\SpecializationModel;
use CodeIgniter\Controller;

class SpecializationController extends Controller
{
    protected $specializationModel;

    public function __construct()
    {
        $this->specializationModel = new SpecializationModel();
    }

    // 1️⃣ Display All Specializations
    public function index()
    {
        $data['specializations'] = $this->specializationModel->findAll();
        return view('specializations/index', $data);
    }

    // 2️⃣ Show Add Specialization Form
    public function create()
    {
        return view('specializations/create');
    }

    // 3️⃣ Store Specialization Data
    public function store()
    {
        $this->specializationModel->save([
            'name' => $this->request->getPost('name')
        ]);

        return redirect()->to('/specializations')->with('success', 'Specialization added successfully!');
    }

    // 4️⃣ Show Edit Specialization Form
    public function edit($id)
    {
        $data['specialization'] = $this->specializationModel->find($id);
        return view('specializations/edit', $data);
    }

    // 5️⃣ Update Specialization Data
    public function update($id)
    {
        $this->specializationModel->update($id, [
            'name' => $this->request->getPost('name')
        ]);

        return redirect()->to('/specializations')->with('success', 'Specialization updated successfully!');
    }

    // 6️⃣ Delete Specialization
    public function delete($id)
    {
        $this->specializationModel->delete($id);
        return redirect()->to('/specializations')->with('success', 'Specialization deleted successfully!');
    }
}
