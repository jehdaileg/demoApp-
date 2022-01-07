<?php

use Carbon\Carbon;
use Inertia\Inertia;
use Faker\Provider\ar_EG\Internet;
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
    return Inertia::render('Index', [
        'name' => 'Jehdai',
        'frameworks' => ['Vue js', 'Tailwindcss', 'Laravel']

    ]);
});

Route::get('/users', function(){

    sleep(2);
    return Inertia::render('Users', [

        'time' => now()->toTimeString()
    ]);

});

Route::get('/settings', function(){

    sleep(2);

    return Inertia::render('Setings');

});

Route::post('/login', function(){

    dd(request('foo'));

});
