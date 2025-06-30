<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $todos = Todo::all();

    return Inertia::render('Welcome', [
        'todos' => $todos
    ]);
});

Route::post('/todos', function() {
    $todo = request()->validate([
        'title' => 'required',
    ]);

    Todo::create($todo);

    return redirect('/');
});