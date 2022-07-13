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
    return view('home', [     // collegamento al file home.blade.php in views
        'pageTitle' => 'DC-Comics',
        'arrFilms' => config('comics_links'),  // alternativa guardare il foreach in header.blade.php e footer.blade.php
    ]);
})->name('home');


// Route::get('/', function () {
//     $arr_Comics = config('comics_links'); // prendiamo il contenuto del file comics_links.php in config; ci ritorna il contenuto e lo mettiamo in una variabile array
//     return view('home', [     // collegamento al file home.blade.php in views
//         // 'arrHeader' => $arr_Header,
//         'pageTitle' => 'DC-Comics',
//         'arrComics' => $arr_Comics,
//          dd(Route::currentRouteName())
//     ]);
// })->name('home');
// Route::currentRouteName();


Route::get('/{id}', function ($id) {

    $film = null;
    foreach (config('comics_links') as $value){
        if ($value['id'] == $id){
            $film = $value;
            break;
        }
    }

    if ($film){
        return view('singlefilm', [     // collegamento al file film.blade.php in views
            'pageTitle' => 'Dc-Film',
            'film' => $film,
        ]);
    } else {
        abort(404);
    }
})->name('singlefilm');

