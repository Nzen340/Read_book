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
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-9 mt-4">
                <h2>Edit Student</h2>

                <form action="update.php?id=<?php echo $student->id; ?>" method="POST">
                    <div class="form-group mt-5">
                        <input type="text" name="name" value="<?php echo $student->name; ?>" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group mt-5">
                        <input type="email" name="email" value="<?php echo $student->email; ?>" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group mt-5">
                        <select name="gender" class="form-control">
                            <option value="" disabled>Gender</option>
                            <option value="male" <?php if($student->gender == "male"){ echo "selected"; }?>>Male</option>
                            <option value="female" <?php if($student->gender == "female"){ echo "selected"; }?>>Female
                            </option>
                        </select>
                    </div>

                    <div class="form-group mt-5">
                        <input type="date" name="dob" value="<?php echo $student->dob; ?>" class="form-control">
                    </div>

                    <div class="form-group mt-5">
                        <input type="number" name="age" value="<?php echo $student->age; ?>" class="form-control" placeholder="Age">
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary btn-lg mt-5">Update</button>
                        <a href="index.php" class="btn btn-info btn-lg mt-5">Back</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>