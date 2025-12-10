<?= $this->include('layouts/header') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* General Styles */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
            background-size: cover;
            color: #2c3e50;
        }

        /* Content Area */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-bottom: 70px;
        }

        h2 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 20px;
            color: #007bff;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        button {
            background: linear-gradient(135deg, #007BFF 0%, #0056b3 100%);
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background: #0056b3;
        }

        /* Sticky Footer */
        footer {
            background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);
            color: white;
            padding: 1rem 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Content Area -->
<div class="content">
    <div class="container">
        <h2>🔐 Admin Login</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <form action="<?= site_url('/admin/login') ?>" method="post">
            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

<!-- Footer -->



<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
