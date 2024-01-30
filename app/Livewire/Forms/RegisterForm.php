<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;

class RegisterForm extends Form{

    public $name = '';
    
    public $email = '';

    public $password = '';

    public function rules() 
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email é inválido',
            'email.unique' => 'Este email já está sendo utilizado',
            'password.required' => 'A senha é obrigatório',
            'password.min' => 'Mínimo de :attribute caracteres',
        ];
    }

    public function submit(){

        $fields = $this->validate();

        User::create($fields);
    }
}
