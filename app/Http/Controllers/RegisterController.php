<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('directory');
    }

    public function show(Request $request)
    {
        $user = User::where('id', $request->id)->firstOrFail();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }

    public function update(Request $request, User $user)
    {
        $success = true;
        request()->validate([
            'rut' => 'nullable',
            'email' => 'nullable',
            'num_worker' => 'nullable',
        ]);

        if ($request->rut || $request->email || $request->num_worker) {
            $users = DB::table('users')
                ->where('rut', $request->rut)
                ->orWhere('email', $request->email)
                ->orWhere('num_worker', $request->num_worker)
                ->get();
            if (count($users) > 0){
                $success = false;
            }
        }
        //respuesta solo si es true
        if ($success){
            $user->update(array_merge(
                $request->all(),
                ['password' => $request->password ? $request->password : $user->password],
                ['rut' => $request->rut ? $request->rut : $user->rut],
                ['email' => $request->email ? $request->email : $user->email],
                ['num_worker' => $request->num_worker ? $request->num_worker : $user->num_worker],
                ['authorization_method' => implode(',', array($request->checkbox1, $request->checkbox2, $request->checkbox3)) ],
                ['rol' => $request->inlineRadioOptions],
                ['condition' => $request->condition == null ? USER::INACTIVE : USER::ACTIVE ]
            ));
            return response()->json([
                'status' => 'created',
                'message' => 'Actualizacion exitosa :)'
            ], 201);
        } else {
            return response()->json([
                'status' => 'conflic',
                'message' => 'Rut/Email/Num trabajador, ya esta siendo utilizado!'
            ], 409);
        }
    }

    public function store(Request $request)
    {
        $success = true;
        if ($request->rut || $request->email || $request->num_worker) {
            $user_founded = DB::table('users')
                ->where('rut', $request->rut)
                ->orWhere('email', $request->email)
                ->orWhere('num_worker', $request->num_worker)
                ->get();
            if (count($user_founded) > 0){
                $success = false;
            }
        }

        if ($success){
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
        } else {
            return response()->json([
                'message' => 'User already exists!'
            ], 409);
        }
    }

    public function destroy($id)
    {
        //
    }

    public function fillTable($value)
    {
        if ($value == 'active'){
            $users = DB::table('users')->where('condition', USER::ACTIVE)->orderBy('num_worker', 'desc')->get();
        } else if ($value == 'inactive') {
            $users = DB::table('users')->where('condition', USER::INACTIVE)->orderBy('num_worker', 'desc')->get();
        } else {
            $users = DB::table('users')->orderBy('num_worker', 'desc')->get();
        }
        return response()->json([
            'message' => 'success',
            'data' => $users,
        ], 200);
    }

}
