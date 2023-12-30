<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DeleteUser extends Component
{
    public $deleteModal = false;
    public $userId;
    public $userName;
    protected $listeners = ['deleteUser'];


    public function deletedId($id)
    {
        $user =  User::find($id['id']);
       
        $user->delete();

        // $this->dispatchBrowserEvent('deleted', ['message' => 'successfully Deleted ' . $this->userName]);
        return redirect('/user-management');
        



       

    //    $this->dispatch('new-customer-create')->to(LivewireCustomer::class);


    }


    public function deleteUser(User $user)
    {
        $this->userId = $user;
        $this->userName = $user->name;
        $this->deleteModal = true;
        //  dd($this->userName);


    }

    public function render()
    {

        return view('livewire.delete-user');
    }
}
