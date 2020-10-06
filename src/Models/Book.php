<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model 
    {
        protected $table = 'books';
        
        public $timestamps = false;

        protected $fillable = ['author_name', 'book_title', 'book_content'];
    }
