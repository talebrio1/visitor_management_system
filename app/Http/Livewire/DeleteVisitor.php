<?php

namespace App\Http\Livewire;

use App\Models\Visitors;
use Livewire\Component;

class DeleteVisitor extends Component
{
    public $deleteModal = false;
    public $visitorId;
    public $visitorName;
    protected $listeners = ['deleteVisitor'];


    public function deletedId($id)
    {
        $user =  Visitors::find($id['id']);
       
        $user->delete();

        // $this->dispatchBrowserEvent('deleted', ['message' => 'successfully Deleted ' . $this->userName]);
        return redirect('/visitor-list');
        

       

    //    $this->dispatch('new-customer-create')->to(LivewireCustomer::class);


    }


    public function deleteVisitor(Visitors $visitor)
    {
        $this->visitorId = $visitor;
        $this->visitorName = $visitor->name;
        $this->deleteModal = true;
        //  dd($this->userName);


    }
    public function render()
    {
        return view('livewire.delete-visitor');
    }
}
