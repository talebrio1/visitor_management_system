<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserRoleEdit extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $role;
    public $photo;
    public $password;
    public $confirm_password;
    public $userId;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'role' => 'required|min:3',
        'photo' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:1024',
        'password' => 'required|min:6'
    ];

    public function mount(Request $request)
    {
        $this->userId = $request->segment(2);

        $user = User::find($this->userId);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->photo = $user->photo;
        // $this->password = $user->password;

    }

    public function update()
    {
        $this->validate();

        if($this->password == $this->confirm_password){


      if($this->photo){

        $this->photo->store('images', 'public');

      }  

            $user =  User::findOrfail($this->userId);
            $user->name = $this->name;
            $user->email = $this->email;
            $user->role = $this->role;
            $user->photo = $this->photo;
            $user->password = Hash::make($this->password);
            $user->save();
      

        $this->dispatchBrowserEvent('notify',['message'=> $this->name.' successfully Updated!']);

        $this->reset();
        return redirect()->back()
            ->with('success', 'Visitor successfully Updated.');
    }
  }

    public function render()
    {
        return view('livewire.user-management.user-role-edit',[
            'user'=> User::find($this->userId)
        ]);
    }
}
