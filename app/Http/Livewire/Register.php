<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public $rules = [
        "name" => "required",
        "email" => "required|email|unique:users,email",
        "password" => "required|min:8"
    ];

    public function registerHandler()
    {
        $this->validate();

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => Hash::make($this->password)
        ]);

        redirect("/login");
    }

    public function render()
    {
        return view('livewire.register');
    }
}
