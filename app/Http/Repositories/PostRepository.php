<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Contracts\PostRepositoryContract;
use App\Models\Post;

class PostRepository implements PostRepositoryContract
{
    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function paginate()
    {
        return $this->model->paginate(10);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }
}
