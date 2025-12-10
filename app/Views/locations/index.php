<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locations List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* General Styles */
        body { 
    display: flex; 
    min-height: 100vh; 
    flex-direction: column; 
    background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
    background-size: cover; /* पूर्ण पान व्यापण्यासाठी */
} 

        /* Sidebar Styles */
       


        /* Content Area */
        .content {
            margin-left: 250px;
            flex: 1;
            padding: 60px;
            margin: 20px;
        }

       
        /* Table Styles */
        .table-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 95%;
            margin: auto;
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

        .add-location {
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 600;
            background: linear-gradient(135deg, #28a745 0%, #218838 100%);
            border: none;
        }

        /* Actions Buttons */
        .actions a {
            margin-right: 5px;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
        }

        .edit {
            background-color: #ffc107;
            color: white;
        }

        .edit:hover {
            background-color: #e0a800;
            color: white;
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

        .delete:hover {
            background-color: #c82333;
            color: white;
        }

        /* Sticky Footer */
        

    </style>
</head>
<body>

<!-- Sidebar -->


<!-- Content Area -->


    <div class="container">
        <div class="table-container">
            <h1 class="text-center">Locations</h1>
            <a href="<?= base_url('/locations/create') ?>" class="btn btn-success mb-3">➕ Add Location</a>
             
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Postal Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($locations as $location): ?>
                        <tr>
                            <td><?= $location['l_id'] ?></td>
                            <td><?= $location['name'] ?></td>
                            <td><?= $location['city'] ?></td>
                            <td><?= $location['state'] ?></td>
                            <td><?= $location['country'] ?></td>
                            <td><?= $location['p_code'] ?></td>
                            <td class="actions">
                                <a href="<?= base_url('/locations/edit/'.$location['l_id']) ?>" class="btn edit">✏ Edit</a>
                                <a href="<?= base_url('/locations/delete/'.$location['l_id']) ?>" class="btn delete" onclick="return confirm('Are you sure?')">🗑 Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer -->


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
