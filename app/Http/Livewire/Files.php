<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Files extends Component
{
    public $Files = [];

    protected $listeners = ['Files'];

    public function Files($Files)
    {
        $this->Files = $Files['Files'];
    }


    public function render()
    {
        $Files = $this->Files;
        return view('livewire.files',compact('Files'));
    }
}
