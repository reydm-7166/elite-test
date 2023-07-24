@extends('template.app')
@section('page-title')
    {{ $crew->first_name }} {{ $crew->last_name }}
@endsection
@section('main-content')
    <main class="bg-slate-400 min-w-screen min-h-screen p-5">
        <div id="container" class="mx-auto w-[40%] bg-slate-500 rounded-[15px] p-3 h-[800px] flex justify-center">
            <div id="" class="w-full mx-2 h-full rounded-[15px] p-2">
                <div id="image" class="mt-[80px] mx-auto w-48 h-48 rounded-full bg-white">
                    <img src="{{ asset('avatar.png') }}" class="object-scale-down h-full w-full rounded-full" alt="wew">
                </div>
                <p class="mt-3 main-font font-bold text-white text-4xl text-center">{{ $crew->first_name . " " . $crew->last_name  }}</p>
                <p class="mt-3 main-font opacity-75 text-sm text-center italic text-white">{{ $crew->email  }}</p>
                <div id="details" class="w-100 mt-5 rounded-lg min-h-[200px] p-2 h-[200px] flex justify-evenly items-center">
                    <div id="address" class="h-full w-full mx-1 rounded-lg px-2">
                        <p class="text-center italic text-black mt-[30px]">
                            Address
                        </p>
                        <p class="text-center text-white mt-[10px]">
                            {{ $crew->address  }}
                        </p>
                    </div>
                    <div id="education" class="h-full w-full mx-1 rounded-lg px-2">
                        <p class="text-center italic text-black mt-[30px]">
                            Education
                        </p>
                        <p class="text-center text-white mt-[10px]">
                            {{ $crew->education  }}
                        </p>
                    </div>
                    <div id="number" class="h-full w-full mx-1 rounded-lg px-2">
                        <p class="text-center italic text-black mt-[30px]">
                            Number
                        </p>
                        <p class="text-center text-white mt-[10px]">
                            {{ $crew->contact_number  }}
                        </p>
                    </div>
                </div>
                <div id="icons" class="w-100 mt-5 rounded-lg min-h-[70px] flex justify-evenly items-center">
                    <p class="text-blue-500 text-4xl"><i class="fa-brands fa-facebook"></i></p>
                    <p class="text-blue-500 text-4xl"><i class="fa-brands fa-instagram"></i></p>
                    <p class="text-blue-500 text-4xl"><i class="fa-brands fa-twitter"></i></p>
                    <p class="text-blue-500 text-4xl"><i class="fa-brands fa-hashtag"></i></p>
                </div>
            </div>
        </div>
    </main>
@endsection