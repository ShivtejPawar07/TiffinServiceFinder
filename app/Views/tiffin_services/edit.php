<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hospital</title>
    <style>
        /* General Styling */
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;  /* Horizontally center */
    align-items: center;  /* Vertically center */
}

.container {
    width: 400px;
    max-width: 90%;  /* Responsive */
    background-color: white;
    padding: 50px;  /* Reduced padding */
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Enhanced shadow */
    margin-top: 500px; /* Navbar नंतर थोडं खाली */
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;  /* Slightly increased padding */
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
}

button {
    width: 100%;
    background-color: #28a745;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
}

button:hover {
    background-color: #218838;
}

.back-link {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    transition: color 0.3s;
}

.back-link:hover {
    text-decoration: underline;
    color: #0056b3;
}

        
       

    </style>
</head>
<body>
    


    <!-- Sidebar -->
    
    </div>
    <div class="container">
        <h1 style='color:red'>Edit TiffineService</h1>
        <form action="<?= site_url('/tiffin_services/update/'.$tiffin_service['h_id']) ?>" method="post">
            <label>Name:</label>
            <input type="text" name="name" value="<?= $tiffin_service['name'] ?>" required>

            <label>Address:</label>
            <input type="text" name="address" value="<?= $tiffin_service['address'] ?>" required>

            <label>City:</label>
            <input type="text" name="city" value="<?= $tiffin_service['city'] ?>" required>

            <label>State:</label>
            <input type="text" name="state" value="<?= $tiffin_service['state'] ?>" required>

            <label>Phone No:</label>
            <input type="text" name="phone_no" value="<?= $tiffin_service['phone_no'] ?>" required>

            <label>Email:</label>
            <input type="email" name="email" value="<?= $tiffin_service['email'] ?>" required>
            <label>Specializations:</label>
<select name="specializations[]" multiple required>
    <?php foreach ($specializations as $specialization): ?>
        <option value="<?= $specialization['s_id'] ?>" 
            <?= in_array($specialization['s_id'], $selectedSpecializations) ? 'selected' : '' ?>>
            <?= $specialization['name'] ?>
        </option>
    <?php endforeach; ?>
</select>

            <label>Website:</label>
            <input type="text" name="website_link" value="<?= $tiffin_service['website_link'] ?>">

            <label>New Password (leave blank to keep current password):</label>
            <input type="password" name="password">

            <input type="hidden" name="a_id" value="<?= $tiffin_service['a_id'] ?>">
            <input type="hidden" name="l_id" value="<?= $tiffin_service['l_id'] ?>">

            <button type="submit">Update Mess</button>
        </form>
        <a href="/tiffin_services" class="back-link">⬅ Back to List</a>
    </div>
           <!-- Footer -->
          
    </div>

</body>
</html>
