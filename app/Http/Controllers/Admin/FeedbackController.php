<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
   public function index(){
       $feedbacks = UserFeedback::get();
       return view('Admin.Feedback.index', compact('feedbacks'));
   }
}
