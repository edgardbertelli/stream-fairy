<?php

namespace App\Services;

use App\Contracts\MovieContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieService
{
    private $movieContract;

    public function __construct(MovieContract $movieContract)
    {
        $this->movieContract = $movieContract;
    }

    public function index()
    {
        return $this->movieContract->index();
    }

    public function show(string $id)
    {
        return $this->movieContract->show($id);
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|unique:movies',
            'description' => 'required',
            'director'    => 'required',
            'year'        => 'required',
            'rate'        => 'required',
            'genre_id'    => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('movies.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $validated = $validator->safe()->only([
            'title', 'description', 'director', 'year', 'rate', 'genre_id'
        ]);

        return $this->movieContract->update($validated, $id);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|unique:movies',
            'description' => 'required',
            'director'    => 'required',
            'year'        => 'required',
            'rate'        => 'required',
            'genre_id'    => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('movies.create')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $validated = $validator->safe()->only([
            'title', 'description', 'director', 'year', 'rate', 'genre_id'
        ]);

        return $this->movieContract->store($validated);
    }

    public function destroy(string $id)
    {
        return $this->movieContract->destroy($id);
    }
}
