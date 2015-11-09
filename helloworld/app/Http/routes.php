<?php

use App\HolaMon;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloworld',
    "HolaMon@hello");

//Route::get(patataController@pataController);
Route::get('/helloworld2',"HolaMon@hello2");

Route::resource('user', 'UserController');

Route::get('/prova1', function () {
    return '<h1>Hello World</h1>';
});

Route::post('/prova1', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/prova2', function () {

$content = "<h1>Hello World</h1>" ;
$status = 200;
$contentType ="aplication/pdf" ;
return response($content , $status)
->header ("Content-Type" , $contentType);
});

Route::get('/prova3', function () {

    $content = "<h1>Hello World</h1>" ;
    $status =200;
    $contentType ="aplication/pdf" ;
    return response($content , $status)
        ->header ("Content-Type" , $contentType);
});

Route::get('/prova4', function () {
    $pathToFile = public_path('prova.pdf');
    dd ($pathToFile);
});

Route::get('/prova5', function () {
    $pathToFile = public_path('prova.pdf');
    echo $pathToFile;

});

Route::get('/prova6', function () {

    return [
        "name" => 'Abigail' , 'state' => 'CA'];

});



Route::get('/prova7', function () {

    return redirect("http://www.google.com");

});

