<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;  

#[Layout('components.layouts.dashboard')] 
class DashboardPage extends Component
{
    #[Title('Dashboard')] 
    public function render()
    {
        return view('livewire.dashboard-page');
    }
}
