<?php
namespace App\Repositories\Contract;

interface MagazineRepositoryInterface
{
    public function find();
    public function getCount();
}