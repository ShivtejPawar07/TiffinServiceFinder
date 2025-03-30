<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏥 Mess List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* General Styling */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            background-size: cover;
        }

        /* Content Area */
        .content {
            flex: 1;
            padding: 60px;
            margin-top: 100px; /* Added margin-top to push content below the header */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 1400px;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .table-container {
            width: 100%;
            margin: 0 auto;
        }

        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }

        /* Buttons */
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px; /* बटणांमध्ये 10px अंतर */
        }

        .edit {
            background-color: #ffc107;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
        }

        .edit:hover {
            background-color: #e0a800;
            color: white;
        }

        .delete {
            background-color: #dc3545;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
        }

        .delete:hover {
            background-color: #c82333;
            color: white;
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
<nav class="navbar">
    <img src="<?= base_url('uploads/logo.png') ?>" alt="Company Logo" class="logo">
    <div class="nav-links">
        <a href="<?= base_url('/') ?>"><i data-lucide="home"></i> Home</a>
        <a href="<?= base_url('about') ?>"><i data-lucide="info"></i> About Us</a>
        <a href="<?= base_url('admin/login') ?>"><i data-lucide="shield"></i> Admin</a>
        <a href="<?= base_url('ratings') ?>"><i data-lucide="star"></i> Rating</a>
        <a href="<?= base_url('/locations/create') ?>"><i data-lucide="map-pin"></i> Add Locations</a>
        <a href="<?= base_url('/locations') ?>"><i data-lucide="map"></i> Update Locations</a>
        <a href="<?= base_url('/specializations/create') ?>"><i data-lucide="stethoscope"></i> Add Specialization</a>
        <a href="<?= base_url('/specializations') ?>"><i data-lucide="clipboard"></i> Manage Specializations</a>
    </div>
</nav>

<!-- Content Area -->
<div class="content">
    <div class="container">
        <div class="table-container">
            <h1 class="text-center">📌 Total TiffineService List</h1>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>🆔 ID</th>
                        <th>🏥 Name</th>
                        <th>🌆 City</th>
                        <th>📍 Address</th>
                        <th>🗺 State</th>
                        <th>📞 Phone</th>
                        <th>📧 Email</th>
                        <th>🩺 Specializations</th>
                        <th>⚙ Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tiffin_services as $tiffin_service): ?> <!-- Changed from hospitals to tiffin_services -->
                        <tr>
                            <td><?= $tiffin_service['h_id'] ?></td> <!-- Changed from h_id to t_id -->
                            <td><?= $tiffin_service['name'] ?></td>
                            <td><?= $tiffin_service['city'] ?></td>
                            <td><?= $tiffin_service['address'] ?></td>
                            <td><?= $tiffin_service['state'] ?></td>
                            <td><?= $tiffin_service['phone_no'] ?></td>
                            <td><?= $tiffin_service['email'] ?></td>
                            <td><?= !empty($tiffin_service['specializations']) ? $tiffin_service['specializations'] : 'N/A'; ?></td>

                            <td class="actions">
                                <a href="/tiffin_services/edit/<?= $tiffin_service['h_id'] ?>" class="btn edit">✏ Edit</a> <!-- Changed from hospitals to tiffin_services -->
                                <a href="/tiffin_services/delete/<?= $tiffin_service['h_id'] ?>" class="btn delete" onclick="return confirm('Are you sure?')">🗑 Delete</a> <!-- Changed from hospitals to tiffin_services -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
</body>
</html>
