<?php

namespace App\Http\Livewire;

use App\Models\Visitors;
use Livewire\Component;

class VisitorList extends Component
{

    public function render()
    {
        return view('livewire.visitor-list',[
            'visitors' => Visitors::all()
        ]);
    }
}
