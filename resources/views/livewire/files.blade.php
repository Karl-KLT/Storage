<div class="overflow-scroll scroll-hide bg-light" style="max-height: 300px">
    <table class="table">
        <thead>
            <tr>
                <td style="font-weight: 500" class="ps-4">Name</th>
                <td style="font-weight: 500">Location</th>
                <td style="font-weight: 500">Last opened</th>
                <td style="font-weight: 500">Last modifcation</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Files as $File)
                <tr>
                    <td>
                        <div class="d-flex">
                            <img src="{{ asset('storage/icons/file.png') }}"
                            alt="setting icon" style="width: 25px">
                            <span style="font-weight: 700">{{ $File }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <img src="{{ asset('storage/icons/folder.png') }}"
                            alt="setting icon" style="width: 25px">
                            <span style="font-weight: 700" class="ms-1">nameFolder</span>
                        </div>
                    </td>
                    <td style="font-weight: 700">Yesterday</td>
                    <td style="font-weight: 700">04/12/2022</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
