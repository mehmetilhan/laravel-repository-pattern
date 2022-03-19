<?php

namespace App\Repositories;

use App\Models\Book;
use Illuminate\Support\Collection;

class BookRepository extends BaseRepository implements IBookRepository
{
    public function __construct(Book $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
