<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 10;

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Change the count to a fixed value of 3.
     *
     * @return int The updated count value.
     */
/******  fb63e73b-09ad-4ed7-a741-6aef9f8eaa5f  *******/
    public function changeCount()
    {
        $this->count = 3;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
