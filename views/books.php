<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <nav class="d-flex justify-content-between">
            <img src="https://img.icons8.com/wired/64/000000/book-stack.png"/>
        
            <div>
                <a href="/books/create" class="btn btn-lg btn-success mt-3">New Book</a>
            </div>
        </nav>
        <hr>
    </div>

    <div class="container">
        <?php foreach ($books as $book): ?>
            <div class="card mb-3 border border-success">
                <div class="card-body">
                    <div class="card-title text-success"><?php echo $book->book_title ?></div>
                    <div class="card-subtitle samll text-muted mb-4 border-bottom">Author : <?php echo $book->author_name ?></div>
                    <p class="card-text"><?php echo substr($book->book_content, 0, 120)?>...</p>
                    <a href="/book/<?php echo $book->id ?>" class="card-link text-success">Read More &raquo;</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>