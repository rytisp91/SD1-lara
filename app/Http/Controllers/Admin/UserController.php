<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private function getFakeUsers()
    {
        return [
            1 => ['id' => 1, 'first_name' => 'Jonas', 'last_name' => 'Jonaitis', 'email' => 'jonas@example.com'],
            2 => ['id' => 2, 'first_name' => 'Ona', 'last_name' => 'Onaitė', 'email' => 'ona@example.com'],
            3 => ['id' => 3, 'first_name' => 'Petras', 'last_name' => 'Petraitis', 'email' => 'petras@example.com'],
        ];
    }

    public function index()
    {
        $users = $this->getFakeUsers();
        return view('admin.users.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $users = $this->getFakeUsers();

        if (!isset($users[$id])) {
            abort(404);
        }

        return view('admin.users.edit', ['user' => $users[$id]]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'min:2', 'max:50'],
            'last_name' => ['required', 'string', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        return redirect()
            ->route('admin.users.edit', ['id' => $id])
            ->with('success', __('ui.saved_success'));
    }
}


