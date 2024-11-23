<?php

namespace App\Livewire;

use Livewire\Component;

class SentEvent extends Component
{
    // public string $message;
    public function sendMessage()
    {
        // $this->emit('messageSent', $this->message);
        $this->dispatch('messageSent');
    }

    public function render()
    {
        return view('livewire.sent-event');
    }
}
