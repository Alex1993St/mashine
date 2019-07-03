<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try{
            $getImage = $request->img;

            $image = $getImage->getClientOriginalName();

            $getImage->move('uploads/', $image);

            $arr = [
                'title' =>  $data['title'],
                'slug' => Blog::createSlug($data['title']),
                'description' =>  $data['description'],
                'img' =>  $image,
                'short_text' =>  $data['short_text'],
            ];

            Blog::create($arr);
            return 'save';
        }catch (\Exception $e){
            return 'error';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return Blog::where('id', $blog->id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {

       try{
           $image = 'uploads/'.$blog->img;

           if(File::exists($image)){
               File::delete($image);
           }

           Blog::where('id', $blog->id)->delete();
           return 'delete';
       }catch(\Exception $e){
           return 'error';
       }
    }
}