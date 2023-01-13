<div class="row gx-0">
    <div wire:loading>
        loading . . .
    </div>
    <div wire:loading.remove>
        @foreach ($Folders as $Folder)
            <form class="col-md-2 col-5 bg-info rounded m-2" wire:submit.prevent="open('{{ $Folder }}','{{ basename($Folder) }}')">
                <button type="submit" class="container-fluid d-flex align-items-center">

                    <div>
                        <img src="{{ asset('storage/icons/Folder_name.png') }}"
                        alt="setting icon" style="width: 40px">
                    </div>

                    <span class="fw-bold">{{ basename($Folder) }}</span>

                </button>
            </form>
        @endforeach
    </div>

</div>
