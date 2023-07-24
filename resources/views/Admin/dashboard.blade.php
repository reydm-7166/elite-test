@extends('template.app')
@section('page-title')
    Dashboard
@endsection
@section('main-content')
    <main class="bg-slate-500 min-h-screen">
        <div id="container"
             class="bg-[#C1CBDC] w-full mx-auto min-h-screen h-fit flex flex-col items-center">
            <div class="w-[70%]">
                <div id="title" class="mx-auto text-center h-14 mt-[10px] flex flex-col justify-center">
                    <h1 class="text-black text-2xl font-bold">Crews</h1>
                </div>
                <div id="sort-section" class="mt-3 w-full h-12 px-2 flex flex-row">
                    <div id="search" class="w-full flex items-center justify-end">
                        <button class="mx-5 text-2xl text-blue-500 hover:text-blue-700"
                                data-te-toggle="tooltip"
                                title="Add new product">
                            <a href="{{ route('crew.create') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </button>
                    </div>
                </div>
                <div id="table-container" class="h-[800px] p-2 mx-auto w-full rounded-[10px]">
                    <!-- component -->
                    <div class="overflow-x-auto rounded-[10px]">
                        <div class="min-w-screen min-h-fitflex flex-col bg-gray-100 font-sans overflow-hidden">
                            <div class="w-full">
                                <div class="bg-white shadow-md rounded my-6">

                                    <table class="min-w-max w-full table-auto">
                                        <thead>
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-center">First Name</th>
                                            <th class="py-3 px-6 text-center">Middle Name</th>
                                            <th class="py-3 px-6 text-center">Last Name</th>
                                            <th class="py-3 px-6 text-center">Email Address</th>
                                            <th class="py-3 px-6 text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-gray-600 text-sm font-light">
                                        <!--                    v-for here -->
                                        @foreach($crews as $crew)
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td id="first" class="py-3 px-6 text-center">
                                                    <span class="font-medium">
                                                        {{ $crew->first_name }}
                                                    </span>
                                                </td>
                                                <td id="middle" class="py-3 px-6 text-center">
                                                    <span class="font-medium">
                                                        {{ $crew->middle_name }}
                                                    </span>
                                                </td>
                                                <td id="last" class="py-3 px-6 text-center truncate">
                                                    <div class="flex item-center justify-center">
                                                        <span class="font-medium text-xs truncate">
                                                            {{ $crew->last_name }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td id="email" class="py-3 px-6 text-center">
                                                    <div class="flex item-center justify-center">
                                                        <span class="font-medium text-xs truncate">
                                                            {{ $crew->email }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <div class="flex item-center justify-center">
                                                        <a href="" class="mx-2 text-blue-500 underline underline-offset-4">View</a>
                                                        <a href="" class="mx-2 text-blue-500 underline underline-offset-4">Edit</a>
                                                        <a href="" class="mx-2 text-blue-500 underline underline-offset-4">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="pagination" class="w-full text-center mt-8 mb-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection