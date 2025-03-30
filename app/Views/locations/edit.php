<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Location</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* General Styles */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            color: #2c3e50;
        }

      

        /* Content Area */
        .content {
            margin-left: 250px;
            flex: 1;
            padding: 60px;
            margin: 20px;
        }

       

        

        /* Form Container */
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 50%;
            margin: auto;
        }

        .form-container h2 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 6px;
            padding: 10px;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

       

    </style>
</head>
<body>

<!-- Sidebar -->


<!-- Content Area -->
<div class="content">
    

    <div class="container">
        <div class="form-container mt-5">
            <h2>Edit Location</h2>
            <form action="<?= base_url('/locations/update/'.$location['l_id']) ?>" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="<?= $location['name'] ?>" required>
                </div>
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" name="city" class="form-control" value="<?= $location['city'] ?>" required>
                </div>
                <div class="form-group">
                    <label>State:</label>
                    <input type="text" name="state" class="form-control" value="<?= $location['state'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Country:</label>
                    <input type="text" name="country" class="form-control" value="<?= $location['country'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Postal Code:</label>
                    <input type="text" name="p_code" class="form-control" value="<?= $location['p_code'] ?>" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">✏ Update</button>
                    <a href="<?= base_url('/locations') ?>" class="btn btn-secondary">⬅ Back</a>
                </div>
            </form>
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
