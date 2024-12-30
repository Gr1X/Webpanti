@extends('layout.admin')

@section('content')
    <div class="m-10">

        {{-- HEADINGS --}}
        <div class="mb-4 flex justify-between">
            <span class="text-4xl font-bold">Payments</span>
            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                </svg>
            </button>
        
            <!-- Dropdown menu -->
            <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated link</a>
                </div>
            </div>
        </div>

        {{-- CARD INFO  --}}
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="bg-gray-800 p-4 rounded-2xl shadow">
                <div class="flex justify-between">
                    <h3 class="text-sm font-medium text-gray-400">Pendapatan Donasi</h3>
                    <ion-icon name="ellipsis-horizontal" class="text-white size-5 self-center cursor-pointer" 
                    data-dropdown-toggle="donasiDropdown" 
                    data-dropdown-placement="bottom-start">
                    </ion-icon>
    
                    <div id="donasiDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <p class="text-3xl font-bold text-white mt-2">
                        Rp. 20.000.000
                    </p>
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 self-center">+12,5%</span>
                </div>
            </div>
    
            <div class="bg-gray-800 p-4 rounded-2xl shadow">
                <div class="flex justify-between">
                    <h3 class="text-sm font-medium text-gray-400">Donasi rata-rata per hari</h3>
                    <ion-icon name="ellipsis-horizontal" class="text-white size-5 self-center cursor-pointer" 
                    data-dropdown-toggle="programDropdown" 
                    data-dropdown-placement="bottom-start">
                    </ion-icon>
    
                    <div id="programDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                        </div>
                    </div>
                </div>
                <p class="text-3xl font-bold text-white mt-2">
                    Rp. 14.000
                </p>
            </div>

            <div class="bg-gray-800 p-4 rounded-2xl shadow">
                <div class="flex justify-between">
                    <h3 class="text-sm font-medium text-gray-400">Jumlah Transaksi</h3>
                    <ion-icon name="ellipsis-horizontal" class="text-white size-5 self-center cursor-pointer" 
                    data-dropdown-toggle="accountDropdown" 
                    data-dropdown-placement="bottom-start">
                    </ion-icon>
    
                    <div id="accountDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                        </div>
                    </div>
                </div>
                <p class="text-3xl font-bold text-white mt-2">
                    302
                </p>
            </div>
        </div>

        {{-- SEARCH & CREATE PROGRAM --}}
        <div class="flex justify-between my-2 gap-4 ">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <form class="mb-2 w-2/5 self-center rounded-xl">   
                <div class="relative flex gap-2">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
            
            <a href="{{ route('admin.programs.create') }}" class="flex self-center bg-green-100 text-green-800 py-3 px-4 rounded-xl hover:bg-green-200 transition font-semibold gap-2"><ion-icon name="card" class="size-6 self-center"></ion-icon>Metode Pembayaran</a>
        </div>

        <hr class="my-4"/>

        {{-- FILTER --}}
        <div class="flex my-4 space-x-4 w-full items-center">
            <div class="grid grid-cols-4 gap-4 w-1/2">
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                    <label for="bordered-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semua</label>
                </div>
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complete</label>
                </div>
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-3" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pending</label>
                </div>
            </div>
        </div>

        {{-- TABEL ACCEPTING PAYMENT --}}

    </div>
@stop