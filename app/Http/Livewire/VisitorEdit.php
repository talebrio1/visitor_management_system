<?php

namespace App\Http\Livewire;

use App\Models\Visitors;
use Illuminate\Http\Request;
use Livewire\Component;

class VisitorEdit extends Component
{
    public  $visitor;
    public $name;
    public $phone_number;
    public $gender;
    public $company_representing;
    public $reason_for_visit;
    public $entry_time;
    public $leave_time;

    public $visitorId;

    protected $rules = [
            'name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'company_representing' => 'required',
            'reason_for_visit' => 'required',
            'entry_time' => 'required|min:6',
            'leave_time' => 'required',

    ];


    public function mount(Request $request)
    {
        $this->visitorId = $request->segment(2);

        $visitor = Visitors::find($this->visitorId);
        $this->name = $visitor->name;
        $this->phone_number = $visitor->phone_number;
        $this->gender = $visitor->gender;
        $this->company_representing = $visitor->company_representing;
        $this->reason_for_visit = $visitor->reason_for_visit;
        $this->entry_time = $visitor->entry_time;
        $this->leave_time = $visitor->leave_time;

    }



    public function update()
    {
        
    $this->validate();
    if(!$this->leave_time == null){
        $visitor = Visitors::find($this->visitorId);
        $visitor->name =  $this->name;
        $visitor->phone_number = $this->phone_number;
        $visitor->gender = $this->gender;
        $visitor->company_representing = $this->company_representing;
        $visitor->reason_for_visit = $this->reason_for_visit;
        $visitor->entry_time = $this->entry_time;
        $visitor->leave_time = $this->leave_time;
        $visitor->save();
      
        }else{
            return redirect()->back()
            ->with('error', 'Leave time can not be empty.');
        }
    

        $this->dispatchBrowserEvent('notify',['message'=> $this->name.' successfully Updated!']);

        $this->reset();
        return redirect()->back()
            ->with('success', 'Visitor successfully Updated.');
    }

    
    public function render()
    {

        return view('livewire.visitor-edit');
    }
}
