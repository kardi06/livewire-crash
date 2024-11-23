<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ReceiveEvent extends Component
{
    public string $message = 'no message yet';
    #[On('messageSent')]
    public function displayMessage()
    {
        $this->message = 'Hello new message';
    }

    public function render()
    {
        return view('livewire.receive-event');
    }
}
