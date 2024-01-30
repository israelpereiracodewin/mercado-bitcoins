<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;  
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.dashboard')] 
class ProfilePage extends Component{

    public RegisterForm $form;

    public string $name;
    public string $email;

    public function mount(){

        $this->form->name = Auth::user()->name;
        $this->form->email = Auth::user()->email;
    }

    #[Title('Perfil')] 
    public function render(){

        return view('livewire.profile-page');
    }

    public function save(){

        $this->form->update();
    }
}
