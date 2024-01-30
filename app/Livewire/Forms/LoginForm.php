<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form{
  
    public $email = '';

    public $password = '';

    public function rules() 
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages() 
    {
        return [
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email é inválido',
            'password.required' => 'A senha é obrigatório'
        ];
    }

    public function submit(){

        $fields = $this->validate();

        if (Auth::attempt($fields)) {

            return redirect()->to('/');
            
        }else {

            $this->addError('email', 'A autenticação falhou. Por favor, verifique o seu email.');
            $this->reset();
        }        
    }
}
