<?php

use App\Http\Controllers\Auth\AuthController;
use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Faker\Provider\ar_EG\Internet;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function (){

Route::get('/', function () {
    return Inertia::render('Index', [
        'name' => 'Jehdai',
        'frameworks' => ['Vue js', 'Tailwindcss', 'Laravel']

    ]);
});


Route::get('/settings', function(){

    sleep(2);

    return Inertia::render('Setings');

});

Route::post('/login', function(){

    dd(request('foo'));

});

});



Route::get('/users/create', function(){

    return Inertia::render('Users/Create', [

        'test' => 'This is a test'

    ]);

});

Route::post('/users', function(){

    sleep(1);

    $attributes = Request::validate([

        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed']

    ]);

    User::create($attributes);

    return redirect('/users');

});

Route::get('/users', function(){

    /*
    sleep(2);
    return Inertia::render('Users', [

        'time' => now()->toTimeString(),

        'users' => User::all()->map(fn($user) => [
            'id' => $user->id,
            'name' => $user->name,
            'created_at' => $user->created_at
        ]),
    ]);
    */

    return Inertia::render('Users/Index', [

        'users' => User::query()
                            ->when(Request::input('search'), function ($query,$search){
                                $query->where('name', 'like', "%{$search}%");
                            })
                            ->paginate(10)
                            ->withQueryString()
                            ->through(fn($user) => [

                            'id' => $user->id,
                            'name' => $user->name,
                            'created_at' => $user->created_at

              ]),

              'filters' => Request::only(['search']),


    ]);

});



