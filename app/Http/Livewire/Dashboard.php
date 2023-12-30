<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Visitors;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $totalVisitor = Visitors::all()->count();
        $todayVisitor = Visitors::where('date',Carbon::now()->toDateString())->count();
        $totalUser = User::all()->count();

        return view('livewire.dashboard',[
            'totalVisitor' => $totalVisitor,
            'todayVisitor'=> $todayVisitor,
            'totalUser' => $totalUser,
            'visitors' => Visitors::paginate(10)
        ]);
    }
}
