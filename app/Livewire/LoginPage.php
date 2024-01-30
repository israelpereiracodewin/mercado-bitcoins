<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Livewire\Forms\LoginForm;

#[Layout('components.layouts.app')] 
class LoginPage extends Component {

    public LoginForm $form;

    public function mount(){
        
        if (Auth::check()) {
            return redirect('/dashboard');
        }
    }

    #[Title('Autenticar')] 
    public function render(){

        return view('livewire.login-page');
    }

    public function save(){

        $this->form->submit();
    }
}
