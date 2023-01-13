<div>

    <div class="my-2 rounded bg-dark">
        <div class="d-flex justify-content-end">
            <div style="letter-spacing: 1px" class="badge bg-primary w-100 m-1">
                u have {{ count($DB_results) }} DB
            </div>
        </div>

        <div class="d-flex justify-content-end p-1" wire:click='newDB_Alert'>

            <div class="btn btn-primary w-100 fw-bold" style="letter-spacing: 1.8px">add new DB</div>
        </div>
    </div>



    {{-- show DB --}}
    <div class="container-fluid mb-2 px-2 overflow-scroll hide-scroll bg-dark fw-bold text-light rounded">
        <div class="d-flex justify-content-between w-100">
            <div>name</div>
            <div>time</div>
        </div>
    </div>


    <div class="container-fluid overflow-scroll hide-scroll bg-dark fw-bold text-light rounded" style="max-height: 150px;letter-spacing: 1px">
        @forelse ($DB_results as $DB)

            <div class="d-flex py-2 justify-content-between w-100">
                <div style="user-select: text">{{ $DB->name }}</div>
                <div wire:poll>{{ carbonTimerForHuman($DB->created_at) }}</div>
            </div>

        @empty

            <div class="d-flex p-1 justify-content-center w-100">
                <div style="user-select: text;">not found any DB</div>
            </div>

        @endforelse
    </div>
    {{-- end DB show --}}




    {{-- template section for alert design --}}

    <template id="add_new_DB_Alert">

        <swal-title>
          put name for ur new DB
        </swal-title>

        <swal-html>ur name of DB must be unique</swal-html>

        <swal-input type='text' placeholder="put name for ur DB"></swal-input>

        <swal-button type="confirm">
          Save
        </swal-button>

        <swal-button type="cancel">
          Cancel
        </swal-button>

        <swal-param name="allowEscapeKey" value="true" />

    </template>


</div>
