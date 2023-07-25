@extends('template.app')

@section('page-title')
    {{ "Document: ". ucfirst($document->name) }}
@endsection
@section('main-content')
    <main class="bg-slate-400 min-w-screen min-h-screen p-5">
        <div id="container" class="mx-auto w-[40%] bg-slate-500 rounded-[15px] p-3 h-[800px] flex justify-center">
            <div id="" class="w-full mx-2 h-full rounded-[15px] p-2">
                <div id="document-number" class="h-16">
                    <p class="text-right font-bold italic main-font">{{ $document->number }}</p>
                </div>
                <div id="image" class="mt-[80px] mx-auto w-48 h-48 rounded-full">

                </div>
                <p class="mt-3 main-font font-bold text-white text-4xl text-center">{{ ucfirst($document->name) }}</p>
                <p class="mt-3 main-font opacity-75 text-sm text-center italic text-white"> {{ $document->code }}</p>
                <div id="details" class="w-100 mt-5 rounded-lg min-h-[200px] p-2 h-[200px] flex justify-evenly items-center">
                    <div id="address" class="h-full w-full mx-1 rounded-lg px-2">
                        <p class="text-center italic text-black mt-[30px]">
                            Date Issued
                        </p>
                        <p class="text-center text-white mt-[10px]">
                            {{ $document->date_issued }}
                        </p>
                    </div>
                    <div id="education" class="h-full w-full mx-1 rounded-lg px-2">
                        <p class="text-center italic text-black mt-[30px]">
                            Date Expiry
                        </p>
                        <p class="text-center text-white mt-[10px]">
                            {{ $document->date_expiry }}
                        </p>
                    </div>
                    <div id="number" class="h-full w-full mx-1 rounded-lg px-2">
                        <p class="text-center italic text-black mt-[30px]">
                            Remarks
                        </p>
                        <p class="text-center text-white mt-[10px]">
                            {{ $document->remarks }}
                        </p>
                    </div>


                </div>
                <div id="edit" class="w-100 mt-5 rounded-lg min-h-[70px] flex justify-center items-center">
                    <p class="mx-2 text-black text-lg bg-green-500 px-6 py-2 rounded-lg hover:cursor-pointer hover:bg-green-600 hover:shadow-lg">
                        <a href="{{ route('document.edit', $document->id) }}">
                            Edit
                            <i class="ms-2 fa-solid fa-pen-to-square"></i>
                        </a>
                    </p>
                    <p class="mx-2">
                        <form action="{{ route('document.destroy', $document->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <!-- Add a confirmation button or link -->
                            <button
                                    type="submit"
                                    class=" text-white text-lg bg-red-500 px-4 py-2 rounded-lg hover:cursor-pointer hover:bg-red-600 hover:shadow-lg"
                                    onclick="return confirm('Are you sure you want to delete this document?')">
                                Delete
                                <i class="ms-2 fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection