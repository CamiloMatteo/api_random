<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('directory', ['users' => $users]);
    }

    public function show(Request $request)
    {
        $user = User::where('id', $request->id)->firstOrFail();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }

    public function update(Request $request, User $user, $id)
    {
        $success = false;
        $user_founded = User::where('id', $id)->get();
        $db = $user_founded[0];
        dd($db);
        //respuesta solo si es true
        if ($success){
            $user->update(array_merge(
                $request->all(),
                ['password' => $request->password ? $request->password : $num_worker->password],
                ['rut' => $request->rut ? $request->rut : $num_worker->rut],
                ['email' => $request->email ? $request->email : $num_worker->email],
                ['num_worker' => $request->num_worker ? $request->num_worker : $num_worker->num_worker]
            ));
            return response()->json([
                'status' => 'created',
                'message' => 'User Updateado'
            ], 201);
        } else {
            return response()->json([
                'message' => 'User already exists!'
            ], 409);
        }
    }

    public function store(Request $request)
    {
        $user_founded = User::where([
            ['rut', $request->rut],
        ])
        ->orWhere([
            ['email', $request->email],
        ])->get();

        if ($user_founded->count() > 0) {
            return response()->json([
                'message' => 'User already exists!'
            ], 409);
        } else {
            $user = User::create(array_merge(
                $request->all(),
                ['rol' => $request->inlineRadioOptions],
                ['password' => $request->password ? Hash::make($request->password) : Hash::make(USER::AUTOPASS) ],
                ['changepass' => $request->changepass ? USER::CHANGEPASS : 0 ],
                ['authorization_method' => implode(',', array($request->checkbox1, $request->checkbox2, $request->checkbox3)) ],
                ['condition' => USER::ACTIVE ]
            ));
            return response()->json([
                'message' => 'user created',
                'data' => $user,
            ], 201);
        }
    }

    public function destroy($id)
    {
        //
    }


}
