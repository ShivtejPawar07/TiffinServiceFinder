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

    <style>
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
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <img src="<?= base_url('uploads/logo.png') ?>" alt="Company Logo" class="logo">
    <div class="nav-links">
        <a href="<?= base_url('/') ?>"><i data-lucide="home"></i> Home</a>
        <a href="<?= base_url('about') ?>"><i data-lucide="info"></i> About Us</a>
        <a href="<?= base_url('admin/login') ?>"><i data-lucide="shield"></i> Admin</a>
        <a href="<?= base_url('/locations/create') ?>"><i data-lucide="map-pin"></i> Add Locations</a>
        <a href="<?= base_url('/locations') ?>"><i data-lucide="map"></i> Update Locations</a>
        <a href="<?= base_url('/ratings') ?>"><i data-lucide="star"></i> Rating</a>
        <a href="<?= base_url('/specializations/create') ?>"><i data-lucide="clipboard"></i> Add Specializations</a>
        <a href="<?= base_url('/specializations') ?>"><i data-lucide="clipboard"></i> Manage Specializations</a>
        <a href="<?= base_url('contact') ?>"><i data-lucide="contact"></i> Contact Us</a>
    </div>
</nav>
<!-- Lucide Icons Script -->
<script>
    lucide.createIcons();
</script>

</body>
</html>