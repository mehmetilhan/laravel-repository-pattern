<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface IBookRepository
{

    /**
     * I use the repository interface for independent ORM and Database
     *
     */

    public function all() : Collection;
}
