<?php

    namespace App\Controllers;

    use App\Models\Book;
    use Symfony\Component\HttpFoundation\Request;


    class BookController
    {
        public function bookMainPage()
        {
            return view("index.php");
        }

        public function index()
        {
            $books = Book::orderBy('id', 'DESC')->get();
            return view('books.php', ['books' => $books]);
        }

        public function show($id)
        {
            $book = Book::find($id);
            return view("show.php", ['book' => $book]);
        }

        public function create() 
        {
            return view("create.php");
        }

        public function store(Request $request)
        {
            $book = Book::create($request->request->all());
            header("location: /books");          
        }

        public function edit($id) 
        {
            $book = Book::find($id);
            return view("edit.php", ['book' => $book]);
        }

        public function update(Request $request)
        {
            Book::where('id', $request->request->get('id'))->update($request->request->all());
            return redirect("/books");
        }

        public function delete($id)
        {
            Book::destroy($id);

            return redirect("/books");
        }
    }
?>