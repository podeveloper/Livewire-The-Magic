<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{

    public $name;
    public $email;
    public $success = false;

    public function mount()
    {
        $this->name = User::first()->name;
        $this->email = User::first()->email;
    }
    public function render()
    {
        return view('livewire.profile');
    }

    public function updateprofile()
    {
        User::first()->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->success = true;
    }
}
