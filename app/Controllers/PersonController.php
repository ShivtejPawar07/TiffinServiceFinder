<?php

namespace App\Controllers;

use App\Models\PersonModel;
use CodeIgniter\Controller;

class PersonController extends Controller
{
    public function index()
    {
        return view('person/register');  // Show the registration form
    }

    public function store()
    {
        $personModel = new PersonModel();

        // Validate user input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'      => 'required|min_length[3]',
            'email'     => 'required|valid_email|is_unique[person.email]',
            'phone_no'  => 'required|numeric|min_length[10]',
            'address'   => 'required',
            'password'  => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Save to database
        $personModel->save([
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
            'address'  => $this->request->getPost('address'),

            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),  // Hash password
        ]);

        // 🔹 नवीन युजरचा `p_id` मिळवा
        $newUser = $personModel->where('email', $this->request->getPost('email'))->first();

        // 🔹 `p_id` session मध्ये सेव्ह करा
        $session = session();
        $session->set([
            'p_id' => $newUser['p_id'],
            'user_name' => $newUser['name'],
            'user_email' => $newUser['email'],
            'logged_in' => true
        ]);

        return redirect()->to('/search-tiffin')->with('success', 'Registration successful! You can now search for tiffin services.');
    }

    // Show login form
    public function loginForm()
    {
        return view('person/login');
    }

    // Handle login
    public function login()
    {
        $session = session();
        $personModel = new PersonModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $personModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Store user data in session
            $session->set([
                'p_id' => $user['p_id'], // ✅ p_id आता session मध्ये सेव्ह होईल
                'user_name' => $user['name'],
                'user_email' => $user['email'],
                'logged_in' => true
            ]);

            return redirect()->to('/search-tiffin');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    // Logout user
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logged out successfully.');
    }
}