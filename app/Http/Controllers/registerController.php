<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function store(Request $request)
    {
        $user_founded = User::where([
            ['rut', $request->rut],
        ])
        ->orWhere([
            ['email', $request->email],
        ])->get();

        if ($user_founded->count() > 0) {
            return view('directory', ['error' => 'User already exists']);
        } else {
            $user = User::create(array_merge(
                $request->all(),
                ['rol' => $request->inlineRadioOptions],
                ['password' => $request->password ? Hash::make($request->password) : Hash::make(USER::AUTOPASS) ],
                ['changepass' => $request->changepass ? USER::CHANGEPASS : 0 ],
                ['authorization_method' => implode(',', array($request->checkbox1, $request->checkbox2, $request->checkbox3)) ]
            ));
            return redirect()->to('/'); 
        }
    }


}
