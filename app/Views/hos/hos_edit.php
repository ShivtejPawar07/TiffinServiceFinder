<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mess | MessFinder</title>
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
            justify-content: center;
            align-items: center;
        }

        .navbar {
            width: 100%;
            height: 60px;
            background: #007BFF;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .update-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        .update-container h2 {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .update-container i {
            font-size: 30px;
            margin-bottom: 10px;
            color: #007bff;
        }

        .update-container input, .update-container textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .update-container textarea {
            height: 80px;
            resize: none;
        }

        .update-container button {
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

        .update-container button:hover {
            background-color: #0056b3;
        }

        .footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        MessFinder - Update Mess
    </div>

    <div class="update-container">
        <i class="fas fa-hospital"></i>
        <h2>🏥 Update mess Details</h2>
        
        <?= session()->getFlashdata('error') ?>

        <form method="post" action="<?= site_url('/hos/update') ?>">
            <?= csrf_field() ?> <!-- CSRF Protection -->

            <input type="text" name="name" value="<?= esc($hospital['name']) ?>" placeholder="Hospital Name" required>
            <input type="text" name="address" value="<?= esc($hospital['address']) ?>" placeholder="Address" required>
            <input type="text" name="city" value="<?= esc($hospital['city']) ?>" placeholder="City" required>
            <input type="text" name="state" value="<?= esc($hospital['state']) ?>" placeholder="State" required>
            <input type="text" name="phone_no" value="<?= esc($hospital['phone_no']) ?>" placeholder="Phone No" required>
            <input type="email" name="email" value="<?= esc($hospital['email']) ?>" placeholder="Email" required>
            <textarea name="specializations" placeholder="Specializations"><?= esc($hospital['specializations']) ?></textarea>
            <input type="text" name="website_link" value="<?= esc($hospital['website_link']) ?>" placeholder="Website Link">

            <button type="submit">Update</button>
        </form>
    </div>

    <div class="footer">
        © 2025 messFinder. All Rights Reserved. 🌟
    </div>

</body>
</html>
