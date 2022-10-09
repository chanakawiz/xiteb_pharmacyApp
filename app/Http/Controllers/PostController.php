<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostPrescription;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Auth;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            $post =new PostPrescription([

                "user_name"=>$request->user_name,
                "user_id"=>$request->user_id,
                "note" =>$request->note,
                "delivery_address" =>$request->delivery_address,
                "delivery_time" =>$request->delivery_time,
//                "images" =>$request->images,
            ]);
            $post->save();


        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['post_id']=$post->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                Image::create($request->all());

            }
        }

        return redirect("/dashboard");




//        if($request->hasFile("cover")){
//            $file=$request->file("cover");
//            $imageName=time().'_'.$file->getClientOriginalName();
//            $file->move(\public_path("cover/"),$imageName);
//
//            $post =new PostPrescription([
//
//                "user_name"=>$request->user_name,
//                "user_id"=>$request->user_id,
//                "note" =>$request->note,
//                "delivery_address" =>$request->delivery_address,
//                "delivery_time" =>$request->delivery_time,
//                "images" =>$request->images,
//            ]);
//
//            $post->save();
//        }

//            $post =new PostPrescription([
//
//                "user_name"=>$request->user_name,
//                 "user_id"=>$request->user_id,
//                "note" =>$request->note,
//                "delivery_address" =>$request->delivery_address,
//                "delivery_time" =>$request->delivery_time,
//                "images" =>$request->images,
//            ]);
//
//        if($request->hasFile("images")){
//            $files=$request->file("images");
//            foreach($files as $file){
//                $imageName=time().'_'.$file->getClientOriginalName();
//                $request['post_id']=$post->id;
//                $request['image']=$imageName;
//                $file->move(\public_path("/images"),$imageName);
//                Image::create($request->all());
//
//            }
//        }
//
//
////        $post->save();
//
//        return redirect("/dashboard");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
