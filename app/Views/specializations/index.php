<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specializations List</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

body { 
    display: flex; 
    min-height: 100vh; 
    flex-direction: column; 
    background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
    background-size: cover; /* पूर्ण पान व्यापण्यासाठी */
}

.wrapper { 
    display: flex; 
    flex: 1; 
}

.content {
            flex: 1;
            padding: 200px;
            /* margin-top: 10px; Added margin-top to push content below the header */
            display: flex;
            justify-content: center;
            align-items: center;
        }

.header { 
    background: #007bff; 
    padding: 15px; 
    color: white; 
    font-size: 20px; 
    font-weight: bold; 
}

.card { 
    
    border-radius: 10px; 
    background-color: white; 
    padding: 20px; 
    box-shadow: 0 0 10px rgba(0,0,0,0.1); 
}

.table-primary { 
    background-color: #007bff; 
    color: white; 
}

.btn-warning { 
    background-color: #FFC107; 
    border-color: #FFC107; 
}

.btn-danger { 
    background-color: #DC3545; 
    border-color: #DC3545; 
}
</style>
</head>
<body>

<!-- Sidebar -->



<!-- Main Content -->
<div class="content">
   

    <!-- Success Message -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success mt-3"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <!-- Specializations Table -->
    <div class="card mt-4 flex-grow-1">
        <div class="d-flex justify-content-between mb-3">
            <h3>Specializations</h3>
            <a href="<?= base_url('/specializations/create') ?>" class="btn btn-primary">➕ Add Specialization</a>
        </div>

        <table class="table table-bordered text-center">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specializations as $specialization): ?>
                    <tr>
                        <td><?= $specialization['s_id'] ?></td>
                        <td><?= $specialization['name'] ?></td>
                        <td>
                            <a href="<?= base_url('/specializations/edit/'.$specialization['s_id']) ?>" class="btn btn-warning btn-sm">✏ Edit</a>
                            <a href="<?= base_url('/specializations/delete/'.$specialization['s_id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">🗑 Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Sticky Footer -->


</body>
</html>
