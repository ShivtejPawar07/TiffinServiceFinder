<?= $this->include('layouts/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rating</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* General Styling */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Main Container */
        .container {
            width: 100%;
            max-width: 500px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px; /* Added margin-top to push content below the header */
        }

        h1 {
            text-align: center;
            color: #007bff;
            font-size: 22px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        /* Star Rating */
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            font-size: 1.8rem;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            cursor: pointer;
            color: #ccc;
            transition: 0.3s;
        }

        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #f4c542;
        }

        /* Submit Button */
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Back Link */
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* Navbar */
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
            <a href="<?= base_url('person') ?>"><i data-lucide="search"></i> Search TiffinService</a>
            <a href="<?= base_url('about') ?>"><i data-lucide="info"></i> About Us</a>
            <a href="<?= base_url('admin/login') ?>"><i data-lucide="log-in"></i> Admin</a>
            <a href="<?= base_url('login') ?>"><i data-lucide="user"></i> User Login</a>
        </div>
    </nav>

    <div class="container">
        <h1>⭐ Add Rating</h1>
        <form action="<?= site_url('/ratings/store') ?>" method="post">
            <label>Review:</label>
            <textarea name="review" required></textarea>

            <label>Person ID:</label>
            <input type="number" name="p_id" value="<?= session()->get('p_id') ?>" readonly>

            <button type="submit">➕ Submit Rating</button>
        </form>
        <a href="/" class="back-link">⬅ Home Page</a>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>
