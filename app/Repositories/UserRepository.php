<?php

namespace App\Repositories;

use App\Contracts\UserContract;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserContract
{
    private $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        try {
            return $this->users->all();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function store(array $validated)
    {
        try {
            $this->users->create([
                'name'     => $validated['name'],
                'email'    => $validated['email'],
                'admin'    => array_key_exists('admin', $validated),
                'password' => Hash::make($validated['password'])
            ]);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function show(string $id)
    {
        try {
            return $this->users->findOrFail($id);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function update(array $validated, string $id)
    {
        try {
            $user = $this->users->find($id);

            $user->name  = $validated['name'];
            $user->email = $validated['email'];
            $user->admin = array_key_exists('admin', $validated);

            $user->save();

            return $user;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function destroy(string $id)
    {
        try {
            $user = $this->users::findOrFail($id);

            $user->delete();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
