<?php namespace Meep\Users;

use Illuminate\Database\Query\Builder;

class UserRepository
{
    /**
     * @var User|Builder
     */
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function hasUsers() : bool
    {
        return $this->model->exists();
    }
}