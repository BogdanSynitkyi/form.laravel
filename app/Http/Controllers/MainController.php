<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class MainController extends Controller {


  public function home() {
    return view ('home');
  }

  public function success() {
    return view ('success');
  }



  public function check(Request $request) {
    $valid = $request->validate([
      'email'=>'required|min:4|max:20',
      'subject'=>'required|min:4|max:20',
      'message'=>'required|min:15|max:200',
    ]);

    $review = new ContactModel();
    $review->email = $request->input('email');
    $review->subject = $request->input('subject');
    $review->message = $request->input('message');

    $review->save();
    return redirect()->route('success');

  }


}
