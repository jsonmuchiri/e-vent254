<?php

namespace App\Http\Controllers;

use App\EmailSubscription;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Alert;
use App\Fback;

class AuthController extends Controller
{
    ///home page
    public function home()
    {
        return view('pages.home');
    }


    //logout
    public function getLogout()
    {
        Auth::logout();
        alert()->success('You have been logged out.', 'Good bye!');

        return redirect()->route('login')->with('info', 'You are logged out');

    }

    //get some feedback
    public function getFeedback()
    {
        $fback = Fback::paginate(10);
        return view('event.partials.feedback')->with('fbacks', $fback);
    }

    public function postFeedback(Request $request)
    {
        $this->validate($request, [
            'feedback' => 'required|max:1000',
        ]);
//        Auth::user()->feedbacks()->create([
//            'feedback' => $request->input('feedback'),
//
//        ]);

        $feedback = New Fback();
        $feedback->feedback = $request['feedback'];
        $request->user()->feedbacks()->save($feedback);

        return redirect()->back()->with('info', 'successful');
    }


    ///newsletter subscription
    public function postSubscription(Request $request)
    {
        $this->validate($request, [
            'emailsubscribe' => 'required:email',
        ]);

        $emailSubscribe = new EmailSubscription();
        $emailSubscribe->emailsubscribe = $request['emailsubscribe'];
        $request->user()->emailsubscribes()->save($emailSubscribe);
        return redirect()->back()->with('success', 'subscription successful');
    }
}
