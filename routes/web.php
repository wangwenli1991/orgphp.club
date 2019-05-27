<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//电影网站路由
//首页
Route::get('/', 'HomeController@index')->name('home');

//目录


Route::get('/menu/{menu}','HomeController@menu');
// 详情页传参
Route::get('/good/{page?}','HomeController@good');

//chanell
Route::get('channel/{channel}','HomeController@channel');



use App\Task;
use Illuminate\Http\Request;


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'home\HomeController@index');
Route::get('/about', 'home\AboutController@index');
Route::get('/shoplist', 'home\ShoplistController@index');
Route::get('/single', 'home\SingleController@index');
Route::get('/contact', 'home\ContactController@index');



Auth::routes();
//文章列表页
Route::get('/posts', 'Admin\AdminController@index');
//文章详情页
Route::get('/posts/{post}', 'Admin\AdminController@show');
//创建文章
Route::get('/posts/create', 'Admin\AdminController@create');
Route::get('/posts/{id}', 'Admin\AdminController@update');
//删除文章
Route::get('/posts/delete', 'Admin\AdminController@delete');















//task


Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/task', function () {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
        ]);
    });
    /**
     * Add New Task
     */


    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
//            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect('/task')
                ->withInput()
                ->withErrors($validator);
        }
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/task');
    });
    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();
        return redirect('/task');
    });
});
