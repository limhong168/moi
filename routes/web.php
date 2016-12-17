<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('inserts',function(){
    return view('inserts');
});
Route::post('show','insertDb@show',function(){
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});
Route::get('showlist','insertDb@showlist',function (){
});
//Route::get('showlist','insertDb@show',function(){
Route::get('showtest','Log@test',function (){
});
//});

Route::get('account/lo', function() {
    return View::make('message');
});
Route::post('account/lo', 'AjaxController@login');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/getRequest',function(){
   if(Request::ajax()){
       return 'getRequest has loaded completed';
   }
});
Route::post('/reg',function(){
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});
Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');
?>

<?php

Route::get('(:bundle)', function()
{
    return View::make('jupload::index');
});

Route::get('(:bundle)/test', function()
{
    return View::make('jupload::test');
});

Route::any('(:bundle)/upload/(:any?)', array('as' => 'upload', function($folder = null)
{
    if ($folder !== null)
        $folder .= '/';

    $upload_handler = IoC::resolve('UploadHandler');

    if ( ! Request::ajax())
        return;

    switch (Request::method())
    {
        case 'OPTIONS':
            break;
        case 'HEAD':
        case 'GET':
            $upload_handler->get($folder);
            break;
        case 'POST':
            if (Input::get('_method') === 'DELETE')
            {
                $upload_handler->delete($folder);
            }
            else
            {
                $upload_handler->post($folder);
            }
            break;
        default:
            header('HTTP/1.1 405 Method Not Allowed');
    }
}));
?>
