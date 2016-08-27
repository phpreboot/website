<?php
/**
 * App\Services\MagazineService
 * User: kapil
 * Date: 28/8/16
 * Time: 3:41 AM
 */

namespace App\Services;

use App\Repositories\Contract\MagazineRepositoryInterface;

class MagazineService {
    protected $magzineRepo;

    public function __construct(MagazineRepositoryInterface $magazineRepo)
    {
        $this->magzineRepo = $magazineRepo;
    }

    public function getAllMagazines()
    {
        return $this->magzineRepo->find();
    }
}