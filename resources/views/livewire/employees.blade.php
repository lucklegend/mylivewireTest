<div div class="rounded overflow-hidden shadow-lg m-4 px-4 pb-4 bg-white">
    <div class="flex flex-col rounded">
        @include('livewire.update')
    </div>
    <div class="flex flex-col rounded">
        @include('livewire.create')
    </div>
    <div class="flex flex-col rounded">
        @include('livewire.delete')
    </div>
    <div class="flex flex-col rounded">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 rounded">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8 rounded">
                @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('message') }}
                </div>
                @endif
                <div id=" topnav" class="relative overflow-x-auto  sm:rounded-lg">
                    <div class="">
                        <div class=" grid grid-flow-col auto-cols-max gap-4 py-4 mb-2 relative">
                            <div class="row">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input wire:model="search" type="text" id="table-search" class="font-medium bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg grid focus:ring-blue-500 focus:border-blue-500 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Employee">
                                </div>
                            </div>

                            <div class="row mt-1 mr-3">
                                <button id="dropdownDepartment" data-dropdown-toggle="dropdownDept" class="relative w-60 text-black bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">All Department
                                    <svg class="ml-2 w-4 h-4 absolute right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownDept" class="hidden z-10 w-60 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDepartment">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mt-1 mr-3">
                                <button id="dropdownPosition" data-dropdown-toggle="dropdownPos" class="relative w-60 text-black bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">All Position
                                    <svg class="ml-2 w-4 h-4 absolute right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownPos" class="hidden z-10 w-60 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownPosition">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Position</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Position</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mt-1 mr-3">
                                <button id="dropdownStatus" data-dropdown-toggle="dropdownStat" class="relative w-60 text-black bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">All Status
                                    <svg class="ml-2 w-4 h-4 absolute right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownStat" class="hidden z-10 w-60 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownStatus">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Resign</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Active</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inactive</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fired</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="absolute right-0 top-4">
                                <div class=" grid grid-flow-col auto-cols-max gap-2">
                                    <div class=" row mt-1">
                                        <button type=" button" class="text-sky-500 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path>
                                            </svg>
                                            Filter
                                        </button>
                                    </div>
                                    <div class="row  mt-1">
                                        <button wire:model="create()" type="button" data-modal-toggle="createModal" class=" text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Add User
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="overflow-hidden rounded">
                        <table class="min-w-full rounded border" id="live-table">
                            <thead class="bg-white border-b">
                                <tr class="bg-gray-100">
                                    <th scope="col" sortable class="text-sm font-medium text-gray-900 px-6 py-4 text-left ">Employee Code</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Department</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Position</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Hire Date</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Status</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($employees) >0)
                                @foreach($employees as $emp)
                                <tr class="hover:bg-gray-300">
                                    <td class="px-6 ">{{ $emp->employee_code }}</td>
                                    <td class="px-6 ">{{ $emp->name }}</td>
                                    <td class="px-6 ">{{ $emp->department }}</td>
                                    <td class="px-6 ">{{ $emp->position }}</td>
                                    <td class="px-6 ">{{ $emp->getHireDate() }}</td>
                                    <td class="px-6 ">{{ $emp->status }}</td>
                                    <td class="px-6 ">
                                        <button wire:click="edit({{ $emp->id }})" data-modal-toggle="updateModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                        <button wire:click.prevent.delay="deleteId({{ $emp->id }})" data-modal-toggle="deleteEmp-modal" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7" class="p-6" align="center">No Record Found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{$employees->links()}}
                </div>
            </div>
        </div>
    </div>
</div>