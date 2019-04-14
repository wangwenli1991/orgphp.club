<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

$result = \DB::select('select * from mac_vod limit 10');
$menu= \DB::table('mac_type')->where('type_pid', '0')->get();
        // $test= \DB::table('mac_vod')->get();
        // dd($result);
// exit(json_encode([$result]));
        return view('movie/index',compact('result'),compact('menu'),compact('tid1'));
    }
}
