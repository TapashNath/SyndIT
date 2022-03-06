<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Document;
use App\Models\Question;
use App\Models\Reset;
use App\Models\Slider;
use App\Models\Template;
use App\Models\User;
use App\Models\UserFeedback;
use App\Models\UserSurveyAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class AppController extends Controller
{
    function login(Request $request)
    {
        if ($request->userIdType == "0") {
            $email = User::where('email', $request->userId)->first();
            if ($email) {
                if (!Hash::check($request->input('password'), $email->password)) {
                    return response()->json(['error' => true, 'data' => "Password not meched!"]);
                } else {
                    return response()->json(['error' => false, 'data' => $email]);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
        }
        if ($request->userIdType == "1") {
            $email = User::where('phone', $request->userId)->first();
            if ($email) {
                if (!Hash::check($request->input('password'), $email->password)) {
                    return response()->json(['error' => true, 'data' => "Password not meched!"]);
                } else {
                    return response()->json(['error' => false, 'data' => $email]);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
        }
        if ($request->userIdType == "2") {
            $email = User::where('user_id', $request->userId)->first();
            if ($email) {
                if (!Hash::check($request->input('password'), $email->password)) {
                    return response()->json(['error' => true, 'data' => "Password not meched!"]);
                } else {
                    return response()->json(['error' => false, 'data' => $email]);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
        }
    }

    function signup(Request $request)
    {
        if ($request->userIdType == "0") {
            $email = User::where('email', $request->userId)->first();
            if ($email) {
                return response()->json(['error' => true, 'data' => "Email Address alrady exist!"]);
            } else {
                $user = new User();
                $user->user_id = uniqid();
                $user->email = $request->userId;
                $user->name = $request->name;
                $user->password =  Hash::make($request->input('password'));
                if ($user->token != null) {
                    $user->token = $request->token;
                }
                if ($user->lat != null) {
                    $user->lat = $request->lat;
                }
                if ($user->lng != null) {
                    $user->lng = $request->lng;
                }

                if ($user->save()) {
                    $user = User::where('email', $request->userId)->first();
                    return response()->json(['error' => false, 'data' => $user]);
                } else {
                    response()->json(['error' => true, 'data' => 'Somthing error found!']);
                }
            }
        }

        if ($request->userIdType == "1") {
            if ($request->email != null) {
                $email = User::where('email', $request->email)->first();
                if ($email) {
                    return response()->json(['error' => true, 'data' => "Email Address alrady exist!"]);
                } else {
                    $phone = User::where('phone', $request->userId)->first();
                    if ($phone) {
                        return response()->json(['error' => true, 'data' => "Phone Number alrady exist!"]);
                    } else {
                        $user = new User();
                        $user->user_id = uniqid();
                        $user->phone = $request->userId;
                        if ($request->email != null) {
                            $user->email = $request->email;
                        }
                        if ($request->alternative_phone != null) {
                            $user->alternative_phone = $request->alternative_phone;
                        }
                        $user->name = $request->name;
                        $user->password =  Hash::make($request->input('password'));
                        if ($user->token != null) {
                            $user->token = $request->token;
                        }
                        if ($user->lat != null) {
                            $user->lat = $request->lat;
                        }
                        if ($user->lng != null) {
                            $user->lng = $request->lng;
                        }

                        if ($user->save()) {
                            $user = User::where('phone', $request->userId)->first();
                            return response()->json(['error' => false, 'data' => $user]);
                        } else {
                            response()->json(['error' => true, 'data' => 'Somthing error found!']);
                        }
                    }
                }
            } else {
                $phone = User::where('phone', $request->userId)->first();
                if ($phone) {
                    return response()->json(['error' => true, 'data' => "Phone Number alrady exist!"]);
                } else {
                    $user = new User();
                    $user->user_id = uniqid();
                    $user->phone = $request->userId;
                    if ($request->email != null) {
                        $user->email = $request->email;
                    }
                    if ($request->alternative_phone != null) {
                        $user->alternative_phone = $request->alternative_phone;
                    }
                    $user->name = $request->name;
                    $user->password =  Hash::make($request->input('password'));
                    if ($user->token != null) {
                        $user->token = $request->token;
                    }
                    if ($user->lat != null) {
                        $user->lat = $request->lat;
                    }
                    if ($user->lng != null) {
                        $user->lng = $request->lng;
                    }

                    if ($user->save()) {
                        $user = User::where('phone', $request->userId)->first();
                        return response()->json(['error' => false, 'data' => $user]);
                    } else {
                        response()->json(['error' => true, 'data' => 'Somthing error found!']);
                    }
                }
            }
        }
        if ($request->userIdType == "2") {
            $user_id = User::where('user_id', $request->userId)->first();
            if ($user_id) {
                return response()->json(['error' => true, 'data' => "Email Address alrady exist!"]);
            } else {
                $user = new User();
                $user->user_id = $request->userId;
                $user->name = $request->name;
                $user->password =  Hash::make($request->input('password'));
                if ($user->token != null) {
                    $user->token = $request->token;
                }
                if ($user->lat != null) {
                    $user->lat = $request->lat;
                }
                if ($user->lng != null) {
                    $user->lng = $request->lng;
                }

                if ($user->save()) {
                    $user = User::where('user_id', $request->userId)->first();
                    return response()->json(['error' => false, 'data' => $user]);
                } else {
                    response()->json(['error' => true, 'data' => 'Somthing error found!']);
                }
            }
        }
    }

    function userCheck(Request $request)
    {

        if ($request->userIdType == "2") {
            $user_id = User::where('user_id', $request->userId)->first();
            if ($user_id) {
                return response()->json(['error' => false, 'msg' => "Login Successfully", 'data' => $user_id]);
            } else {
                $email = User::where('email', $request->userId)->first();
                if ($email) {
                    return response()->json(['error' => true, 'data' => "Email Address alrady exist!"]);
                } else {
                    $user = new User();
                    $user->user_id = $request->userId;
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->image = $request->image;
                    $user->password =  Hash::make(uniqid());
                    if ($user->token != null) {
                        $user->token = $request->token;
                    }
                    if ($user->lat != null) {
                        $user->lat = $request->lat;
                    }
                    if ($user->lng != null) {
                        $user->lng = $request->lng;
                    }

                    if ($user->save()) {
                        $user = User::where('user_id', $request->userId)->first();
                        return response()->json(['error' => false, 'msg' => "Signup Successfully", 'data' => $user]);
                    } else {
                        response()->json(['error' => true, 'data' => 'Somthing error found!']);
                    }
                }
            }
        }
    }

    function sendOtp(Request $request)
    {
        if ($request->userIdType == "0") {
            ///////////////////////////////////
            $pin = mt_rand(100000, 999999);
            ///////////////////////////////////
            $data = ['email' => $request->userId, 'name' => "", 'otp' => $pin];
            $user['to'] = $request->userId;
            $user['toName'] = "";
            $user['subject'] = 'SyndIT OTP for your account verification';
            Mail::send('EmailTemplate.email_varify', $data, function ($message) use ($user) {
                $message->to($user['to'], $user['toName']);
                $message->subject($user['subject']);
            });
            return response()->json(['error' => false, 'email' => $request->userId, 'otp' => $pin]);
        }
        if ($request->userIdType == "1") {
            ///////////////////////////////////
            $pin = mt_rand(100000, 999999);
            ///////////////////////////////////
            return response()->json(['error' => false,  'otp' => $pin]);
        }
    }

    function emailOtp(Request $request)
    {
        if ($request->type == "0") {
            ///////////////////////////////////
            $pin = mt_rand(100000, 999999);
            ///////////////////////////////////
            $data = ['email' => $request->email, 'name' => "", 'otp' => $pin];
            $user['to'] = $request->email;
            $user['toName'] = "";
            $user['subject'] = 'SyndIT OTP for your account verification';
            Mail::send('EmailTemplate.email_varify', $data, function ($message) use ($user) {
                $message->to($user['to'], $user['toName']);
                $message->subject($user['subject']);
            });
            return response()->json(['error' => false, 'email' => $request->email, 'otp' => $pin]);
        }
    }

    function phoneOtp(Request $request)
    {
        if ($request->type == "1") {
            $user = User::where('phone', $request->phone)->first();
            if ($user) {
                if ($user->id == $request->id) {
                    return response()->json(['error' => true,  'data' => "This number is allrady varifid with your account"]);
                } else {
                    return response()->json(['error' => true,  'data' => "This number allrady registered with another account"]);
                }
            } else {
                $pin = mt_rand(100000, 999999);
                return response()->json(['error' => false,  'otp' => $pin]);
            }
        }
    }

    function phoneVerified(Request $request)
    {

        if ($request->type == "1") {
            $user = User::where('id', $request->id)->first();
            $user->phone = $request->phone;
            $user->phone_verified = 1;
            if ($user->update()) {
                return response()->json(['error' => false,  'data' => "Phone Number Verified Successfully"]);
            } else {
                return response()->json(['error' => true,  'data' => "Something error!"]);
            }
        }
    }

    function emailVerified(Request $request)
    {
        if ($request->type == "0") {
            $user = User::where('id', $request->id)->first();
            $user->email = $request->email;
            $user->email_verified = 1;
            if ($user->update()) {
                return response()->json(['error' => false,  'data' => "Email Address Verified Successfully"]);
            } else {
                return response()->json(['error' => true,  'data' => "Something error!"]);
            }
        }
    }

    function setPass(Request $request)
    {
        if ($request->userIdType == "0") {
            $email = User::where('email', $request->userId)->first();
            if ($email) {
                $email->password = Hash::make($request->input('password'));
                if ($email->update()) {
                    return response()->json(['error' => false, 'data' => '1']);
                } else {
                    response()->json(['error' => true, 'data' => 'Somthing error found!']);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
        }
        if ($request->userIdType == "1") {
            $phone = User::where('phone', $request->userId)->first();
            if ($phone) {
                $phone->password = Hash::make($request->input('password'));
                if ($phone->update()) {
                    return response()->json(['error' => false, 'data' => '1']);
                } else {
                    response()->json(['error' => true, 'data' => 'Somthing error found!']);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
        }
    }

    function sendMessage(Request $request)
    {
        if ($request->sender_id != null) {
            $data = new Chat();
            $data->sender_id = $request->sender_id;
            $data->message = $request->message;
            $data->time = $request->time;
            $data->date = $request->date;
            if ($data->save()) {
                if ($request->receiver_id != null) {
                    $notification = new NotificationsController;
                    $notification->sendAdmin($request->receiver_id);
                } else {
                    $notification = new NotificationsController;
                    $notification->sendAdmin(1);
                }

                $data = Chat::orderBy('id', 'DESC')->where('sender_id', $request->sender_id)->get();
                if ($data) {
                    return response()->json(['error' => false, 'data' => $data]);
                } else {
                    return response()->json(['error' => true, 'data' => 'Data not found!']);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'Message not seved!']);
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Null data pass!']);
        }
    }



    function getMessage(Request $request)
    {
        if ($request->sender_id != null) {
            $data = Chat::orderBy('id', 'DESC')->where('sender_id', $request->sender_id)->get();
            if ($data) {
                return response()->json(['error' => false, 'data' => $data]);
            } else {
                return response()->json(['error' => true, 'data' => 'Data not found!']);
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Null data pass!']);
        }
    }

    function updateToken(Request $request)
    {
        if ($request->user_id != null) {
            $data = User::where('id', $request->user_id)->first();
            if ($data) {
                $data->lat = $request->lat;
                $data->lng = $request->lng;
                $data->token = $request->token;
                if ($data->update()) {
                    $data = User::where('id', $request->user_id)->first();
                    return response()->json(['error' => false, 'data' => $data]);
                } else {
                    return response()->json(['error' => true, 'data' => 'Something error found!']);
                }
            } else {
                return response()->json(['error' => true, 'data' => 'Data not found!']);
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Null data pass!']);
        }
    }

    function sendFeedback(Request $request)
    {
        if ($request->user_id != null) {
            $data = new UserFeedback();
            $data->user_id = $request->user_id;
            $data->rating = $request->rating;
            $data->message = $request->message;
            if ($data->save()) {
                return response()->json(['error' => false, 'data' => 'Thanks for your feedback']);
            } else {
                return response()->json(['error' => true, 'data' => 'Something error found!']);
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Data not found!']);
        }
    }

    function imageUpdate(Request $request)
    {
        if ($request->id != NULL) {
            $user = User::where('id', $request->id)->first();
            $path = 'images/user/profile/';
            $image = "IMG-" . $user->phone . date('Y-m-d-s') . ".jpg";

            if ($user->image != null) {
                if ($user->image != ''  && $user->image != null) {
                    $file_old = $path . $user->image;
                    unlink($file_old);
                }
            }
            if ($request->image != null) {
                file_put_contents($path . $image, base64_decode($request->image));
            }
            $user->image = $image;
            if ($user->save()) {
                return response()->json(['error' => false, 'data' => $user]);
            } else {
                return response()->json(['error' => true, 'data' => 'Something error found!']);
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Something error found!']);
        }
    }

    function uploadAddressProof(Request $request)
    {
        if ($request->id != NULL) {
            $path = 'images/user/document/';
            $image = "IMG-" . rand() . date('Y-m-d-s') . ".jpg";
            $user = User::where('id', $request->id)->first();
            $document = Document::where('user_id', $user->id)->first();

            if ($document) {
                if ($document->address_proof_image != ''  && $document->address_proof_image != null) {
                    $file_old = $path . $document->address_proof_image;
                    unlink($file_old);
                }
                if ($request->image != null) {
                    file_put_contents($path . $image, base64_decode($request->image));
                }

                $document->user_id = $request->id;
                $document->address_proof_name = $request->name;
                $document->address_proof_image = $image;
                if ($document->update()) {
                    $user = User::where('id', $request->id)->first();
                    $document = Document::where('user_id', $user->id)->first();
                    return response()->json(['error' => false, 'data' => $user, 'document' => $document]);
                } else {
                    return response()->json(['error' => true, 'data' => 'Something error found!']);
                }
            } else {

                if ($request->image != null) {
                    file_put_contents($path . $image, base64_decode($request->image));
                }

                $document = new Document();
                $document->user_id = $request->id;
                $document->address_proof_name = $request->name;
                $document->address_proof_image = $image;
                if ($document->save()) {
                    $user = User::where('id', $request->id)->first();
                    $document = Document::where('user_id', $user->id)->first();
                    return response()->json(['error' => false, 'data' => $user, 'document' => $document]);
                } else {
                    return response()->json(['error' => true, 'data' => 'Something error found!']);
                }
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Something error found!']);
        }
    }

    function uploadProfileProof(Request $request)
    {
        if ($request->id != NULL) {
            $path = 'images/user/document/';
            $image = "IMG-" . rand() . date('Y-m-d-s') . ".jpg";
            $user = User::where('id', $request->id)->first();
            $document = Document::where('user_id', $user->id)->first();

            if ($document) {
                if ($document->profile_proof_image != ''  && $document->profile_proof_image != null) {
                    $file_old = $path . $document->profile_proof_image;
                    unlink($file_old);
                }
                if ($request->image != null) {
                    file_put_contents($path . $image, base64_decode($request->image));
                }

                $document->user_id = $request->id;
                $document->profile_proof_name = $request->name;
                $document->profile_proof_image = $image;
                if ($document->update()) {
                    $user = User::where('id', $request->id)->first();
                    $document = Document::where('user_id', $user->id)->first();
                    return response()->json(['error' => false, 'data' => $user, 'document' => $document]);
                } else {
                    return response()->json(['error' => true, 'data' => 'Something error found!']);
                }
            } else {

                if ($request->image != null) {
                    file_put_contents($path . $image, base64_decode($request->image));
                }

                $document = new Document();
                $document->user_id = $request->id;
                $document->profile_proof_name = $request->name;
                $document->profile_proof_image = $image;
                if ($document->save()) {
                    $user = User::where('id', $request->id)->first();
                    $document = Document::where('user_id', $user->id)->first();
                    return response()->json(['error' => false, 'data' => $user, 'document' => $document]);
                } else {
                    return response()->json(['error' => true, 'data' => 'Something error found!']);
                }
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Something error found!']);
        }
    }

    function refreshProfile(Request $request)
    {
        if ($request->id != NULL) {
            $user = User::where('id', $request->id)->first();
            $document = Document::where('user_id', $user->id)->first();

            return response()->json(['error' => false, 'data' => $user, 'document' => $document]);
        } else {
            return response()->json(['error' => true, 'data' => 'Something error found!']);
        }
    }


    function getSurveyTemplate(Request $request)
    {
        $datas = Template::first();
        if ($datas) {
            $ids = json_decode($datas->question_ids, true);

            for ($i = 0; $i < count($ids); $i++) {
                $qestions[] = Question::with('answers')->find($ids[$i]);
            }

            foreach ($qestions as $qestion) {
                $qestion->ans = UserSurveyAnswer::where('user_id', $request->user_id)
                    ->where('question_id', $qestion->id)
                    ->value('answers');
            }

            // for ($a = 0; $a < count($qestions); $a++) {
            //     $qestion = Question::where('id', $qestions[$a]['id'])->where('status', 1)->first();
            //     if (!$qestion) {
            //         unset($qestions[$a]);
            //     }
            // }
            // return $qestions;

            if ($qestions) {
                return response()->json(['error' => false, 'data' => $qestions]);
            } else {
                return response()->json(['error' => true, 'data' => 'Something error found!']);
            }
        } else {
            return response()->json(['error' => true, 'data' => 'Something error found!']);
        }
    }

    public function setSurveyTemplateAnswer(Request $request)
    {
        $datas = json_decode($request->data);

        for ($i = 0; $i < count($datas); $i++) {
            $question_id = $datas[$i]->questionId;
            $answers = $datas[$i]->answers;
            $type = $datas[$i]->questionType;
            $user = UserSurveyAnswer::where('user_id', $request->user_id)
                ->where('question_id', $question_id)
                ->first();


            if ($user) {
                $user->answers = $answers;
                $user->update();
            } else {
                $user = new UserSurveyAnswer();
                $user->user_id = $request->user_id;
                $user->question_id = $question_id;
                $user->answers = $answers;
                $user->type = $type;
                $user->save();
            }
        }

        $user = UserSurveyAnswer::where('user_id', $request->user_id)->get();
        return response()->json(['error' => false, 'data' => $user]);
    }


    public function getHomePage(Request $request){
        $data = [];
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        array_push($data,$slider);
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        array_push($data, $category);

        return $data;
    }
}
