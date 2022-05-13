<?php

namespace App\Http\Repositories\Contracts;

interface PostRepositoryContract
{
    public function paginate();
    public function find($id);
}
