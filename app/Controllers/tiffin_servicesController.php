<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\tiffin_servicesModel;
use App\Models\LocationModel;
use App\Models\AdminModel;
use App\Models\SpecializationModel;

class tiffin_servicesController extends Controller
{
    protected $tiffin_servicesModel, $locationModel;

    public function __construct()
    {
        $this->tiffin_servicesModel = new tiffin_servicesModel();
        $this->locationModel = new LocationModel();
    }

    public function index()
    {
        $tiffin_servicesModel = new tiffin_servicesModel();
        $data['tiffin_services'] = $tiffin_servicesModel->getTiffinServicesWithSpecializations();
    
        return view('tiffin_services/index', $data);
    }
    
    // Show create form
    public function create()
    {
        $data['locations'] = $this->locationModel->findAll();
        $data['specializations'] = (new SpecializationModel())->findAll(); // Fetch specializations
        $data['admins'] = (new AdminModel())->findAll(); // Get all admins
        $data['states'] = (new LocationModel())->select('DISTINCT(state)')->findAll();
        return view('tiffin_services/create', $data);
    }

    public function store()
    {
        $tiffin_servicesData = [
            'name'         => $this->request->getPost('name'),
            'address'      => $this->request->getPost('address'),
            'city'         => $this->request->getPost('city'),
            'state'        => $this->request->getPost('state'),
            'phone_no'     => $this->request->getPost('phone_no'),
            'email'        => $this->request->getPost('email'),
            'specializations'        => $this->request->getPost('specializations'),
            'website_link' => $this->request->getPost('website_link'),
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'a_id'         => $this->request->getPost('a_id'),
            'l_id'         => $this->request->getPost('l_id'),
        ];
    
        $specializations = $this->request->getPost('specializations'); // Get selected specializations
    
        $tiffin_servicesId = $this->tiffin_servicesModel->insert($tiffin_servicesData, true); // Insert tiffin service & get ID
    
        if ($tiffin_servicesId && !empty($specializations)) {
            $db = \Config\Database::connect();
            foreach ($specializations as $s_id) {
                $db->table('tiffin_services_specializations')->insert([
                    'h_id' => $tiffin_servicesId,
                    's_id' => $s_id
                ]);
            }
        }
    
        session()->setFlashdata('success', 'Tiffin service added successfully');
        return redirect()->to('/');
    }

    // Show edit form
    public function edit($id)
    {
        $data['tiffin_service'] = $this->tiffin_servicesModel
            ->select('tiffin_services.*, locations.city as location_name')
            ->join('locations', 'locations.l_id = tiffin_services.l_id')
            ->where('tiffin_services.h_id', $id)
            ->first();

        if (!$data['tiffin_service']) {
            return redirect()->to('/tiffin_services')->with('error', 'Tiffin service not found.');
        }

        $data['locations'] = $this->locationModel->findAll();
        $data['specializations'] = (new SpecializationModel())->findAll();
        
        // Fetch selected specializations for the tiffin service
        $db = \Config\Database::connect();
        $selectedSpecializations = $db->table('tiffin_services_specializations')
            ->where('h_id', $id)
            ->get()
            ->getResultArray();

        $selectedSpecializations = array_column($selectedSpecializations, 's_id'); // Extract 's_id' values

        $data['selectedSpecializations'] = $selectedSpecializations;

        return view('tiffin_services/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'name'         => $this->request->getPost('name'),
            'address'      => $this->request->getPost('address'),
            'city'         => $this->request->getPost('city'),
            'state'        => $this->request->getPost('state'),
            'phone_no'     => $this->request->getPost('phone_no'),
            'email'        => $this->request->getPost('email'),
            'website_link' => $this->request->getPost('website_link'),
            'a_id'         => $this->request->getPost('a_id'),
            'l_id'         => $this->request->getPost('l_id'),
        ];

        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        if ($this->tiffin_servicesModel->update($id, $data)) {
            // Update specializations
            $specializations = $this->request->getPost('specializations');
            $db = \Config\Database::connect();

            // Delete old specializations
            $db->table('tiffin_services_specializations')->where('h_id', $id)->delete();

            // Insert new ones
            if (!empty($specializations)) {
                foreach ($specializations as $s_id) {
                    $db->table('tiffin_services_specializations')->insert([
                        'h_id' => $id,
                        's_id' => $s_id
                    ]);
                }
            }

            session()->setFlashdata('success', 'Tiffin service updated successfully');
            return redirect()->to('/tiffin_services');
        } else {
            session()->setFlashdata('error', 'Failed to update tiffin service');
            return redirect()->back()->withInput();
        }
    }

    // Delete a tiffin service
    public function delete($id)
    {
        if ($this->tiffin_servicesModel->delete($id)) {
            session()->setFlashdata('success', 'Tiffin service deleted successfully');
        } else {
            session()->setFlashdata('error', 'Failed to delete tiffin service');
        }

        return redirect()->to('/tiffin_services');
    }

    // About Page
    public function about()
    {
        return view('about'); // Loads 'app/Views/about.php'
    }
    public function contact()
    {
        return view('contact'); // Loads 'app/Views/about.php'
    }

    // Search tiffin services
    public function search()
    {
        $tiffin_servicesModel = new tiffin_servicesModel();
        $locationModel = new LocationModel();
        $specializationModel = new SpecializationModel();

        // Fetch distinct cities from locations
        $cities = $locationModel->select('DISTINCT(city)')->findAll();

        // Fetch all specializations
        $specializations = $specializationModel->findAll();

        // Get search parameters
        $city = $this->request->getGet('city');
        $specialization = $this->request->getGet('specialization');

        // Build query for search
        $query = $tiffin_servicesModel->select('tiffin_services.*, locations.city, locations.state')
            ->join('locations', 'locations.l_id = tiffin_services.l_id')
            ->join('tiffin_services_specializations', 'tiffin_services_specializations.h_id = tiffin_services.h_id', 'left')
            ->join('specializations', 'specializations.s_id = tiffin_services_specializations.s_id', 'left');

        if (!empty($city)) {
            $query->where('locations.city', $city);
        }

        if (!empty($specialization)) {
            $query->where('specializations.name', $specialization);
        }

        $tiffin_services = $query->findAll();

        return view('tiffin_services/search_tiffin', [
            'cities' => $cities,
            'specializations' => $specializations,
            'tiffin_services' => $tiffin_services
        ]);
    }

    public function login()
    {
        return view('hos/hos_login');
    }

    public function doLogin()
    {
        $model = new tiffin_servicesModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $tiffin_service = $model->where('email', $email)->first();

        if ($tiffin_service && password_verify($password, $tiffin_service['password'])) {
            session()->set('h_id', $tiffin_service['h_id']);
            return redirect()->to('/hos/edit');
        } else {
            return redirect()->to('/hos/login')->with('error', 'Invalid credentials');
        }
    }
}
