@extends('template.app')
@section('exclusive-tailwind-cdn')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
@endsection
@section('page-title')
    Edit Document
@endsection
@section('main-content')
    <main class="min-w-screen min-h-screen p-5">
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <div id="title" class="mx-auto text-center h-14 mt-[10px] flex flex-col justify-center">
            <h1 class="text-black text-2xl font-bold">Edit Document</h1>
        </div>
        <div id="container" class="w-[30%] mx-auto rounded-lg p-5">
            <form method="POST" action="{{ route('document.update', $document->id) }}" class="w-full max-w-lg">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number"
                           name="code"
                           id="floating_code"
                           value="{{ $document->code }}"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                    border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                    top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Document Code</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text"
                           name="name"
                           id="name"
                           value="{{ $document->name }}"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                    border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                    top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Document Name</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number"
                           name="number"
                           id="floating_number"
                           value="{{ $document->number }}"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                    border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                    top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Document Number</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text"
                           name="remarks"
                           id="floating_remarks"
                           value="{{ $document->remarks }}"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                    border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                    top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Remarks</label>
                </div>
                <input type="hidden" name="crew_id" value="{{ $document->crew_id }}">
                <input type="hidden" name="date_issued" value="{{ $document->date_issued }}">
                <input type="hidden" name="date_expiry" value="{{ $document->date_expiry }}">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg
                text-sm
                w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </main>
@endsection