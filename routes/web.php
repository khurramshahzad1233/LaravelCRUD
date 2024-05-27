<?php

use App\Http\Controllers\ContactController;
use App\Models\Names;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('anchortag');
});
Route::get('/about/{name}',function($name){
    $data=compact('name');
    $age=40;
    return view('about')->with($data)->with('age',$age);
});

Route :: get('/names',function(){
    $names = Names::all();
    echo '<pre>';
    print_r($names->toArray());
});

Route::get('/contact',function(){
    return view('contact');
});


Route ::post('/contact',[ContactController::class,'contact']);
Route ::get('/contact/view',[ContactController::class,'view']);
Route ::delete('/contact/delete/{id}',[ContactController::class,'delete'])->name('deleterow');

// TO GET ALL SESSION DATA here p($session) is a functin that we created globally inside of helper file, authload one??
Route ::get('get_all_session',function(){
    $session = session()->all();
    p($session);
});

// set session 
Route ::get('set-session',function(Request $request){
    $request->session()->put('user_name','khurram shahzad');
    $request->session()->put('user_id','354554545');
    return redirect('get_all_session');
});

// how to destroy session data \
Route::get('/destroy_session',function(){
    session()->forget('user_id');
    return redirect('get_all_session');
});