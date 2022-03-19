<?php

namespace App\Services;

use App\Repositories\IBookRepository;

class BookService
{
    /**
     * I use the services for avoid the crowd in controllers
     * There is all repository connection and logic
     */


    private $bookRepository;

    public function __construct(IBookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAll()
    {
        return $this->bookRepository->all();
    }
}
