<?php

namespace App\Services;

use App\Contracts\UserContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserService
{
    private $userContract;

    public function __construct(UserContract $userContract)
    {
        $this->userContract = $userContract;
    }

    public function index()
    {
        return $this->userContract->index();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string',
            'email'    => 'required|email:rfc,dns|unique:users',
            'password' => 'required|string',
            'admin'    => 'nullable'
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $validated = $validator->safe()->only(['name', 'email', 'password', 'admin']);

        return $this->userContract->store($validated);
    }

    public function show(string $id)
    {
        return $this->userContract->show($id);
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string',
            'email'    => 'required|email:rfc,dns',
            'admin'    => 'nullable'
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $validated = $validator->safe()->only(['name', 'email', 'admin']);

        return $this->userContract->update($validated, $id);
    }

    public function destroy(string $id)
    {
        return $this->userContract->destroy($id);
    }
}
