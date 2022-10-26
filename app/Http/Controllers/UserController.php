<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\PaginationResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
            ->when($request->search, function ($query, $seach) {
                $query->where('name', 'like', "%{$seach}%")
                    ->orWhere('email', 'like', "%{$seach}%");
            })
            ->orderByDesc('id')
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Users/Index', [
            'users' => UserResource::collection($users),
            'filters' => [
                'search' => $request->search ?? '',
            ],
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users');
    }
}
