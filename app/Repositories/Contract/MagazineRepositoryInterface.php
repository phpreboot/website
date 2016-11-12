<?php
namespace App\Repositories\Contract;

interface MagazineRepositoryInterface
{
    public function find($order);
    public function findBy($name, $value);
    public function getCount();
}