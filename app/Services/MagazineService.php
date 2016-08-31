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
    protected $magazineRepo;

    public function __construct(MagazineRepositoryInterface $magazineRepo)
    {
        $this->magazineRepo = $magazineRepo;
    }

    public function getMagazineByShortName($shortName)
    {
        return $this->magazineRepo->findBy('short_name', $shortName)->first();
    }

    /**
     * Returns all the magazine
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllMagazines()
    {
        return $this->magazineRepo->find();
    }

    /**
     * Returns number of available magazines.
     *
     * @return integer Number of available magazines.
     */
    public function getCount()
    {
        return $this->magazineRepo->getCount();
    }
}