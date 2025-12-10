
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Search TiffineService</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            background-size: cover;
        }

        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 20px;
            flex: 1;
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

        .search-container {
            background-color: #d1fae5; /* Tailwind's green-100 equivalent */

            padding: 100px;
            margin: 50px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(211, 103, 25, 0.1);
            margin-top: 50px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: 600;
            margin-top: 10px;
            font-size: 16px;
        }

        select, input {
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
            width: 80%;
        }

        button {
            background-color: rgb(250, 33, 9);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 15px;
            width: 50%;
            transition: all 0.3s;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Results Styling */
        .results {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .results h3 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            width: 100%;
            color: #333;
        }

        .result-card {
            background-color: #d1fae5;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            margin: 15px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
        }

        .result-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }

        .result-card strong {
            font-size: 22px;
            color: #007BFF;
        }

        .result-card a {
            color: #007BFF;
            font-weight: bold;
            text-decoration: none;
        }

        .result-card a:hover {
            text-decoration: underline;
        }


    </style>
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar">
    <img src="<?= base_url('uploads/logo.png') ?>" alt="Company Logo" style="height: 50px; width: auto; margin-right: 10px;">
    <div class="nav-links">
        <a href="<?= base_url('/') ?>"><i data-lucide="home"></i> Home</a>
        <a href="<?= base_url('person') ?>"><i data-lucide="search"></i> Search Tiffin Service</a>
        <a href="<?= base_url('about') ?>"><i data-lucide="info"></i> About Us</a>
        <a href="<?= base_url('admin/login') ?>"><i data-lucide="shield"></i> Admin</a>
        <a href="<?= base_url('login') ?>"><i data-lucide="log-in"></i> User Login</a>
        <a href="<?= base_url('ratings/create') ?>"><i data-lucide="star"></i> User Rating</a>
        <a href="<?= base_url('contact') ?>"><i data-lucide="contact"></i> Contact Us</a>
        
    </div>
</nav>

<div class="search-container">
    <h2>Find a TiffineService</h2>
    <form action="<?= base_url('/search-tiffin_services') ?>" method="get"> <!-- Changed from search-hospitals to search-tiffin_services -->
        <label>What is your Location:</label>
        <select name="city">
            <option value="">Select City</option>
            <?php foreach ($cities as $city): ?>
                <option value="<?= esc($city['city']) ?>"><?= esc($city['city']) ?></option>
            <?php endforeach; ?>
        </select>

        <label>What you like Specialy:</label>
        <select name="specialization">
            <option value="">Select Specialization</option>
            <?php foreach ($specializations as $specialization): ?>
                <option value="<?= esc($specialization['name']) ?>"><?= esc($specialization['name']) ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Search</button>
    </form>
</div>

<div class="results">
    <?php if (!empty($tiffin_services)): ?> <!-- Changed from hospitals to tiffin_services -->
        <h3 style="color: red;">Search Results:</h3>

        <?php foreach ($tiffin_services as $tiffin_service): ?> <!-- Changed from hospitals to tiffin_services -->
            <div class="result-card">
                Name: <strong><?= esc($tiffin_service['name']) ?></strong><br> <!-- Changed from hospital to tiffin_service -->
                Address: 📍 <?= esc($tiffin_service['address']) ?>, <br> City: <?= esc($tiffin_service['city']) ?>, <br> State: <?= esc($tiffin_service['state']) ?><br> <!-- Changed from hospital to tiffin_service -->
                <!-- 🏥 Specialization: <?= esc($tiffin_service['specializations']) ?><br> --> <!-- Changed from hospital to tiffin_service -->
                🌍 Website: <?= (!empty($tiffin_service['website_link'])) ? '<a href="'.esc($tiffin_service['website_link']).'" target="_blank">Visit Website</a>' : 'N/A'; ?><br> <!-- Changed from hospital to tiffin_service -->
                📞 Contact: <?= esc($tiffin_service['phone_no']) ?> | ✉️ <?= esc($tiffin_service['email']) ?> <!-- Changed from hospital to tiffin_service -->
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p style="text-align: center; font-size: 20px; color: red;">No Mess found. Try another search.</p>
    <?php endif; ?>
</div>


<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
</body>
</html>
