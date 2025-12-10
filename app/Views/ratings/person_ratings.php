<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Ratings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("<?= base_url('uploads/ba.jpeg') ?>") no-repeat center center fixed;
        }
        
        .container {
            margin-top: 50px;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #007bff;
            color: white;
        }

        tr:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>⭐ All Ratings</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Review</th>
                <th>Person ID</th>
                <th>Hospital ID</th>
            </tr>
            <?php foreach ($ratings as $rating): ?>
            <tr>
                <td><?= $rating['r_id']; ?></td>
                <td><?= $rating['review']; ?></td>
                <td><?= $rating['p_id']; ?></td>
                <td><?= $rating['h_id']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>
