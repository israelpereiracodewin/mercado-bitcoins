<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterForm extends Form{

    public $name = '';
    
    public $email = '';

    public $password = '';

    public function rules() 
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];

        if(Auth::check()){

            $rules['email'] = 'required|email|unique:users,email,' . Auth::id();
            $rules['password'] = 'min:6';
        }

        return $rules;
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

        if (Auth::attempt($fields)) {

            return redirect()->to('/');
            
        }else {

            $this->addError('email', 'A autenticação falhou. Por favor, verifique o seu email.');
            $this->reset();
        }        
    }

    public function update(){

        $fields = $this->validate();

        if(empty($fields['password'])) 
            unset($fields['password']);
        else {
            // Se não estiver vazio, criptografa a senha
            $fields['password'] = bcrypt($fields['password']);
        }
        
        User::find(Auth::id())->update($fields);
    }
}
