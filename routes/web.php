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

#基礎路由
Route::get('basic1', function() {
  return 'Hello World';
});

Route::get('basic2', function() {
  return 'basic2';
});

#多請求路由
Route::match(['get','post'], 'multy1', function() {
  return 'multy1';
});

Route::any('multy2', function() {
  return 'multy2';
});

// Route::get('user/{id}', function ($id) {
//   return 'user-id-'.$id;
// });

// Route::get('user/{name?}', function ($name=null) {
//   return 'user-name-'.$name;
// });

// Route::get('user/{name?}', function ($name='sean') {
//   return 'user-name-'.$name;
// });

// Route::get('user/{id}/{name?}', function ($id,$name='sean') {
//   return 'user-id-'.$id.'-name-'.$name;
// })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

#路由別名
// route::get('user/center',['as'=>'center',function(){
//   return route('center');
// }]);

#路由群組
route::group(['prefix'=>'member'],function(){

  route::get('user/center',['as'=>'center',function(){
    return route('center');
  }]);

  Route::any('multy2', function() {
    return 'member_multy2';
  });

});

#路由中輸出視圖
Route::get('view', function () {
    return view('welcome');
});

// route::get('member/info','MemberController@info');

// route::any('member/info',['uses'=>'MemberController@info']);

// route::any('member/info',[
//   'uses'=>'MemberController@info',
//   'as'=>'memberinfo'
// ]);

//route::any('member/{id}',['uses'=>'MemberController@info'])
//->where('id','[0-9]+');

route::any('test1',['uses'=>'StudentController@test1']);
route::any('query1',['uses'=>'StudentController@query1']);
route::any('query2',['uses'=>'StudentController@query2']);
route::any('query3',['uses'=>'StudentController@query3']);
route::any('query4',['uses'=>'StudentController@query4']);
route::any('orm1',['uses'=>'StudentController@orm1']);
route::any('orm2',['uses'=>'StudentController@orm2']);
route::any('orm3',['uses'=>'StudentController@orm3']);
route::any('orm4',['uses'=>'StudentController@orm4']);
route::any('section1',['uses'=>'StudentController@section1']);
route::any('url',['as'=>'url','uses'=>'StudentController@urlTest']);
route::any('student/request1',['uses'=>'StudentController@request1']);

route::group(['middleware'=>['web']],function()
{
  route::any('session1',['uses'=>'StudentController@session1']);
  route::any('session2',['uses'=>'StudentController@session2']);
});
