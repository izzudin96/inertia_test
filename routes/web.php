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

Route::get('/todos', function() {
    $todos = Todo::all();

    return Inertia::render('Todos/Index', [
        'todos' => $todos
    ]);
});

Route::post('/todos', function() {
    $todo = request()->validate([
        'title' => 'required',
    ]);

    Todo::create($todo);

    return redirect('/todos');
});

Route::get('/todos/create', function() {
    return Inertia::render('Todos/Create');
});

Route::delete('/todos/{id}', function() {
    $todo = Todo::findOrFail(request()->id);
    $todo->delete();

    return redirect()->back();
});