<?php

namespace App\Livewire\UserProfile;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateProfileInformation extends Component
{
    public $first_name;
    public $last_name;
    public $email;

    public function mount()
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
        $this->email = Auth::user()->email;
    }

    public function rules()
    {
        return [
            "first_name" => ["required", "string", "max:255"],
            "last_name" => ["required", "string", "max:255"],
            "email" => ["required", "string", "email", "max:255"],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    #[On("updated-event")]
    public function handleUpdateEvent($event)
    {
        if ($event['is_success']) {
            session()->flash('success', $event['message']);
        } else {
            session()->flash('error', $event['message']);
        }
    }

    public function updateProfileInformation()
    {
        try{
            $validatedData = $this->validate();

            Auth::user()->update($validatedData);
    
            $this->dispatch("updated-event", [
                "is_success" => true,
                "message" => "Profile information updated successfully."
            ]);

            return redirect()->back();
        }catch(\Exception $e){
            $this->dispatch("updated-event", [
                "is_success" => false,
                "message" => "Error: ".$e->getMessage()
            ]);
        }
    }

    public function render()
    {
        return view("livewire.user-profile.update-profile-information");
    }
}
