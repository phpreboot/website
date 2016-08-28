<?php
/**
 * View composer for menu.
 * User: kapil
 * Date: 28/8/16
 * Time: 2:20 AM
 */

namespace app\Http\ViewComposers;

use App\Services\MagazineService;
use Illuminate\Contracts\View\View;

class MenuComposer {
    protected $magazineService;

    public function __construct(MagazineService $magazineService)
    {
        $this->magazineService = $magazineService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $magazines = $this->magazineService->getAllMagazines();
        $view->with('totalMagazine', $magazines->count());
        $view->with('magazines', $magazines);
    }
}