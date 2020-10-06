<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="card mb-2">
            <div class="card-body">
                <div class="card-title">
                    <h5 class="text-success font-weight-bold"><?php echo $book->book_title ?></h5>
                    <div class="card-subtitle mb-3 text-muted small">
                        Author : <?php echo $book->author_name ?>
                    </div>
                </div>
                <p class="card-text"><?php echo $book->book_content ?></p>
                <div class="d-flex justify-content-end">
                    <a href="/books/edit/<?php echo $book->id ?>" class="btn btn-success mr-2">Edit</a>
                    <a href="/books/delete/<?php echo $book->id ?>" onclick="return confirm('Are you sure you want to delete this book')" class="btn btn-warning">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>