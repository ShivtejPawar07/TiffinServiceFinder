

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiffinService</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .navbar {
            width: 80%; /* Width कमी केली */
            height: 80px; /* Height वाढवली */
            background-color: #f97316; /* Orange */
            color: white;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%); /* Center align केलं */
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px; /* थोडासा curve look */
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
            display: flex;
            align-items: center;
        }

        .navbar .nav-links a:hover {
            opacity: 0.8;
        }

        .navbar i {
            margin-right: 8px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 50px;  /* 🔹 Logo छोटा केला */
            width: auto;
            margin-right: 10px;
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            background-size: cover;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
        }

       
        /* Main Content */
        .main-content {
            margin-top: 70px; /* To adjust for fixed navbar */
            padding: 20px;
            flex: 1;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .image-container img {
            max-width: 60%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .image-container img:hover {
            transform: scale(1.05);
        }
       
        .gallery img {
        width: 100%;
        height: 200px; /* Adjust as needed */
        object-fit: cover; /* Ensures images are properly cropped */
    }
   
    
    </style>
</head>
<body>

 <!-- Navbar -->
 <nav class="navbar">
        <img src="<?= base_url('uploads/logo.png') ?>" alt="Company Logo" class="logo">
        <div class="nav-links">
            <a href="<?= base_url('/') ?>"><i data-lucide="home"></i> Home</a>
            <a href="<?= base_url('person') ?>"><i data-lucide="search"></i> Search TiffinService</a>
            <a href="<?= base_url('about') ?>"><i data-lucide="info"></i> About Us</a>
            <a href="http://localhost:8080/admin/login">
    <i data-lucide="log-in"></i> Admin
</a>

            <a href="<?= base_url('login') ?>"><i data-lucide="user"></i> User Login</a>
            <a href="<?= base_url('contact') ?>"><i data-lucide="contact"></i> Contact Us</a>
        </div>
    </nav>

<!-- Main Content -->
<div class="main-content">
    <div class="mt-5 text-center">
        <!-- Text Section -->
        <div class="container mx-auto px-6 py-24">
        <div class="bg-green-100 rounded-2xl p-12 shadow-2xl animate-fadeIn">
                <h1 class="text-4xl font-bold text-gray-800 text-center mb-4">Welcome to TiffinService</h1>
                <p class="text-xl text-gray-700 text-center max-w-2xl mx-auto mb-10">
                    Find the best TiffinService near you or add your own facility to our trusted platform.
                </p>

                <div class="flex flex-col md:flex-row justify-center gap-6 mt-8">
                    <a href="<?= base_url('person') ?>" class="bg-red-400 text-white py-4 px-8 rounded-full text-lg font-semibold shadow-lg hover:bg-red-600 transition-all duration-300 flex items-center justify-center">
                        <i data-lucide="search" class="mr-2"></i>
                        Search TiffinService
                    </a>
                    <a href="http://localhost:8080/tiffin_services/create" class="bg-red-400 text-white py-4 px-8 rounded-full text-lg font-semibold shadow-lg hover:bg-red-600 transition-all duration-300 flex items-center justify-center">
                        <i data-lucide="plus" class="mr-2"></i>
                        Add Your Own TiffinService
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <!-- <div class="image-container">
            <img src="<?= base_url('uploads/bbb.jpg')?>" alt="Tiffin Service Image">
        </div> -->
    </div>
    <div class="max-w-4xl mx-auto text-center py-12 px-6 bg-green-100">
        <h1 class="text-3xl md:text-4xl font-bold text-orange-600">100% Fresh Healthy and Delicious Food</h1>
        <h2 class="text-lg md:text-xl font-semibold text-green-700 mt-2">Food like home, Away from home..</h2>
        
        <p class="text-gray-700 mt-4 text-md md:text-lg">
            Green Souls Kitchens has been serving 100% Fresh and Authentic Indian Food for over a decade in the city of Pune. 
            Unlike other tiffin and catering services, we give you multiple options to choose your own meals. 
            You can order according to your needs and desires, with choices between Jain food, Vegetarian food, and Non-Vegetarian food. 
            Moreover, you can customize your own meal to get rid of the same old boring food.
        </p>

        <div class="flex justify-center mt-6">
    <img src="uploads/aaaa.png" 
         alt="Chef Cooking" 
         class="w-[500px] md:w-[700px] lg:w-[900px] rounded-lg shadow-lg">
</div>

    </div><br>
    <div class="bg-green-100">

<section class="text-center py-12 ">
    <h2 class="text-3xl font-bold text-orange-500">OUR MEAL PLANS</h2>

    <div class="flex justify-center gap-8 mt-8 ">
        <!-- Meal Item 1 -->
        <div class="text-center">
            <img src="uploads/a.jpeg" alt="Happy Meal" class="rounded-lg shadow-lg w-60 h-60">
            <p class="mt-3 font-semibold">Happy Meal</p>
        </div>

        <!-- Meal Item 2 -->
        <div class="text-center">
            <img src="uploads/b.jpeg" alt="Happy Medium Meal" class="rounded-lg shadow-lg w-60 h-60">
            <p class="mt-3 font-semibold">Happy Medium Meal</p>
        </div>

        <!-- Meal Item 3 -->
        <div class="text-center">
            <img src="uploads/c.jpeg"  alt="Happy Mini Meal" class="rounded-lg shadow-lg w-60 h-60">
            <p class="mt-3 font-semibold">Happy Mini Meal</p>
        </div>

        <!-- Meal Item 4 -->
        <div class="text-center">
            <img src="uploads/d.jpeg"  alt="Nano Meal" class="rounded-lg shadow-lg w-60 h-60">
            <p class="mt-3 font-semibold">Nano Meal</p>
        </div>

        <!-- Meal Item 5 -->
        <div class="text-center">
            <img src="uploads/a.jpeg" alt="Micro Meal" class="rounded-lg shadow-lg w-60 h-60">
            <p class="mt-3 font-semibold">Micro Meal</p>
        </div>
    </div>
</section>
</div><br>

<div class="container mt-4">
    <div class="row d-flex flex-wrap justify-content-center gallery">
        <!-- All images with proper Bootstrap classes -->
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY6.jpg" class="img-fluid" alt="Food 1">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY7.jpg" class="img-fluid" alt="Food 2">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY3.jpg" class="img-fluid" alt="Food 3">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY4.jpg" class="img-fluid" alt="Food 4">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY5.jpg" class="img-fluid" alt="Food 5">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY2.jpg" class="img-fluid" alt="Food 6">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY1.jpg" class="img-fluid" alt="Food 7">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY8.jpg" class="img-fluid" alt="Food 8">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GALLERY4.jpg" class="img-fluid" alt="Food 9">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/BRINGING-HOME-TO-YOUR-DOORSTEP.jpg" class="img-fluid" alt="Food 10">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/GREEN-SOUL-KITCHENS-SPREADS-LOVE.jpg" class="img-fluid" alt="Food 11">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/jamun.jpg" class="img-fluid" alt="Food 12">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/ondhiyo.jpg" class="img-fluid" alt="Food 13">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/bhidi.jpg" class="img-fluid" alt="Food 14">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/dal.jpg" class="img-fluid" alt="Food 15">
        </div>
        <div class="col-6 col-md-3 mb-3">
            <img src="uploads/paneer.jpg" class="img-fluid" alt="Food 16">
        </div>
    </div>
</div>

    <!-- Statistics Section -->
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <?php 
                $db = db_connect(); 

                // Total Users
                $query = $db->query("SELECT COUNT(*) AS total_users FROM person"); 
                $totalUsers = $query->getRow()->total_users ?? 0;

                // Total TiffinServices
                $query = $db->query("SELECT COUNT(*) AS total_tiffin_services FROM tiffin_services"); 
                $totalTiffinServices = $query->getRow()->total_tiffin_services ?? 0;

                // Total Specializations
                $query = $db->query("SELECT COUNT(*) AS total_specializations FROM specializations"); 
                $totalSpecializations = $query->getRow()->total_specializations ?? 0;
            ?>

            <div class="bg-green-100 p-6 rounded-lg shadow-lg border-l-4 border-yellow-400">
                <h3 class="text-lg font-semibold text-gray-700">👤 Total Users</h3>
                <p class="text-4xl text-yellow-400 font-bold mt-2"><?= $totalUsers ?></p>
            </div>

            <div class="bg-green-100 p-6 rounded-lg shadow-lg border-l-4 border-green-500">
                <h3 class="text-lg font-semibold text-gray-700">🏥 Total TiffinServices</h3>
                <p class="text-4xl text-green-600 font-bold mt-2"><?= $totalTiffinServices ?></p>
            </div>

            <div class="bg-green-100 p-6 rounded-lg shadow-lg border-l-4 border-red-500">
                <h3 class="text-lg font-semibold text-gray-700">💉 Total Specializations</h3>
                <p class="text-4xl text-red-600 font-bold mt-2"><?= $totalSpecializations ?></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; 2025 Best TiffinService. All Rights Reserved. 🌟</p>
    </footer> -->
    <footer class="bg-green-100 border-t border-gray-300 py-8 px-4">

    <div class="container mx-auto grid md:grid-cols-3 gap-8">
        
        <!-- Left Section (Logo & Description) -->
        <div class="text-gray-700">
            <img src="uploads/logo.png" alt="Company Logo" class="h-16 mb-4">
            <p class="text-sm">
                Green Souls Kitchens is Best tiffin Service in Pune. 
                We Cater not only Homes & Offices but also a variety of 
                Occasions with our Multi-cuisine options.
            </p>
        </div>

        <!-- Middle Section (Useful Links) -->
        <div class="text-gray-700">
            <h3 class="font-semibold text-lg mb-2">USEFUL LINKS</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="#" class="hover:text-green-600">Home</a></li>
                <li><a href="http://localhost:8080/about" class="hover:text-green-600">About Us</a></li>
                <li><a href="#" class="hover:text-green-600">Meal Plans</a></li>
                <li><a href="#" class="hover:text-green-600">Gallery</a></li>
                <li><a href="#" class="hover:text-green-600">FAQ</a></li>
                <li><a href="#" class="hover:text-green-600">Blog</a></li>
                <li><a href="#" class="hover:text-green-600">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-green-600">Terms & Conditions</a></li>
                <li><a href="#" class="hover:text-green-600">Contact Us</a></li>
            </ul>
        </div>

        <!-- Right Section (Contact Info) -->
        <div class="text-gray-700">
            <h3 class="font-semibold text-lg mb-2">CONTACT US</h3>
            <p class="text-sm flex items-center"><span class="mr-2">📞</span> +91 7757949545</p>
            <p class="text-sm flex items-center"><span class="mr-2">📧</span> shivtejpawar8@gmail.com</p>
            <p class="text-sm flex items-start"><span class="mr-2">📍</span>Green Soul Kitchens Pvt Ltd. <br>Shop No 5 A Wing, 
                Rajashree Apartment, Vitthalwadi Road, Hingne Khurd, Pune 411051</p>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="mt-6 border-t border-gray-300 pt-4 text-center text-gray-500 text-sm">
        <p>&copy; 2025 All rights reserved. Design and Developed by <span class="text-green-600 font-semibold">Digidicemedia</span></p>
    </div>
</footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
</body>
</html>
