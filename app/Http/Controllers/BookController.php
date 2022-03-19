<?php

namespace App\Http\Controllers;


use App\Services\BookService;

class BookController extends Controller
{

    /**
     * Here are only endpoints and views
     */

    private $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService= $bookService;
    }

    public function index()
    {
        return view('book.index')->with([
            'books' => $this->bookService->getAll()
        ]);
    }
}
