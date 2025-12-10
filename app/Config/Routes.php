<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'tiffin_servicesController::about'); // About Us page
$routes->get('/contact', 'tiffin_servicesController::contact'); 

// Tiffin Services Routes
$routes->get('/tiffin_services', 'tiffin_servicesController::index');
$routes->get('/tiffin_services/create', 'tiffin_servicesController::create');
$routes->post('/tiffin_services/store', 'tiffin_servicesController::store');
$routes->get('/tiffin_services/edit/(:num)', 'tiffin_servicesController::edit/$1');
$routes->post('/tiffin_services/update/(:num)', 'tiffin_servicesController::update/$1');
$routes->get('/tiffin_services/delete/(:num)', 'tiffin_servicesController::delete/$1');

$routes->get('/tiffin_services/hos_login', 'tiffin_servicesController::login');
$routes->get('/tiffin_services/dologin', 'tiffin_servicesController::dologin');

// Person (User) Routes
$routes->get('/person', 'PersonController::index');  // Show registration form
$routes->post('/person/store', 'PersonController::store');  // Handle form submission

// Authentication Routes
$routes->get('/login', 'PersonController::loginForm');  // Show login form
$routes->post('/login', 'PersonController::login');  // Handle login
$routes->get('/logout', 'PersonController::logout');  // Logout user

// Tiffin Services Search
$routes->get('/search-tiffin', 'tiffin_servicesController::search');  // Search tiffin services
// $routes->get('/searchtiffin', 'SearchTiffin::index');
// $routes->get('/searchtiffin/search', 'SearchTiffin::search');
$routes->get('/search-tiffin_services', 'tiffin_servicesController::search');


// Rating Routes
$routes->get('ratings', 'RatingController::index');
$routes->get('ratings/create', 'RatingController::create');
$routes->post('ratings/store', 'RatingController::store');
$routes->get('ratings/edit/(:num)', 'RatingController::edit/$1');
$routes->post('ratings/update/(:num)', 'RatingController::update/$1');
$routes->get('ratings/delete/(:num)', 'RatingController::delete/$1');
$routes->get('ratings/view', 'RatingController::view'); 

//admin

$routes->get('/admin/login', 'AdminController::index'); // Show login page
$routes->post('/admin/login', 'AdminController::login'); // Handle login
$routes->get('/admin/logout', 'AdminController::logout'); // Logout

// Location Routes
$routes->get('/locations', 'LocationController::index');
$routes->get('/locations/create', 'LocationController::create');
$routes->post('/locations/store', 'LocationController::store');
$routes->get('/locations/edit/(:num)', 'LocationController::edit/$1');
$routes->post('/locations/update/(:num)', 'LocationController::update/$1');
$routes->get('/locations/delete/(:num)', 'LocationController::delete/$1');

// Specialization Routes
$routes->get('/specializations', 'SpecializationController::index');
$routes->get('/specializations/create', 'SpecializationController::create');
$routes->post('/specializations/store', 'SpecializationController::store');
$routes->get('/specializations/edit/(:num)', 'SpecializationController::edit/$1');
$routes->post('/specializations/update/(:num)', 'SpecializationController::update/$1');
$routes->get('/specializations/delete/(:num)', 'SpecializationController::delete/$1');

// Person Ratings
$routes->get('/person/ratings', 'RatingsController::viewRatings');

// Search Tiffin Services

// Tiffin Services (Hos) Routes
$routes->get('/', 'Hos::index'); // Home Page
$routes->get('/hos', 'Hos::index'); // List Tiffin Services
$routes->get('/hos/create', 'Hos::create'); // Show Create Form
$routes->post('/hos/store', 'Hos::store'); // Handle Create Form Submission
$routes->get('/hos/login', 'Hos::login'); // Show Login Page
$routes->post('/hos/doLogin', 'Hos::doLogin'); // Handle Login
$routes->get('/hos/edit', 'Hos::edit'); // Show Edit Form
$routes->post('/hos/update', 'Hos::update'); // Handle Edit Form Submission

// Dashboard and Total Users
$routes->get('/total-users', 'PersonController::getTotalUsers'); // Fetch total users
$routes->get('/dashboard', 'PersonController::dashboard'); // Load dashboard




?>

