<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todo= Todo::all();
    	return view('todo')->with('todo', $todo);
    }
}
