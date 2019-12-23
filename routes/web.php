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
    $data = ['A','B','C'];
    return view('test', ['name' => 'daeyeop','data' => $data]);
});

/*
Route::get('/',['as'=>'home',function(){
    return '제 이름은 home 입니다.';
}]);

Route::get('/home',function(){
    return redirect(route('home'));
});
*/

/**
 * URL 파라미터 참조
 */
/*
Route::get('/{param}',function($param="test"){
    return $param;
});
*/

/**
 * Controller
 */
Route::get('/', 'WelcomeController@index');
Route::resource('articles', 'ArticlesController');