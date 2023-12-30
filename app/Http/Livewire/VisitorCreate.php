<?php

namespace App\Http\Livewire;

use App\Models\Visitors;
use Carbon\Carbon;
use Livewire\Component;

class VisitorCreate extends Component
{
    
    public $name = '';
    public $phone_number;
    public $gender;
    public $company_representing;
    public $reason_for_visit;
    public $entry_time;
    public $leave_time;
    public $date;

    protected $rules = [
            'name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'company_representing' => 'required',
            'reason_for_visit' => 'required',
            'entry_time' => 'required|min:6',
            'leave_time' => 'nullable',

    ];

    public function mount()
    {
    
        $this->date = Carbon::now()->toDateString();
    }


    public function save()
    {
        
    $this->validate();

    $visitor = new Visitors();
    $visitor->name = $this->name;
    $visitor->phone_number = $this->phone_number;
    $visitor->gender =  $this->gender;
    $visitor->company_representing =  $this->company_representing;
    $visitor->reason_for_visit = $this->reason_for_visit;
    $visitor->entry_time = $this->entry_time;
    $visitor->leave_time = $this->leave_time;
    $visitor->date = $this->date;
    $visitor->save();

       

        $this->dispatchBrowserEvent('notify',['message'=> $this->name.' successfully Created!']);

        $this->reset();
        return redirect()->back()
            ->with('success', 'Visitor successfully created.');
    }
    
    public function render()
    {
        return view('livewire.visitor-create');
    }
}
