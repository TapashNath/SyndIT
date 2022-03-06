<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\NotificationsSetting;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function updateToken(Request $request){
        Admin::where('id', Session()->get('id'))->update(['token' => $request->token]);
        $request->session()->put('token', true);
        return response()->json(['Token successfully stored.']);
    }

    public function send(Request $request)
    {
        if ($request->type) {
            if ($request->type == 'single') {
                $message = array(
                    "title" => $request->title,
                    "image" => $request->image ? $request->image : null,
                    "body" => $request->body
                );
                $token = User::where('id', $request->id)->value('token');
                $data = [
                    "to" => $token, // for single device id
                    "data" => $message
                ];
                return $this->sendNotification($data);
            }

            if ($request->type == 'multiple') {
                $message = array(
                    "title" => $request->title,
                    "image" => $request->image ? $request->image : null,
                    "body" => $request->body
                );
                $data = [
                    "registration_ids" => $request->tokens, // for multiple device id
                    "data" => $message
                ];
                return $this->sendNotification($data);
            }

            if ($request->type == 'topic') {
                $message = array(
                    "title" => $request->title,
                    "image" => $request->image ? $request->image : null,
                    "body" => $request->body
                );
                $data = [
                    'to' => '/topics/' . $request->topic, // for multiple device id
                    "data" => $message
                ];
                return $this->sendNotification($data);
            }
        } else {
            return 'Null data pass!';
        }
    }

    public function sendAdmin($id)
    {
        $message = array(
            "title" => 'nsg',
            "body" => 'body'
        );
        $token = Admin::where('id', $id)->value('token');
        $data = [
            'to' => $token,
            "data" => $message
        ];
        return $this->sendNotification($data);
    }

    public function sendUser($id, $title = " ", $body = " " ,$image = " ",$type)
    {
        $message = array(
            "title" => $title,
            "body" => $body,
            "type" => $type,
            "image" => $image,
            "id" => $id
        );
        $token = User::where('id', $id)->value('token');
        $data = [
            'to' => $token,
            "data" => $message
        ];
        return $this->sendNotification($data);
    }


    public function sendNotification($data)
    {
        // "AAAAjZK9RA8:APA91bHpGJu2kXJ22V0ZW9K9YikXfsvNp8OU-3weL1uyp5FdB95tOArLLBgIbyD8MP3zDYbaPYn17yhMabP3GjJKWTCJxG2gmNzlmybQsd-zW688PSMtHuL879d9yMSJzT5AHT5rk-GZ"
        $key = NotificationsSetting::where('id', 1)->value('serverKey');
        $SERVER_API_KEY = 'AAAAjZK9RA8:APA91bHpGJu2kXJ22V0ZW9K9YikXfsvNp8OU-3weL1uyp5FdB95tOArLLBgIbyD8MP3zDYbaPYn17yhMabP3GjJKWTCJxG2gmNzlmybQsd-zW688PSMtHuL879d9yMSJzT5AHT5rk-GZ';
        $dataString = json_encode($data);
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function index(){
        return view('Admin.Notification.index');
    }
}
