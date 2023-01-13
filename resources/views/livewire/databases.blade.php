<div class="row gx-0">
    @foreach ($Databases as $Database)
        <form class="col-md-2 col-5 bg-info rounded m-2" wire:submit.prevent='selectDB("{{ $Database->name }}")'>
            <button type="submit" class="container-fluid d-flex align-items-center">

                <div>
                    {{-- <img src="{{ asset('storage/icons/Folder_name.png') }}" --}}
                    {{-- alt="setting icon" style="width: 40px"> --}}
                </div>

                <span class="fw-bold">{{ $loop->iteration }} > {{ $Database->name }}</span>

            </button>
        </form>
    @endforeach
</div>
