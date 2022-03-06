<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NotificationsSetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class PanelSettingController extends Controller
{


    public function contactus()
    {   $setting = "0";
        $setting = Setting::where('name', 'Contact us')->first();
        return view('Admin.setting.contactus', compact('setting'));
    }

    public function aboutus()
    {
            $setting = "0";
        $setting = Setting::where('name', 'About us')->first();
        return view('Admin.setting.aboutus', compact('setting'));
    }

    public function notification()
    {
        $datas = NotificationsSetting::where('id', 1)->first();
        return view('Admin.setting.notification', compact('datas'));
    }

    public function setNotification(Request $request)
    {

        $datas = NotificationsSetting::where('id', 1)->first();
        if ($datas) {
            $datas->serverKey = $request->serverKey;
            $datas->senderId = $request->senderId;
            $datas->apiKey = $request->apiKey;
            $datas->authDomain = $request->authDomain;
            $datas->projectId = $request->projectId;
            $datas->appId = $request->appId;
            $datas->measurementId = $request->measurementId;
            if ($datas->update()) {
                // toster()->success('Update successfully');
                return redirect()->back();
            } else {
                // toastr()->success('Somthing error found!');
                return redirect()->back();
            }
        } else {
            $datas = new NotificationsSetting();
            $datas->serverKey = $request->serverKey;
            $datas->senderId = $request->senderId;
            $datas->apiKey = $request->apiKey;
            $datas->authDomain = $request->authDomain;
            $datas->projectId = $request->projectId;
            $datas->appId = $request->appId;
            $datas->measurementId = $request->measurementId;
            if ($datas->save()) {
                // toastr()->success('Save successfully');
                return redirect()->back();
            } else {
                // toastr()->success('Somthing error found!');
                return redirect()->back();
            }
        }
    }


    public function settings()
    {
        $setting = "0";
        $setting = Setting::where('name', 'App Setting')->value('value');
        $datas = json_decode($setting);
        return view('Admin.setting.setting', compact('datas'));
    }

    public function termsnconditions()
    {
        $setting = "0";
        $setting = Setting::where('name', 'Terms & Condition')->first();
        return view('Admin.setting.termscondition', compact('setting'));
    }

    public function privacynpolicy()
    {
        $setting = "0";
        $setting = Setting::where('name', 'Privacy & Policy')->first();
        return view('Admin.setting.privacy', compact('setting'));
    }

    public function updatesettings(Request $request)
    {
        switch ($request->type) {
            case "terms":
                $setting = Setting::where('name', 'Terms & Condition')->first();
                $setting->value = $request->value;
                break;

            case "privacy":
                $setting = Setting::where('name', 'Privacy & Policy')->first();
                $setting->value = $request->value;
                break;
            case "contactus":
                $setting = Setting::where('name', 'Contact us')->first();
                $setting->value = $request->value;
                break;

            case "aboutus":
                $setting = Setting::where('name', 'About us')->first();
                $setting->value = $request->value;
                break;

            case "appsettings":
                $data[] = [
                    'is_version_check' => $request->is_version_check,
                    'min_version' => $request->min_version,
                    'max_version' => $request->max_version
                ];
                $setting = Setting::where('name', 'App Setting')->first();
                $setting->value =  json_encode($data);
                break;
        }

        if ($setting->save()) {
            // toastr()->success('Updated Successfully.');
            return redirect()->back();
        } else {

            // toastr()->error('Something went wrong.');
            return redirect()->back();
        }
    }


}
