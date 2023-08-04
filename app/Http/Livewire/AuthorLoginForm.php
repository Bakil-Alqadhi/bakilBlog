<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AuthorLoginForm extends Component
{
    public $email, $password, $login_id;
    public function loginHandler()
    {
        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $this->validate([
                'login_id' => 'required| email| exists:users,email',
                'password' => 'required|min:5'
            ], [
                'login_id.required' => 'Enter your email address',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'This email address is not registered in our database',
                'password.required' => 'Password is required'
            ]);
        } else {
            $this->validate([
                'login_id' => 'required| exists:users,username',
                'password' => 'required|min:5'
            ], [
                'login_id.required' => 'Email or Username required.',
                'login_id.exists' => 'This username is not registered in our database',
                'password.required' => 'Password is required'
            ]);
        }





        // $this->validate([
        //     'email' => 'required| email| exists:users,email',
        //     'password' => 'required|min:5'
        // ], [
        //     'email.required' => 'Enter your email address',
        //     'email.email' => 'Invalid email address',
        //     'email.exists' => 'This email address is not registered in our database',
        //     'password.required' => 'Password is required'
        // ]);


        // $credentials = array('email' => $this->email, 'password' => $this->password);
        // if (Auth::guard('web')->attempt($credentials)) {

        //     $checkUser = User::where('email', $this->email)->first();

        //     if ($checkUser->blocked == 1) {
        //         Auth::guard('web')->logout();
        //         return redirect()->route('author.login')->with('fail', 'Your account has been blocked!');
        //     } else {
        //         return redirect()->route('author.home');
        //     }
        // } else {
        //     Session::flash('fail', 'Your credentials are not correct !');
        // }
        $credentials = array( $fieldType => $this->login_id, 'password' => $this->password);
        if (Auth::guard('web')->attempt($credentials)) {

            $checkUser = User::where($fieldType, $this->login_id)->first();

            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                // dd($checkUser);
                return redirect()->route('author.login')->with('fail', 'Your account has been blocked!');
            } else {
                return redirect()->route('author.home');
            }
        } else {
            Session::flash('fail', 'Your credentials are not correct !');
            // return redirect()->route('authorlogin')->with('fail', 'Your credentials are not correct !');
        }

    }
    public function render()
    {
        return view('livewire.author-login-form');
    }
}