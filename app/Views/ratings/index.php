<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* General Styling */
        body { 
    display: flex; 
    min-height: 100vh; 
    flex-direction: column; 
    background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
    background-size: cover; /* पूर्ण पान व्यापण्यासाठी */
}

       
        /* Main Content */
        .content {
            flex: 1;
            padding: 200px;
            /* margin-top: 10px; Added margin-top to push content below the header */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 900px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Action Buttons */
        .btn-action {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            margin: 2px;
            display: inline-block;
        }

        .btn-edit {
            background-color: #28a745;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-v {
            background-color: blue;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #343a40;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            margin-left: 250px;
        }

        .add-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            display: inline-block;
            margin-top: 15px;
            transition: background 0.3s ease;
        }

        .add-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>



    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <h1>⭐ Ratings List</h1>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Review</th>
                    <th>Person ID</th>
                    
                    <th>Actions</th>
                </tr>
                <?php foreach ($ratings as $rating): ?>
                <tr>
                    <td><?= $rating['r_id']; ?></td>
                    <td><?= $rating['review']; ?></td>
                    <td><?= $rating['p_id']; ?></td>
                
                    <td>
                 
                
                        <a href="/ratings/delete/<?= $rating['r_id']; ?>" class="btn-action btn-delete" onclick="return confirm('Are you sure?');">🗑 Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

    
        </div>
    </div>

   

</body>
</html>
