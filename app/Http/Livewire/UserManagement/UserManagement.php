<?php

namespace App\Http\Livewire\userManagement;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public function delete($id)
    {
        // dd($id);
       $user =  User::find($id);
       $user->delete();

    //    $this->dispatch('delete', message:' successfully Deleted');

       

    //    $this->dispatch('new-customer-create')->to(LivewireCustomer::class);


    }

    public function render()
    {
        return view('livewire.user-management.user-management',[
            'users'=> User::all()
        ]);
    }
}
