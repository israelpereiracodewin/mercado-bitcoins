<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title; 
use App\Models\Crypto; 
use App\Models\Quote; 
use Livewire\Attributes\Url;

#[Layout('components.layouts.dashboard')] 
class DashboardPage extends Component
{
    #[Url(as: 'q')]
    public $search = '';

    #[Url(as: 'quote')]
    public $quote = '';

    public $quotes = [];

    public $viewMode = 'table';

    public function showTable() {

        $this->viewMode = 'table';
        $this->dispatch('toggleView', ['mode' => $this->viewMode]);
    }

    public function showGraph() {

        $this->viewMode = 'graph';

        $this->dispatch('toggleView', [
            'mode'    => $this->viewMode,
            'cryptos' => $this->search()
        ]);
    }

    public function mount(){

        $this->quotes = Quote::all();
    }

    private function search(){

        $searchTerm = $this->search;
        $searchQuote = $this->quote;

        return Crypto::where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('currency', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('base_symbol', 'LIKE', '%' . $searchTerm . '%');
            })
            ->when($searchQuote, function ($query, $searchQuote) {
                $query->whereHas('quote', function ($query) use ($searchQuote) {
                    $query->where('symbol', 'LIKE', '%' . $searchQuote . '%');
                });
            })
            ->get()
            ->map(function ($crypto) {
                $crypto->price = $crypto->latestPrice->price; 

                return $crypto;
            });
    }

    #[Title('Dashboard')] 
    public function render()
    {  

        $results = $this->search();

        if($this->viewMode === 'graph')
            $this->dispatch('changeGraph', [
                'mode'    => $this->viewMode,
                'cryptos' => $results
            ]);

        return view('livewire.dashboard-page', [
            'cryptos' => $results
        ]);
    }
}
