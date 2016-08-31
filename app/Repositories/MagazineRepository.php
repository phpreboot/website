<?php
/**
 * App\Repositories\MagazineRepository.php
 * User: kapil
 * Date: 28/8/16
 * Time: 2:38 AM
 */

namespace App\Repositories;

use App\Models\Magazine;
use App\Repositories\Contract\MagazineRepositoryInterface;

class MagazineRepository implements MagazineRepositoryInterface {

    protected $magazine;

    public function __construct(Magazine $magazine)
    {
        $this->magazine = $magazine;
    }

    public function find()
    {
        return $this->magazine->all();
    }

    public function findBy($name, $value)
    {
        return $this->magazine->where($name, $value);
    }

    public function getCount()
    {
        return $this->magazine->all()->count();
    }
}