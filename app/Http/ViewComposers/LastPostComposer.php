<?php
/**
 * Created by PhpStorm.
 * User: programist_1
 * Date: 28.06.2019
 * Time: 17:20
 */

namespace App\Http\ViewComposers;
use Illuminate\View\View;

class LastPostComposer
{

    public function compose(View $view)
    {

        $view->with(['post' => 1]);
    }

}
