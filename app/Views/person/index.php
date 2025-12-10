<?= $this->include('layouts/header') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Persons List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    font-family: 'Poppins', sans-serif;
    background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

        </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Persons List</h2>
        <a href="/person/create" class="btn btn-primary">Add Person</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                   
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($persons as $person): ?>
                    <tr>
                        <td><?= $person['p_id'] ?></td>
                        <td><?= $person['name'] ?></td>
                        <td><?= $person['email'] ?></td>
                        <td><?= $person['phone_no'] ?></td>
                        <td><?= $person['address'] ?></td>
                       
                        <td>
                            <a href="/person/edit/<?= $person['p_id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="/person/delete/<?= $person['p_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
