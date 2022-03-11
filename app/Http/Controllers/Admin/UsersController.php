<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

   public function signup(Request $request){
        $result =  $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required | max : 10 ',
        ]);
        $user = User::where('email',$request->email)->first();
        if ($user) {
            return redirect()->route('login')->with('error', 'Email Id Alrady Exists Another Account!');
        }
        $user = new User();
        $user->email = $request->email;
        $user->user_id = random_int(11111111, 99999999);
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            return redirect()->route('login')->with('success', 'Register Successfully');
        }else{
            return redirect()->route('login')->with('error','Register Successfully');
        }
   }

    public function login(Request $request)
    {
       $result =  $request->validate([
            'email' => 'required',
            'password' => 'required | max : 10 ',
        ]);

        $data = User::where('email', $request->email)->first();
        if ($data) {
            if (!Hash::check($request->input('password'), $data->password)) {
                return redirect()->back()->with('error','Password not mached');
            } else {
                $remember = (!empty($request->remember)) ? TRUE : FALSE;
                if ($remember) {
                    
                }
                $data->updated_at = now();
                $data->update();
                $request->session()->put('user_login', true);
                $request->session()->put('user_id', $data->id);
                $request->session()->put('user_email', $data->email);
                $request->session()->put('user_name', $data->name);
                return redirect('/')->with('success', 'Wellcome ' . $data->name);
            }
        } else {
            return redirect()->back()->with('error','The specified account does not exist');
        }
    }

    function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
