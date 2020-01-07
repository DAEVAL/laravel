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

/*
Route::get('/', function () {
    $data = ['A','B','C'];
    return view('test', ['name' => 'daeyeop','data' => $data]);
});
*/
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
//Route::resource('articles', 'ArticlesController');

Route::get('auth/login', function (){
    $credentials = [
        'email' => 'kgty4@forbiz.co.kr',
        'password' => 'password'
        ];

    if(! auth()->attempt($credentials)){
        return "로그인 정보가 정확하지 않습니다";
    }

    return redirect('protected');
});

Route::get('protected', function (){
    dump(session()->all());

    if(! auth()->check()){
        return "누구세요?";
    }

    return "어서 오세요".auth()->user()->name;
});

Route::get('auth/logout', function (){
    auth()->logout();

    return "또 봐요~";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
