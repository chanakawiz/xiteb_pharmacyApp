<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostPrescription;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class PharmacyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role =Auth::user()->role;

        $orders = PostPrescription::All();

        if ($role=='1'){
            return view('Admin.pharmacyuser')->with('orders', $orders);
//            return view('normalview');
        }else{
            return view('dashboard');
        }


//        return view('Admin.pharmacyuser')->with('orders', $orders);

//        return view('pharmacyuser');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //show single order according to the user
    public function show($id)
    {
        $orders = PostPrescription::All()->where('id',$id);
//        $orders = PostPrescription::All();
        $images = Image::All()->where('post_id',$id);

//        $posts=Post::findOrFail($id);
//        $posts = Image::All();


//        return view('client.viewproduct')->with('products', $products);

//        return view('pharmacyuser')->with('orders', $orders);
        return view('Admin.vieworder')->with('orders', $orders)->with('images', $images);
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
