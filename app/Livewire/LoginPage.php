<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')] 
class LoginPage extends Component {
    
    #[Title('Autenticar')] 
    public function render(){

        return view('livewire.login-page');
    }
}
