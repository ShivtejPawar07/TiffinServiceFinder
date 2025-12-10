<?= $this->include('layouts/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register |</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            
            background: url("<?= base_url('uploads/bg2.jpeg') ?>")
        }

       

        .container {
            display: flex;
            width: calc(100% - 250px);
            margin-left: 250px;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            display: flex;
            width: 900px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .left-section {
            width: 50%;
            background-color:rgb(178, 239, 208);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            text-align: center;
        }

        .left-section h1 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .right-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea, select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background: linear-gradient(135deg, #6e45e2, #88d3ce);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #5a32b3, #76c2b8);
        }

        .login-link {
            margin-top: 10px;
            text-align: center;
        }

        .login-link a {
            color: #6e45e2;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>



<!-- Main Content -->
<div class="container">
    <div class="content">
    <div class="left-section">
    <h1>Join Tiffinservices</h1>
    <p>Find the best Tiffinservices.</p>
</div>

        
        <div class="right-section">
            <div class="register-container">
                <h2>Register</h2>

                <?php if (session()->getFlashdata('error')): ?>
                    <p class="error-message"><?= session()->getFlashdata('error') ?></p>
                <?php endif; ?>

                <form action="<?= site_url('/person/store') ?>" method="post">
                    <label>Name:</label>
                    <input type="text" name="name" required>

                    <label>Email:</label>
                    <input type="email" name="email" required>

                    <label>Phone No:</label>
                    <input type="text" name="phone_no" required>

                    <label>Address:</label>
                    <textarea name="address" required></textarea>

                    <!-- <label>Gender:</label>
                    <select name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select> -->

                    <label>Password:</label>
                    <input type="password" name="password" required>

                    <button type="submit">Register</button>
                </form>

                <p class="login-link">Already have an account? <a href="<?= site_url('/login') ?>">Login here</a></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>