<?php 

namespace App\Traits;

use Livewire\Attributes\On;

trait LivewireHandleUpdateEventTrait
{
    #[On("updated-event")]
    public function handleUpdateEvent($event)
    {
        if ($event['is_success']) {
            session()->flash('success', $event['message']);
        } else {
            session()->flash('error', $event['message']);
        }
    }
}