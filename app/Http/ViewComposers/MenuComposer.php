<?php
/**
 * View composer for menu.
 * User: kapil
 * Date: 28/8/16
 * Time: 2:20 AM
 */

namespace app\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class MenuComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('count', $this->users->count());
    }
}