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
    public function create($data, $getImage)
    {

        try{
            $image = $getImage->getClientOriginalName();
            $time = date('H-i-s');
            $getImage->move('uploads/', $time.$image);

            $arr = [
                'title' =>  $data['title'],
                'slug' => Blog::createSlug($data['title']),
                'description' =>  $data['description'],
                'img' =>  $time.$image,
                'short_text' =>  $data['short_text'],
            ];

            Blog::create($arr);
            return 'save';
        }catch (\Exception $e){
            return 'error';
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = $request->all('id_blog');
        if($route['id_blog'] != 'undefined'){
            return $this->update($request->all(), $request->img);
        }else{
            return $this->create($request->all(), $request->img);
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
    public function update($data, $getImage)
    {
        try{
            $update = [
                'title' => $data['title'],
                'slug' => Blog::createSlug($data['title']),
                'short_text' => $data['short_text'],
                'description' => $data['description'],
                'status' => $data['status'],
                'updated_at' => date('Y-m-d H:i:s')
            ];

            if($data['img'] != $data['img_old']){
                File::delete('uploads/' . $data['img_old']);
                $image = $getImage->getClientOriginalName();
                $time = date('H-i-s');
                $getImage->move('uploads/', $time.$image);
                $update['img'] = $time.$image;
            }

            Blog::where('id', $data['id_blog'])->update($update);
            return 'update';
        }catch(\Exception $e){
            return 'error';
        }

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
