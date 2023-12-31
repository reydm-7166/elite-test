@extends('template.app')
@section('page-title')
    Login
@endsection

@section('main-content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-[80px] sm:mx-auto sm:w-full sm:max-w-sm">
            @if(session('error'))
                <div class="w-full p-2 rounded-lg text-center mt-[30px]">
                    <p class="text-lg text-red-500 font-bold"><i class="fa-solid fa-triangle-exclamation"></i> {{ session('error') }}</p>
                </div>
            @endif
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>
        <div class="mt-[50px] sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login.attempt') }}" method="POST">
                @csrf
                <div class="mt-[30px]">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="email" name="username" type="text" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                        ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('username')
                        <div class="text-red-500 italic text-sm">{{ $errors->first('username') }}</div>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password')
                        <div class="text-red-500 italic text-sm">{{ $errors->first('password') }}</div>
                    @enderror
                </div>

                <div>
                    <button
                            type="submit"
                            class="flex w-full justify-center py-2 rounded-md text-black bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm
                            hover:bg-blue-700 hover:text-white hover:shadow-lg
                            ">
                            Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection