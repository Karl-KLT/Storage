<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddDB extends Component
{
    public $name;

    public function newDB_Alert()
    {
        return $this->dispatchBrowserEvent('newDB_Alert');
    }

    public function render()
    {

        if($this->name){
            setDataToDB($this->name);
            $this->name = '';
        }

        $DB_results = getDB()->getStorage;

        return view('livewire.add-d-b',compact('DB_results'));
    }
}
