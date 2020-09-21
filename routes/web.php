<?php

use Illuminate\Support\Facades\Route;

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
  $data = config('pasta.database');

  return view('home',compact('data'));
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('homepage');
// });


// Route::get('/bootcamp',function(){
//
//   $hello = 'HEllo world from me';
//   return view('bootcamp', compact('hello'));
//
//   //la funzione return con il compact equivale a:
//   //return view('bootcamp', ['hello'=> 'HEllo world from me']);
//   // richiamare la funzione in html:
//   //@php echo $hello @endphp ma la scorciatoia per stampare le variabili è con le doppie parentesi graffe {{$hello}}
//
// });
