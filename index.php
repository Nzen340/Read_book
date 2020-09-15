<?php

    require_once "DB.php";

    $db = new DB();
    $student = $db->index();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <a href="create.php" class="btn btn-primary">
                    Create Student
                </a>
            </div>

            <hr>

        </div>

        <div class="row mt-3">
            <div class="col-10">
                <?php if($student) : ?>
               
                    <table class="table table-striped table-bordered">
                    
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    <?php foreach($student as $students): ?>
                            <tr>
                                <td><?php echo $students->name ?></td>
                                <td><?php echo $students->email ?></td>
                                <td><?php echo ucfirst($students->gender) ?></td>
                                <td>
                                    <a href="show.php?id=<?php echo $students->id ?>" class="btn btn-primary btn-sm">
                                        Detail
                                    </a>
                                    <a href="delete.php?id=<?php echo $students->id; ?>" class="btn btn-outline-danger
                                    btn-sm">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                        </table>

                <?php else: ?>
                    <p>Student Not found in database</p>
                <?php endif; ?>
        </div>
    </div>
</body>
</html>
