<?php
namespace App\Controllers;

use App\Models\HosModel;
use CodeIgniter\Controller;

class Hos extends Controller
{
    public function index()
    {
        $model = new HosModel();
        $data['tiffin_services'] = $model->findAll();
        
        return view('hos/hos_list', $data);
    }

    public function create()
    {
        return view('hos/hos_create');
    }

    public function store()
    {
        $model = new HosModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'phone_no' => $this->request->getPost('phone_no'),
            'email' => $this->request->getPost('email'),
            'specializations' => $this->request->getPost('specializations'),
            'website_link' => $this->request->getPost('website_link'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'a_id' => 1,
            'l_id' => 1
        ];
        $model->insert($data);
        return redirect()->to('/hos');
    }

    public function login()
    {
        return view('hos/hos_login');
    }

    public function doLogin()
    {
        $model = new HosModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $tiffinService = $model->where('email', $email)->first();

        if ($tiffinService && password_verify($password, $tiffinService['password'])) {
            session()->set('hos_id', $tiffinService['h_id']);
            return redirect()->to('/hos/edit');
        } else {
            return redirect()->to('/hos/login')->with('error', 'Invalid credentials');
        }
    }

    public function edit()
    {
        $hosId = session()->get('hos_id');
        if (!$hosId) {
            return redirect()->to('/hos/login')->with('error', 'Please login first.');
        }

        $model = new HosModel();
        $data['tiffinService'] = $model->find($hosId);
        return view('hos/hos_edit', $data);
    }

    public function update()
    {
        $hosId = session()->get('hos_id');
        if (!$hosId) {
            return redirect()->to('/hos/login')->with('error', 'Please login first.');
        }

        $model = new HosModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'phone_no' => $this->request->getPost('phone_no'),
            'email' => $this->request->getPost('email'),
            'specializations' => $this->request->getPost('specializations'),
            'website_link' => $this->request->getPost('website_link'),
        ];

        if ($model->update($hosId, $data)) {
            return redirect()->to('/hos')->with('success', 'Updated successfully');
        } else {
            return redirect()->to('/hos/edit')->with('error', 'Update failed! Please try again.');
        }
    }
}
