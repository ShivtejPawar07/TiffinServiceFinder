<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings & Reviews - HealthHubFinder</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url("<?= base_url('uploads/ba.jpeg') ?>") no-repeat center center fixed;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 15px;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #007BFF;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            height: 60px;
            background: #007BFF;
            color: white;
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: fixed;
            left: 250px;
            top: 0;
            z-index: 1000;
        }

        .navbar h1 {
            font-size: 1.5rem;
        }

        /* Main content */
        .content {
            margin-left: 250px;
            margin-top: 80px;
            padding: 30px;
            flex-grow: 1;
        }

        /* Table styling */
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #007BFF;
            color: white;
            text-align: center;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 15px;
            background-color: #2c3e50;
            color: white;
            position: fixed;
            bottom: 0;
            width: calc(100% - 250px);
            left: 250px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">HealthHubFinder+</h3>
        <a href="<?= base_url('/') ?>">🏠 Dashboard</a>
        <a href="<?= base_url('/about') ?>"> <-- Back to about</a>
        <a href="<?= base_url('search-hospitals') ?>"> <-- Back to search</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <h1>Ratings & Reviews</h1>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <div class="table-container">
            <h2 class="text-center">All Ratings & Reviews</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Parson ID</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ratings as $rating): ?>
                        <tr>
                            <td class="text-center"><?= $rating['p_id'] ?></td>
                            <td><?= $rating['review'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        © 2025 HealthHubFinder. All Rights Reserved. 🌟
    </div>

</body>
</html>
