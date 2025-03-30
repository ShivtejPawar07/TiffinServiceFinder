<?= $this->include('layouts/header') ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mess</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .content {
            margin-left: 20px;
            padding: 60px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin-top: 400px; /* Added margin-top to push content below the header */
        }

        .container {
            width: 90%;
            max-width: 900px;
            background-color: white;
            padding: 30px;
            margin: 50px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #333;
        }

        input, select, textarea {
            width: calc(100% - 10px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            background-color:rgb(242, 31, 69);
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
            background-color:rgb(242, 31, 69);
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
            <a href="<?= base_url('contact') ?>"><i data-lucide="contact"></i> Contact Us</a>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <h1>🩺 Register TiffineService</h1>
            <form action="<?= site_url('/tiffin_services/store') ?>" method="post"> <!-- Changed from hospitals to tiffin_services -->
                <label>Mess Name:</label>
                <input type="text" name="name" required>

                <label>Address:</label>
                <textarea name="address" required></textarea>

                <label>City:</label>
                <input type="text" name="city" required>

                <label>State:</label>
                <select name="state" id="stateDropdown" required>
                    <option value="">Select State</option>
                    <?php foreach ($states as $state): ?>
                        <option value="<?= $state['state'] ?>"><?= $state['state'] ?></option>
                    <?php endforeach; ?>
                </select>

                <label>Phone No:</label>
                <input type="text" name="phone_no" required>

                <label>Email:</label>
                <input type="email" name="email" required>

                <label>Specializations:</label>
                <select name="specializations[]" multiple required>
                    <?php foreach ($specializations as $specialization): ?>
                        <option value="<?= $specialization['s_id'] ?>"><?= $specialization['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <small>Hold `Ctrl` (Windows) or `Cmd` (Mac) to select multiple specializations.</small>

                <label>Website Link:</label>
                <input type="url" name="website_link">

                <label>Password:</label>
                <input type="password" name="password" required>

                <label>Admin:</label>
                <select name="a_id" required>
                    <option value="">Select Admin</option>
                    <?php foreach ($admins as $admin): ?>
                        <option value="<?= $admin['a_id'] ?>"><?= $admin['name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <label>Location:</label>
                <select name="l_id" required>
                    <option value="">Select Location</option>
                    <?php foreach ($locations as $location): ?>
                        <option value="<?= $location['l_id'] ?>"><?= $location['city'] ?></option>
                    <?php endforeach; ?>
                </select>

                <button type="submit">➕ Add Mess</button>

                <!-- Tiffin Service Login Button -->
                <button type="button" onclick="window.location.href='http://localhost:8080/tiffin_services/hos_login'" style="background-color:rgb(242, 31, 69);; margin-top: 10px;">
                    🏥 Login Mess
                </button>

            </form>
            
        </div>
    </div>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>
