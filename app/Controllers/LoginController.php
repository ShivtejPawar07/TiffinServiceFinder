<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\tiffin_servicesModel;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login'); // Show login page
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $tiffinServicesModel = new tiffin_servicesModel();
        $tiffinService = $tiffinServicesModel->where('email', $email)->first(); // Find tiffin service by email

        if ($tiffinService && password_verify($password, $tiffinService['password'])) {
            session()->set('tiffin_service_id', $tiffinService['h_id']); // Store tiffin service ID in session
            session()->set('tiffin_service_name', $tiffinService['name']);
            return redirect()->to('/tiffin_services/create'); // Redirect to tiffin service creation page
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
