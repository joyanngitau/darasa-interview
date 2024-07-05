<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class QueryHandler extends Component
{
    public $query;
    public $response;

    public function submit()
    {
        $response = Http::post('/query', [
            'query' => $this->query,
        ]);

        $this->response = $response->json();
    }

    public function render()
    {
        return view('livewire.query-handler');
    }
}

