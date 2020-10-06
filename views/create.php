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
    <form action="/books/store" method="POST">
        <div class="form-group">
            <label for="">Author Name</label>
            <input type="text" name="author_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Book Title</label>
            <input type="text" name="book_title" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Book Content</label>
            <textarea name="book_content" rows="10" class="form-control"></textarea>
        </div>

        <div class="d-flex justify-content-end">
        <button class="btn btn-primary mr-2">Add New Book</button>
        <a href="/books" class="btn btn-warning">Back</a>
        </div>
    </form>
</div>
</body>
</html>