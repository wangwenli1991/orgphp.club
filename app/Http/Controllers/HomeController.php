<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    // $addtime= DB::table('mac_vod')->whereDate('created_at', date("Y-m-d"));
    $result = DB::select('select * from mac_vod limit 12');

    $menu= DB::table('mac_vod_type')->where('t_pid', '0')->get();
// exit(json_encode([$result]));
        //每个电影
//        $movie = DB::table('yy6080_vod')
//                            ->latest('d_addtime')
//                            ->limit(3)
//                            ->get();

//        ->join('contacts', 'users.id', '=', 'contacts.user_id')
//多表联查
        $movie=DB::table('yy6080_vod')
            ->join('yy6080_vod_type','yy6080_vod.d_type','=','yy6080_vod_type.t_sort')
            ->select('yy6080_vod_type.t_name','yy6080_vod.d_addtime')
            ->latest('d_addtime')
//             ->distinct('t_name')
            ->limit('12')
            ->get()
            ->groupBy('t_name')
        ->toArray();

//        dd($movie);

        $links = DB::table('mac_link')->get();
        return view('movie/index',compact('result','menu','tid1','links','movie'));
    }

    //点击菜单进入的
    public function channel($channell){
//        查询表type_id的内容
        $type_id=DB::table('mac_vod_type')->where('t_enname',$channell)->pluck('t_id');
        //查看当前分类目录的10个信息
        // $result = DB::select('select * from mac_vod limit 10')->where('type_id','3');
        $result = DB::table('mac_vod')
            ->limit('10')
//            ->where('d_id',$type_id)
            ->get();
        $menu= DB::table('mac_vod_type')->where('t_pid', '0')->get();
        // $menu= DB::table('mac_vod')->where('type_pid', '3')->get();
        $links = DB::table('mac_link')->get();
        $mac_vod=DB::table('mac_vod')->get()->groupBy('d_area');
//        $yy6080_vod_area=DB::table('yy6080_vod')->get()->groupBy('d_area');
//        $yy6080_vod_year_=DB::table('yy6080_vod')->get()->groupBy('d_year');
//dd($yy6080_vod);
//        dd($mac_vod);
        return view('movie/channel',compact('result','menu','tid1','links','mac_vod'));
    }

// 匿名函数获取get传递过来的menu的值
public function menu($menu){
//        查询表type_id的内容
    $type_id=DB::table('mac_vod_type')->where('t_enname',$menu)->pluck('t_id');
    //查看当前分类目录的10个信息
        // $result = DB::select('select * from mac_vod limit 10')->where('type_id','3');
        $result = DB::table('mac_vod')
                    ->limit('10')
                    ->where('d_id',$type_id)
                    ->get();
        $menu= DB::table('mac_vod_type')->where('t_pid', '0')->get();
        // $menu= DB::table('mac_vod')->where('type_pid', '3')->get();
        $links = DB::table('mac_link')->get();
                return view('movie/list',compact('result'),compact('menu'),compact('tid1'),compact('links'));
    // return 'user'.$menu;
}



//传递可选参数
    public function good($page = 1  )
    {
return 'paget'.$page;
        dd($menu);


        $result = DB::select('select * from mac_vod limit 12');
        $menu= DB::table('mac_type')->where('type_pid', '0')->get();
                // $test= DB::table('mac_vod')->get();
                // dd($result);
        // exit(json_encode([$result]));
                return view('movie/list',compact('result'),compact('menu'),compact('tid1'));
    }




}
