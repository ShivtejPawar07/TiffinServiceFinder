<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Specialization</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
    display: flex; 
    min-height: 100vh; 
    flex-direction: column; 
    background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed;
    background-size: cover; /* पूर्ण पान व्यापण्यासाठी */
}        .wrapper { display: flex; flex: 1; }
        
        .content { margin-left: 170px; padding: 20px; flex: 1; display: flex; flex-direction: column; }
        .header { background: #007bff; padding: 15px; color: white; font-size: 20px; font-weight: bold; }
        .card { border-radius: 10px; background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
       
    </style>
</head>
<body>

<!-- Sidebar -->


<!-- Main Content -->
<div class="content">
   

    <!-- Specialization Form -->
    <div class="card mt-4">
        <h3>Add Specialization</h3>
        <form action="<?= base_url('/specializations/store') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">💾 Save</button>
            <a href="<?= base_url('/specializations') ?>" class="btn btn-secondary">🔙 Back</a>
        </form>
    </div>
</div>

<!-- Sticky Footer -->


</body>
</html>
