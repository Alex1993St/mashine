<?php
/**
 * Created by PhpStorm.
 * User: programist_1
 * Date: 28.06.2019
 * Time: 17:20
 */

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Blog;

class LastPostComposer
{

    public function compose(View $view)
    {
        $blog = Blog::orderBy('updated_at', 'desc')->limit(5)->get()->toArray();
        $view->with(['blog' => $blog]);
    }

}
