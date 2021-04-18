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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', 'StudentController@index');

// 2-4 
// https://laraxj.app/test/11/comments/22
Route::get('/test/{post}/comments/{comment}', function ($pid, $cid) {
    return [
        $pid,
        $cid
    ];
});

Route::get('/test/{name?}', function ($name = 'zyb') {
    return [
        $name,
    ];
});

// https://laraxj.app/test/default/11 可以
// https://laraxj.app/test/default/aa  不符合 404 

// 或者 在app\Providers\RouteServiceProvider.php 全局限制
Route::get('/test/default/{id}', function ($id) {
    return $id;
})
// ->where('id', '[0-9]+')
;

// 隐式路由绑定
Route::get('/test/default/{user}', function (App\User $user) {
    return $user;
});
// 可以修改 自定义键名 在对应模型修改 但是可能团队协作得看下
function getRouteKeyName() {
    return 'custom';
}

// 显示绑定 在app\Providers\RouteServiceProvider.php 路由函数可以省略模型
// Route::model('user', App\User::class);
Route::get('/test/default/{user}', function ($user) {
    return $user;
});

