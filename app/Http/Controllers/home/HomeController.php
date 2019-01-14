<?php

namespace App\Http\Controllers\home;

use App\c;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $products=  DB::table('products')->get();


//    DB::table('users')
//        ->insert([
//            'name'=>'asdf','email'=>'asdf@sadf.com','password'=>'sadfkj',
//            'name'=>'wangwenli','email'=>'asdf@qq.com','password'=>'wang@wenli.com'
//        ]);

//
//    //删
//        DB::table('users')
//            ->where('id','>',4)
//            ->delete();

        //改

//        DB::table('users')
//            ->where('id','=',4)
//            ->update(['name'=>'wang5','email'=>'wang@wang.com','password'=>bcrypt('12345')]);


//        //查询
//        $users=DB::table('users')
//            ->where('id','>',2)
//            ->get('email');


//        $email = DB::table('users')->where('name', 'wang5')->value('email');



        return view('home.index',compact('products'));

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
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
