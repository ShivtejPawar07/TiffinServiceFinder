<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess List | MessFinder</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            background: #343a40;
            padding-top: 20px;
            color: white;
        }

        .sidebar h2 {
            text-align: center;
            padding: 10px 0;
            font-size: 22px;
            color: #ffc107;
        }

        .sidebar ul {
            padding: 0;
            list-style: none;
            margin: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }

        .sidebar ul li:hover {
            background: #007bff;
        }

        /* Content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }
        .container {
    margin-top: 20px;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;  /* Full width */
    max-width: 100%; /* Prevents overflow */
}


        .table th {
            background-color: #007bff;
            color: white;
        }

        .table td, .table th {
            text-align: center;
            vertical-align: middle;
        }

        .no-data {
            text-align: center;
            font-size: 18px;
            color: #666;
        }

        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            margin-left: 250px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">🏠 Dashboard</a></li>
            <li><a href="/hos/edit"><- Back>
            
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="header">
            MessFinder Admin - Mess List
        </div>

        <div class="container">
            <h2 class="text-center text-primary">🏥 Mess List</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Specializations</th>
                        <th>Website</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($hospitals)) : ?>
                        <?php foreach ($hospitals as $hos) : ?>
                        <tr>
                            <td><?= esc($hos['name']) ?></td>
                            <td><?= esc($hos['address']) ?></td>
                            <td><?= esc($hos['city']) ?></td>
                            <td><?= esc($hos['state']) ?></td>
                            <td><?= esc($hos['phone_no']) ?></td>
                            <td><?= esc($hos['email']) ?></td>
                            <td><?= esc($hos['specializations']) ?></td>
                            <td>
                                <?php if (!empty($hos['website_link'])) : ?>
                                    <a href="<?= esc($hos['website_link']) ?>" target="_blank">Visit</a>
                                <?php else : ?>
                                    N/A
                                <?php endif; ?>
                            </td>
                            <td><?= esc($hos['created_at']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="no-data">No mess found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        © 2025 MessFinder. All Rights Reserved. 🌟
    </footer>

</body>
</html>
