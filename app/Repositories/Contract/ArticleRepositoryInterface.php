<?php
namespace App\Repositories\Contract;

interface ArticleRepositoryInterface
{
    public function find();
    public function findBy($name, $value);
}