<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        return view('dashboard.users.index', [
            'users' => User::simplePaginate(15)
        ]);
    }

    public function show(User $user)
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }

        return view('dashboard.users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        if (! Gate::allows('superadmin')) {
            abort(403);
        }

        return view('dashboard.users.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        if (! Gate::allows('superadmin')) {
            abort(403);
        }

        $attributes = request()->validate([
            'role' => 'required',
        ]);

        $user -> update($attributes);
        return redirect('dashboard/users/');
    }

    public function destroy(User $user)
    {
        if (! Gate::allows('superadmin')) {
            abort(403);
        }
        $user->delete();
        return redirect('dashboard/users/');
    }
}
