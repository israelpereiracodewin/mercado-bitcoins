<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;   
use App\Livewire\Forms\RegisterForm;

use Livewire\Component;

#[Layout('components.layouts.app')] 
class RegisterPage extends Component {    

    public RegisterForm $form;
 
    #[Title('Registar')] 
    public function render(){
        
        return view('livewire.register-page');
    }

    public function save(){

        $this->form->submit();
    }
}
