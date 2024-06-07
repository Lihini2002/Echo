<?php

namespace App\Livewire;
use App\Models\Certifications;

use Livewire\Component;

class CertificationsList extends Component
{
    public $certifications;

    public function mount()
    {
        $this->certifications = Certifications::all(); // Fetch all brands
    }
    public function render()
    {
        return view('livewire.certifications-list', [
            'certifications' => $this->certifications,
        ]);
    }
}
