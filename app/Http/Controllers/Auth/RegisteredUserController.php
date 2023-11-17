<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Inertia\Inertia;
use Inertia\Response;

use App\Enums\User\Role as UserRole;

use App\Models\User;
use App\Models\Workspace;
use App\Models\Timezone;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'timezone_id' => Timezone::where('value', 'Atlantic/Azores')->first()->id,
        ]);

        $workspace = Workspace::create([
            'api_token' => Str::uuid(),
        ]);

        // attach user to workspace
        $user->workspaces()->attach($workspace->id, [
            'role' => UserRole::ROLE_OWNER,
        ]);

        $user->forceFill([
            'current_workspace_id' => $workspace->id,
        ])->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
