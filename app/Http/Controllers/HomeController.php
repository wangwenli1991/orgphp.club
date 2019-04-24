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
// $addtime= \DB::table('mac_vod')->whereDate('created_at', date("Y-m-d"));


// dd($addtime);

$result = \DB::select('select * from mac_vod limit 10');
$menu= \DB::table('mac_type')->where('type_pid', '0')->get();
        // $test= \DB::table('mac_vod')->get();
        // dd($result);
// exit(json_encode([$result]));
        return view('movie/index',compact('result'),compact('menu'),compact('tid1'));
    }

    public function dianying()
    {
        return view('movie/list');
    }

    public function lianxuju()
    {
        return view('movie/list');
    }

// 匿名函数获取get传递过来的menu的值
public function menu($menu){
    return 'user'.$menu;

}


//传递可选参数
    public function good($page = 1  )
    {
return 'paget'.$page;
        dd($menu);


        $result = \DB::select('select * from mac_vod limit 10');
        $menu= \DB::table('mac_type')->where('type_pid', '0')->get();
                // $test= \DB::table('mac_vod')->get();
                // dd($result);
        // exit(json_encode([$result]));
                return view('movie/list',compact('result'),compact('menu'),compact('tid1'));
    }




}
