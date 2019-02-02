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
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dusk-test','TestController@seeText');

Route::get('click-link', 'TestController@clickLink');

Route::get('click here', function () {
    return 'link clicked';
});

Route::get('dusk-view', 'TestController@duskView');

Route::get('safal', function () {
    return 'Safal';
});

Route::get('link-test', function () {
    return view('dusk-view');
});

Route::get('sample-route', function () {
    return redirect('redirect-route');
});
Route::get('redirect-route', function () {
    return 'redirected';
});

Route::get('sample-insert-test', function () {
    return view('sample-insert-test');
});

Route::get('insert-data', function (\Illuminate\Http\Request $request) {
    $data = $request->only(['name','email']);
    $password = implode($request->only(['password']));
    $data['password']=bcrypt($password);
    if (\App\User::create($data)) {
        return 'User created successfully';
    }else{
        return 'Error occured';
    }
});

Route::get('interacting-with-form', function () {
    return view('interacting-with-view');
});

Route::get('check-hash-password',function(){
    $password = bcrypt('safal');
    if (Hash::check('safal',$password)) {
        return 'password matched';
    }else{
        return 'password do not match';
    }

});

Route::get('simple-test', function () {
    $arr = array('ram', 'shyam', 'hari');
    return array_shift($arr);
});

// php unit test started

//php unit test ended
