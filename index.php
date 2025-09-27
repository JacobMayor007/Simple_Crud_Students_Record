<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container py-5">

    <h2 class="mb-4">Student Records</h2>

    <!-- Add Student Form -->
    <form action="insert.php" method="POST" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="col-md-4">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="course" class="form-control" placeholder="Course" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Add Student</button>
        </div>
    </form>

    <!-- Display Table -->
    <?php include 'select.php'; ?>

</body>

</html>