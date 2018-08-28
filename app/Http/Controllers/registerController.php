<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $user_founded = User::where([
            ['rut', $request->rut],
            ['email', $request->email]
        ])
        ->orWhere([
            ['user_name', $request->user_name],
        ])->get();

        if ($user_founded->count() > 0) {
            return view('register', ['error' => 'User already exists']);
        } else {
            $user = User::create(array_merge(
                $request->all()
            ));
            return view('directory');
        }
    }

}
