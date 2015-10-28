<?php

namespace Torann\LaravelRepository\Criteria;

use Torann\LaravelRepository\Contracts\RepositoryInterface;

abstract class Criteria
{
    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public abstract function apply($model, RepositoryInterface $repository);
}