<?php

namespace App\Controllers;

use App\Models\RatingModel;
use CodeIgniter\Controller;

class RatingController extends Controller
{
    public function index()
    {
        $model = new RatingModel();
        $data['ratings'] = $model->getRatings();
        return view('ratings/index', $data);
    }

    public function create()
    {
        return view('ratings/create');
    }

    public function store()
    {
        $session = session(); // Session सुरू करा
        $p_id = $session->get('p_id'); // Session मधून p_id घ्या

        if (!$p_id) {
            return redirect()->to('/login')->with('error', 'Please log in to add a rating.');
        }

        $model = new RatingModel();

        $model->save([
            'review' => $this->request->getPost('review'),
            'p_id' => $p_id, // Session मधून घेतलेला p_id
            't_id' => $this->request->getPost('t_id'), // Changed from h_id to t_id
            // 'rating' => $this->request->getPost('rating') // स्टार रेटिंग सेव्ह करा
        ]);

        return redirect()->to('/search-tiffin_services')->with('success', 'Rating added successfully!'); // Changed from search-hospitals to search-tiffin_services
    }

    public function edit($id)
    {
        $model = new RatingModel();
        $data['rating'] = $model->find($id);

        if (!$data['rating']) {
            return redirect()->to('/ratings')->with('error', 'Rating not found.');
        }

        return view('ratings/edit', $data);
    }

    public function update($id)
    {
        $model = new RatingModel();
        
        $data = [
            'review' => $this->request->getPost('review'),
            // 'rating' => $this->request->getPost('rating') // रेटिंग अपडेट करू शकतो
        ];

        $model->update($id, $data);

        return redirect()->to('/ratings')->with('success', 'Rating updated successfully!');
    }

    public function delete($id)
    {
        $model = new RatingModel();
        
        if ($model->find($id)) {
            $model->delete($id);
            return redirect()->to('/ratings')->with('success', 'Rating deleted successfully.');
        } else {
            return redirect()->to('/ratings')->with('error', 'Rating not found.');
        }
    }

    public function view()
    {
        $model = new RatingModel();
        $data['ratings'] = $model->findAll(); // Fetch all ratings
    
        return view('ratings/view', $data);
    }
}
