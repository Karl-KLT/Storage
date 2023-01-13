<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Databases extends Component
{
    public function render()
    {
        return view('livewire.databases',['Databases'=>User::find(Auth::id())->getStorage]);
    }

    public function selectDB($Name)
    {
        Cache::add('DBName',$Name);

        $this->emit('Dirs',['Dirs'=>getStorage($Name,null,false)['Dirs']]);

        $this->emit('Files',['Files'=>getStorage($Name,null,true)['Files']]);

    }
}
