@extends('template.app')
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
            <form method="POST" action="{{ route('crew.store') }}" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            First Name
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
                                focus:bg-white"
                                id="grid-first-name"
                                name="first_name"
                                type="text"
                                placeholder="Jane">
{{--                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Middle Name
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name"
                                name="middle_name"
                                type="text"
                                placeholder="Doe">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Last Name
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name"
                                name="last_name"
                                type="text"
                                placeholder="Doe">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Last Name
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-email"
                                name="email"
                                type="email"
                                placeholder="Email@address">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Address
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password"
                                name="address"
                                type="text">
{{--                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>--}}
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-education">
                            Education
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-education"
                                name="education"
                                type="text">
                        {{--                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>--}}
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-number">
                            Contact Number
                        </label>
                        <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-number"
                                name="number"
                                type="number">
                        {{--                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>--}}
                    </div>
                </div>
                <button type="submit" class="submit bg-blue-500 p-2 px-3 rounded-lg main-font">Submit</button>
            </form>
        </div>
    </main>
@endsection