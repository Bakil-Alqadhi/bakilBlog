<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use Illuminate\Support\Str;

class AuthorForgotForm extends Component
{
    public $email;
    public function forgotHandler()
    {

        session()->flash('success', 'The link have send to ur email');

        $this->validate([
            'email' => 'required| email| exists:users,email'
        ], [
            'email.required' => 'Enter your email address',
            'email.email' => 'Invalid email address',
            'email.exists' => 'This :attribute is not registered in our database',
        ]);

        $token = base64_encode(Str::random(64));
        DB::table('password_resets')->insert([
            'email' => $this->email,
            'token' => $token,
            'created_at' => Carbon::now()

        ]);

        session()->flash('success', 'The link have send to ur email)');
    }
    public function render()
    {
        return view('livewire.author-forgot-form');
    }
}