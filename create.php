<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-9 mt-4">
                <h2>Create New Student</h2>
                

                <form action="store.php" method="POST">
                    <div class="form-group mt-5">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group mt-5">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group mt-5">
                        <select name="gender" class="form-control">
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group mt-5">
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="form-group mt-5">
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary btn-lg mt-5">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
