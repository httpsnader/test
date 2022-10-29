<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'username' => optional(Auth::user())->name,
            'flash' => [
                'type' => fn() => $request->session()->get('type'),
                'message' => fn() => $request->session()->get('message'),
            ],
        ]);
    }
}
