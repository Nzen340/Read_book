<?php

    require_once "DB.php";

    $db = new DB();
    $student = $db->show($_GET['id']);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-9 mt-4">
                <h2>Student Information</h2>
                
                <hr>

                <p>Name : <?php echo $student->name; ?></p>
                <p>Email : <?php echo $student->email; ?></p>
                <p>Gender : <?php echo $student->gender; ?></p>
                <p>Date of Birth : <?php echo $student->dob; ?></p>
                <p>Age : <?php echo $student->age; ?></p>

                <a href="edit.php?id=<?php echo $student->id; ?>" class="btn btn-info">Edit</a>
                <a href="delete.php?id=<?php echo $student->id; ?>" class="btn btn-danger">Delete</a>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>