<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('index',compact('users'));
    }

    public function create()
    {
    	return view('create');
    }

    public function store()
    {
    	$user = new User;

    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));
    	$user->save();

    	return redirect('/show');
    }
}
