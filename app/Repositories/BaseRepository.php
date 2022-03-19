<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements IBaseRepository
{
    protected $model;

    /**
     * @param $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function create(array $attributes): bool
    {
        // TODO: Implement create() method.
        return true;
    }

    public function getAll(): Collection
    {
        return $this->model->getAll();
    }

    public function getCount(): int
    {
        return $this->model->count();
    }

    public function getByName($name): ?Model
    {
        return $this->model->where('name','LIKE','%'.$name.'%')->firstOrFail();
    }

}
