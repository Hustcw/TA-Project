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

Route::get('/','HomePageController@home')->name('homepage');

Route::resource('/users', 'UsersController');
Route::get('/signup','UsersController@create')->name('signup');//注册页面
Route::post('/users/{users}/addcourse','CourseUsersController@store')->name('add.course');


/*重置密码*/
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('password/reset/wait','Auth\ForgotPasswordController@showWaitPage')->name('password.wait');
Route::get('password/reset/final','Auth\ForgotPasswordController@showfinal');


/*
Route::get('/users', 'UsersController@index')->name('users.index');//
Route::get('/users/{users}', 'UsersController@show')->name('users.show');//个人主页
Route::get('/users/create', 'UsersController@create')->name('users.create');//注册页面
Route::post('/users', 'UsersController@store')->name('users.store');//注册处理
Route::get('/users/{users}/edit', 'UsersController@edit')->name('users.edit');//编辑个人信息页面
Route::patch('/users/{users}', 'UsersController@update')->name('users.update');//更新个人信息处理
Route::delete('/users/{users}', 'UsersController@destroy')->name('users.destroy');
*/

Route::get('/signin','SessionsController@signin')->name('signin');//登陆页面
Route::post('/signin', 'SessionsController@store')->name('signin');//登陆提交
Route::delete('signout', 'SessionsController@destroy')->name('signout');//退出登录


Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');//邮箱激活


Route::post('/courses/{users}', 'CoursesController@bindcourse')->name('courses.store');//提交课程信息处理
Route::patch('/courses/{users}', 'CoursesController@update')->name('courses.update');//课程信息更新
Route::get('/courses/{users}','CoursesController@show')->name('courses.show');//展示课程信息
Route::delete('/courses/{users}','CourseUsersController@destroy')->name('course.delete');
Route::get('/ta_courses/{users}','UsersController@select')->name('course.select');
Route::patch('/ta_courses/{users}','UsersController@selectcourse')->name('course.selectcourse');


Route::get('/users/{users}/tasks','TasksController@show')->name('tasks.show');//显示任务发布页面
Route::post('/tasks/{users}','TasksController@addtask')->name('tasks.store');//添加新的任务到数据库
Route::get('users/{users}/courses/{courses}/tasks','TasksController@stshow')->name('tasks.stshow');//学生查询成绩页面

Route::get('/users/{users}/grade','TasksController@grade')->name('tasks.grade');
Route::get('/users/{users}/tasks/{task}/showgrade','TasksController@showgrade')->name('tasks.showgrade');
Route::get('/getJson/tasks/{task}','TasksController@getJson')->name('tasks.getJson');
Route::post('/editgrade/tasks/{task}','TasksController@editgrade')->name('tasks.editgrade');




