<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/admin_login'); // Loads the admin login view
    }

    public function login()
    {
        $session = session();
        $adminModel = new AdminModel();

        $email = trim($this->request->getPost('email'));  // Trim spaces from input
        $password = $this->request->getPost('password');

        // Debugging Step - Check if email and password are received
        if (empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Email and Password are required.');
        }

        // Find admin by email (case insensitive)
        $admin = $adminModel->where('LOWER(email)', strtolower($email))->first();

        // If admin does not exist
        if (!$admin) {
            return redirect()->back()->with('error', 'Invalid Email or Password.');
        }

        // Check if password matches (plain text)
        if ($password !== $admin['password']) {
            return redirect()->back()->with('error', 'Invalid Email or Password.');
        }

        // Set session if login is successful
        $session->set('admin_id', $admin['a_id']);
        $session->set('admin_name', $admin['name']);

        return redirect()->to('/tiffin_services'); // Redirect to tiffin services page
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
} 