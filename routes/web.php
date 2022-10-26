<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});

Route::get('users', function () {
    return Inertia::render('Users/Index', [
        'users' => User::when(Request::input('search'), function ($query, $seach) {
            $query->where('name', 'like', "%{$seach}%");
        })->orderByDesc('id')->paginate(10)->withQueryString()->through(fn($user) => [
            'id' => $user->id,
            'name' => $user->name,
        ]),
        'filters' => Request::only(['search']),
    ]);
});

Route::get('users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('users/store', function () {
    Request::validate([
        'name' => ['required'],
        'email' => ['required', 'email', Rule::unique('users')],
        'password' => ['required', 'min:8'],
    ]);

    User::create([
        'name' => Request::input('name'),
        'email' => Request::input('email'),
        'password' => Hash::make(Request::input('password')),
    ]);

    return redirect('/users');
});

Route::get('settings', function () {
    return Inertia::render('Setting');
});
