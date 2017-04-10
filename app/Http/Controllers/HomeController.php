<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Alert;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    ///welcome page

    public function welcome()
    {
        return view('welcome');
    }

    //about page
    public function getAbout()
    {
        return view('pages.about');
    }

    //contact page
    public function getContact()
    {
        return view('pages.contact');
    }

    //register
    public function getRegister()
    {
        return view('auth.register');
    }

    ////registering the user
    public function postRegister(Request $request)
    {
        $this->validate($request, [

            'username' => 'required|max:20|unique:users',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|min:6',
        ]);


        User::create([

            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        // notify()->flash('<h4>Account was created successfully.Login here.</h4>','success',['timer' => 2000]);
        alert()->success('You have been logged out.', 'Good bye!');

        return redirect()->route('login')->with('info', 'Account created successfully.Login here.');
    }



    ////creating posts
    //login
    public function getLogin()
    {
        return view('auth.login');
    }


    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6',
        ]);
        if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) {


            // notify()->flash('<h3>Incorrect details.Check them and try again.</h3>','warning',['timer' => 2000]);
            alert()->success('You have been logged out.', 'Good bye!');


            return redirect()->back()->with('warning', 'Unknown username or incorrect password');

        }
        alert()->success('You are logged in')->autoclose(2000);
        return redirect()->route('home');

    }

    public function getWel()
    {
        return view('wel');
    }

}
