@extends('template.app')
@section('exclusive-tailwind-cdn')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
@endsection
@section('page-title')
    New Crew
@endsection
@section('main-content')
    <main class="bg-slate-500 min-w-screen min-h-screen p-5">
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <div id="title" class="mx-auto text-center h-14 mt-[10px] flex flex-col justify-center">
            <h1 class="text-black text-2xl font-bold">Add a crew</h1>
        </div>
        <div id="container" class="w-[30%] mx-auto bg-green-500 rounded-lg p-5">
            <form method="POST" action="{{ route('document.store') }}" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Document Number
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
                                focus:bg-white"
                                id="grid-first-name"
                                name="number"
                                type="number"
                                placeholder="">
{{--                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Document Code
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name"
                                name="code"
                                type="number">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mt-2">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Document Name
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name"
                                name="name"
                                type="text"
                                placeholder="">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mt-2">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Document belongs to
                        </label>
                        <select id="belongs"
                                name="crew_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                       ">
                            <option selected disabled>Choose document belongs to</option>
                            <option value="">None</option>
                            @foreach($crews as $crew)
                                <option value="{{ $crew->id }}">{{ $crew->first_name }} {{ $crew->last_name }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Remarks
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password"
                                name="remarks"
                                type="text">
{{--                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>--}}
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <div date-rangepicker class="flex items-center">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-education">
                                Date Issue
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input name="date_issued" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-gray-500"></span>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-education">
                                Date Expiry
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input name="date_expiry" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Select date end">
                            </div>
                        </div>
                    </div>
                </div>
                    <button type="submit" class="submit bg-blue-500 p-2 px-3 rounded-lg main-font">Submit</button>
            </form>
        </div>
    </main>
@endsection