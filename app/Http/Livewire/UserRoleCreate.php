<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserRoleCreate extends Component
{
    use WithFileUploads;

    public $name = '';
    public $email = '';
    public $role = '';
    public $photo;
    public $password = '';
    public $confirm_password = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'role' => 'required|min:3',
        'photo' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:1024',
        'password' => 'required|min:6'
    ];
    public function save(){
        
        // dd($this->photo);

        $this->validate();

        if($this->password == $this->confirm_password){


            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->role = $this->role;
            $user->password = Hash::make($this->password);
            $user->save();

        
        
            // Store the uploaded photo
            if ($this->photo) {
                $path = $this->photo->store('profile', 'public');
                $user->photo = $path;
                $user->save();
            }
    

            $this->dispatchBrowserEvent('notify',['message'=> $this->name.' successfully Updated!']);

            $this->reset();
            return redirect()->back()
                ->with('success', 'User successfully Created!.');
        }else {

            return redirect()->back()->with('error', 'password does not match');
        }
    }

    public function render()
    {
       
        return view('livewire.user-management.user-role-create');
                
    }
}
