<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;   
use App\Livewire\Forms\RegisterForm;

use Livewire\Component;

#[Layout('components.layouts.app')] 
class RegisterPage extends Component {    

    public RegisterForm $form;
    
    public function mount(){
        
        if (Auth::check()) {
            return redirect('/dashboard');
        }
    }

    #[Title('Registar')] 
    public function render(){

        return view('livewire.register-page');
    }

    public function save(){

        $this->form->submit();
    }
}
