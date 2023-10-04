<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IncreasableText extends Component
{
    protected $listeners = [
        'profileUpdated' => "increaseCount"
    ];

    public $count = 0;

    public function render()
    {
        return view('livewire.increasable-text');
    }

    public function increaseCount()
    {
        $this->count++;
    }
}
