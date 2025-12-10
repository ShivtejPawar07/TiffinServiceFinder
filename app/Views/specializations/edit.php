<?= $this->include('layouts/header2') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Specialization</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { display: flex; min-height: 100vh; flex-direction: column; background-color: #f8f9fa; background: url("<?= base_url('uploads/bg2.jpeg') ?>") no-repeat center center fixed; }
        .wrapper { display: flex; flex: 1; }
      
        .content {
            flex: 1;
            padding: 200px;
            /* margin-top: 10px; Added margin-top to push content below the header */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header { background: #007bff; padding: 15px; color: white; font-size: 20px; font-weight: bold; }
        .card { border-radius: 10px; background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
       
    </style>
</head>
<body>



<!-- Main Content -->
<div class="content">
    

    <!-- Specialization Edit Form -->
    <div class="card mt-4">
        <h3>Edit Specialization</h3>
        <form action="<?= base_url('/specializations/update/'.$specialization['s_id']) ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="<?= $specialization['name'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">💾 Update</button>
            <a href="<?= base_url('/specializations') ?>" class="btn btn-secondary">🔙 Back</a>
        </form>
    </div>
</div>

<!-- Sticky Footer -->


</body>
</html>
