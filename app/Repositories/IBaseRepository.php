<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface IBaseRepository
{
    public function find($id): ?Model;

    public function create(array $attributes): bool;

    public function getAll(): Collection;

    public function getCount():int;

    public function getByName($name):?Model;
}
