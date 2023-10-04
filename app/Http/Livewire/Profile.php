<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{

    public $name;
    public $email;
    public $success = false;
    protected $rules = [
        'name' => 'min:3',
        'email' => 'email'
    ];

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
        $this->validate();

        User::first()->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->success = true;
    }
}
