<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    function index()
    {
        $todos = Todo::all();
        return view('index' ,['todos' => $todos]);
    }
    function addTodo(Request $request)
    {
        $todo = new Todo();
        $todo ->text = $request->text;
        $todo->save();
        return redirect('/todos');
    }
    function deleteTodo($id)
{
    $todo = Todo::find($id);
    $todo ->delete();
    return redirect('/todos');
}
}
