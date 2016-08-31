<?php
namespace App\Repositories\Contract;

interface MagazineRepositoryInterface
{
    public function find();
    public function findBy($name, $value);
    public function getCount();
}