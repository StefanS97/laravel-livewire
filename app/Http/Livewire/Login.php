<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public $rules = [
        "email" => "required|email",
        "password" => "required|min:8"
    ];

    public function loginHandler()
    {
        $this->validate();

        !Auth::attempt(["email" => $this->email, "password" => $this->password])
            ? session()->flash("error", "Wrong credentials!")
            : redirect("/profile");
    }

    public function render()
    {
        return view('livewire.login');
    }
}
