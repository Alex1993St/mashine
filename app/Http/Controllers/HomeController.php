<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog =  Cache::remember('blog_index', 1, function (){
            $blog = Blog::orderBy('updated_at', 'desc')->limit(4)->get()->toArray();

            return $blog;
        });

        $main_blog = array_shift($blog);

        return view('front/index')->with(['main_blog' => $main_blog, 'blog' => $blog]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('front/about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function more($slug)
    {

        return view('front.more', ['blog' => Blog::where('slug', $slug)->get()->toArray()]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        $blog = Cache::remember('blogs', 120, function (){
            return Blog::all();
        });

        return view('front.blog', ['blog' => $blog]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('front/contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function work()
    {
        return view('front/work');
    }
}
