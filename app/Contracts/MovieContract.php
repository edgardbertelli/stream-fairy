<?php

namespace App\Contracts;

interface MovieContract
{
    public function index();
    public function show(string $id);
    public function update(array $validated, string $id);
    public function store(array $validated);
    public function destroy(string $id);
}