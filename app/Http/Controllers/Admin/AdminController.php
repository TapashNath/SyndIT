<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminData;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Reset;
use App\Models\Role;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    function index()
    {
        return view('Admin.dashbord');
    }

    function login()
    {
        return view('login.login');
    }


    function setLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required | max : 10 ',
        ]);
        $data = Admin::where('email', $request->email)->first();
        if ($data) {
            if (!Hash::check($request->input('password'), $data->password)) {
                toastr()->error('Password not mached');
                return redirect()->back();
            } else {
                $remember = (!empty($request->remember)) ? TRUE : FALSE;
                if ($remember) {
                }
                $data->updated_at = now();
                $data->update();
                $permission = Role::where('id', $data->role_id)->value("permission");
                $request->session()->put('permission', $permission);
                $request->session()->put('login', true);
                $request->session()->put('id', $data->id);
                $request->session()->put('email', $data->email);
                $request->session()->put('name', $data->name);
                toastr()->success('Wellcome '. $data->name);
                return redirect('/admin');
            }
        } else {
            toastr()->error('The specified account does not exist');
            return redirect()->back();
        }
    }

    function editProfile()
    {
        $user = Admin::where('id', Session()->get('id'))->first();
        $user->data = AdminData::where('user_id', $user->id)->first();
        return view('Admin.Profile.index', compact('user'));
    }

    function updateProfile(Request $request)
    {
        $data = "";
        $user = Admin::where('id', Session()->get('id'))->first();
        $data = AdminData::where('user_id', $user->id)->first();
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/admin/';
            if ($data == "") {
                if ($data != null) {
                    if ($data->image != ''  && $data->image != null) {
                        $file_old = $destinationPath . $data->image;
                        unlink($file_old);
                    }
                }
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";

                $data = new AdminData();
                $data->user_id = $user->id;
                $data->image = $profileImage;
                if ($data->save()) {
                    toastr()->success('Profile Update Successfully');
                } else {
                    toastr()->error('Somthing error found!s');
                }
            } else {
                if ($data != null) {
                    if ($data->image != ''  && $data->image != null) {
                        $file_old = $destinationPath . $data->image;
                        unlink($file_old);
                    }
                }
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";

                $data->user_id = $user->id;
                $data->image = $profileImage;
                if ($data->save()) {
                    toastr()->success('Profile Update Successfully');
                } else {
                    toastr()->error('Somthing error found!s');
                }
            }
        }

        if ($request->name != null) {
            $user->name = $request->name;
            if ($user->update()) {
                toastr()->success('Name Update Successfully');
            } else {
                toastr()->error('Somthing error found!s');
            }
        }

        if ($request->bio != null) {
            $data->bio = $request->bio;
            if ($data->update()) {
                toastr()->success('Bio Update Successfully');
            } else {
                toastr()->error('Somthing error found!s');
            }
        }
        return redirect()->back();
    }

    function changePasword(Request $request)
    {
        $request->validate([
            'current_pass' => 'required | min:8',
            'new_pass' => 'required | min:8',
            'cinfirm_pass' => 'required | min:8 |same:new_pass',
        ]);

        $data = Admin::where('id', Session()->get('id'))->first();
        if ($data) {
            if (!Hash::check($request->input('current_pass'), $data->password)) {
                toastr()->error('Current Password not mached');
            } else {
                $data->password = Hash::make($request->input('cinfirm_pass'));
                if ($data->update()) {
                    toastr()->success('Password Update Successfully');
                } else {
                    toastr()->error('Somthing error found!s');
                }
            }
        }
        return redirect()->back();
    }

    function logout()
    {
        session()->flush();
        return redirect('/admin');
    }

    function forgotPassword()
    {
        return view('login.forgotpassword');
    }

    function resetPassword()
    {
        return view('login.enterotp');
    }

    function setForgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $user = Admin::where('email', $request->email)->first();
        if ($user) {
            ///////////////////////////////////
            $pin = mt_rand(100000, 999999);
            ///////////////////////////////////
            $resetPass = Reset::where('email', $request->email)->first();
            if ($resetPass) {
                $resetPass->otp = $pin;
                $resetPass->update();
                if ($resetPass) {
                    $data = ['email' => $user->email, 'name' => $user->name, 'otp' => $resetPass->otp];
                    $user['to'] = $user->email;
                    $user['toName'] = $user->name;
                    $user['subject'] = 'SyndIT OTP for your account verification';
                    Mail::send('EmailTemplate.forgotpassword', $data, function ($message) use ($user) {
                        $message->to($user['to'], $user['toName']);
                        $message->subject($user['subject']);
                    });
                    toastr()->success('OTP Send Successfully');
                    return redirect('admin/reset')->with('data', $user->email);
                } else {
                    toastr()->error('The specified account does not exist');
                    return redirect()->back();
                }
            } else {
                $data = new Reset();
                $data->email = $request->email;
                $data->otp = $pin;
                $data->save();
                if ($data) {
                    $data = ['email' => $user->email, 'name' => $user->name, 'otp' => $data->otp];
                    $user['to'] = $user->email;
                    $user['toName'] = $user->name;
                    $user['subject'] = 'Reset Password mail';
                    Mail::send('EmailTemplate.forgotpassword', $data, function ($message) use ($user) {
                        $message->to($user['to'], $user['toName']);
                        $message->subject($user['subject']);
                    });
                    return redirect('admin/reset')->with('data', $user->email);
                } else {
                    toastr()->error('The specified account does not exist');
                    return redirect()->back();
                }
            }
        } else {
            toastr()->error('The specified account does not exist');
            return redirect()->back();
        }
    }

    function setResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'otp' => 'required',
        ]);
        $user = Admin::where('email', $request->email)->first();
        if ($user) {
            $resetPass = Reset::where('email', $request->email)->first();
            if ($resetPass) {
                if ($resetPass->otp == $request->otp) {
                    return redirect('admin/recoverd')->with('email', $request->email);
                } else {
                    toastr()->error('Otp is not meched please re-send mail');
                    return redirect()->back();
                }
            } else {
                toastr()->error('Otp is not meched please re-send mail');
                return redirect()->back();
            }
        } else {
            toastr()->error('The specified account does not exist');
            return redirect()->back();
        }
    }

    function recoverdPassword()
    {
        return view('login.recoverpassword');
    }

    function setRecoverdPassword(Request $request)
    {
        if ($request->email != null) {
            $request->validate([
                'email' => 'required',
                'password' => 'required | min:8',
                'rePassword' => 'required | min:8 |same:password',
            ]);
            $data =  Reset::where('email', $request->email)->first();
            if ($data) {
                if ($data->delete()) {
                    $user = Admin::where('email', $request->email)->first();
                    if ($user) {
                        $user->password = Hash::make($request->input('password'));
                        if ($user->update()) {
                            return redirect('admin/login')->with('status',  'Password Reset Successfully!');
                        }
                    } else {
                        toastr()->error('User not found!');
                        return redirect()->back();
                    }
                } else {
                    toastr()->error('User not found!');
                    return redirect()->back();
                }
            } else {
                toastr()->error('You dont acseccs this');
                return redirect()->back();
            }
        } else {
            toastr()->error('Email id not found!');
            return redirect()->back();
        }
    }
}
