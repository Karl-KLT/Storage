@extends('layout.index')
@section('container')
    {{-- {{ dd($files) }} --}}
    <div class="bg-light vh-100 w-100">
        <header class="py-2">

            <div class="d-flex justify-content-between px-2">

                <div class="d-flex align-items-center w-50">
                    <div class="d-flex justify-content-between w-100">
                        <div class="fw-bold align-items-center d-flex px-4" style="letter-spacing: 0.8px">{{ env('APP_NAME') }}</div>

                        <div class="d-xm-none">
                            <style>
                                @media (max-width: 576px){.d-xm-none{display: none}}
                                @media (max-width: 768px){.d-xm-none{display: none}}
                                @media (max-width: 992px){.d-xm-none{display: none}}

                                @media (max-width: 576px){.d-xm-none-drive{width: 100%;}}
                                @media (max-width: 768px){.d-xm-none-drive{width: 100%;}}
                                @media (max-width: 992px){.d-xm-none-drive{width: 100%;}}

                            </style>
                            <div class="relative">

                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>

                                <input type="text" class="form-control search" placeholder="Search in your Drive">
                                <style>
                                    .search,.search:focus{
                                        background-color: #F2F2F2;
                                        color:#414141;
                                        letter-spacing: 0.8px;
                                        font-weight: 500;
                                        width: 450px;
                                        padding-left: 40px
                                    }
                                </style>
                                {{-- <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search in you Drive"> --}}
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">

                    <div class="d-flex align-items-center me-3">
                        <img src="{{ asset('storage/icons/settings.png') }}"
                            alt="setting icon" style="width: 30px">
                    </div>

                    <div class="d-flex align-items-center me-2">
                        <box-icon name='user-circle' type='solid' size='lg'></box-icon>
                    </div>

                </div>

            </div>
        </header>
        <div style="width: 100%;height: 2px;background-color: gray"></div>
        <div class="row gx-0 vh-75">

            <div class="col-md-2 mt-2 d-xm-none">
                {{-- new --}}
                <div class="d-flex align-items-center mx-2 mb-3">

                    <span>
                        <img src="{{ asset('storage/icons/New_Folder.png') }}"
                        alt="setting icon" style="width: 30px">
                    </span>

                    <span class="fw-bold ms-3" style="letter-spacing: 1px;color:#414141">
                        New Folder
                    </span>

                </div>

                <div class="d-flex align-items-center mx-2 mb-3">

                    <span class="me-3">
                        <img src="{{ asset('storage/icons/New_File.png') }}"
                        alt="setting icon" style="width: 30px">
                    </span>

                    <span class="fw-bold" style="letter-spacing: 1px;color:#414141">
                        New File
                    </span>

                </div>
                {{-- all --}}
                <div class="d-flex align-items-center mx-2 mb-3">

                    <span>
                        <img src="{{ asset('storage/icons/All_Folders.png') }}"
                        alt="setting icon" style="width: 30px">
                    </span>

                    <span class="fw-bold ms-3" style="letter-spacing: 1px;color:#414141">
                        All Folders
                    </span>

                </div>

                <div class="d-flex align-items-center mx-2 mb-3">

                    <span>
                        <img src="{{ asset('storage/icons/All_Files.png') }}"
                        alt="setting icon" style="width: 30px">
                    </span>

                    <span class="fw-bold ms-3" style="letter-spacing: 1px;color:#414141">
                        All Files
                    </span>

                </div>
            </div>
            <div class="col-md-10 mt-2 d-xm-none-drive">
                <div class="container-fluid bg-light">
                    <div class="d-flex justify-content-between">
                        <div style="font-size: 22px;font-weight: 500">
                            My Drive
                        </div>


                        <div>
                            <img src="{{ asset('storage/icons/cond.png') }}"
                            alt="setting icon" style="width: 30px">
                        </div>
                    </div>

                    {{-- folders and Files --}}
                    {{-- DBs --}}
                    <div class="mt-3">
                        <div style="color: gray;letter-spacing: 0.7px;font-size:20px;font-weight: 500">
                            Databases
                        </div>

                        {{-- all DBs --}}
                        {{-- User::find(Auth::id())->getStorage;  --}}
                        <livewire:databases />
                    </div>
                    {{-- Folders --}}
                    <div class="mt-3">
                        <div style="color: gray;letter-spacing: 0.7px;font-size:20px;font-weight: 500">
                            Folders
                        </div>

                        {{-- all folders --}}
                        <livewire:folders />
                    </div>

                    <div class="mt-3">
                        <div style="color: gray;letter-spacing: 0.7px;font-size:20px;font-weight: 500">
                            Files
                        </div>

                        {{-- all files --}}
                        <livewire:files />
                    </div>
                    {{-- end Folders and Files --}}
                </div>
            </div>
        </div>
    </div>
@endsection
