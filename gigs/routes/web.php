<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings/index', ['listings' => Listing::all()]);
});

Route::get('/listing/{listing}', function (Listing $listing) {

    return view('listings/show', ['listing' => $listing]);

});
// Route::get('/hello',function(){
//     return response('<marquee>Hello World</marquee>');
// });

// Route::get('/hello/{id}',function($id){
//     return response('<h1>Post.</h1>'.$id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
// return ($request->name.''.$request->city);
// });