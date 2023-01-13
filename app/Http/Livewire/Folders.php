<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Folders extends Component
{
    public $Folders = [];

    protected $listeners = ['Dirs'];

    public function Dirs($Dirs)
    {
        $this->Folders = $Dirs['Dirs'];
    }

    public function open($path,$folderName)
    {
        $this->emit('Dirs',['Dirs'=>getStorage(Cache::get('DBName'),$folderName,false)['Dirs']]);
        $this->emit('Files',['Files'=>getStorage(Cache::get('DBName'),$folderName,true)['Files']]);
    }

    public function render()
    {
        $Folders = $this->Folders;
        return view('livewire.folders',compact('Folders'));
    }


}
