@extends('template.app')
@section('page-title')
    Users
@endsection
@section('main-content')
    <h1 class="text-center main-font text-4xl">USERS</h1>

    <div id="table-container" class="w-[80%] p-2 h-[700px] mx-auto mt-[40px]">
        <div id="add" class="w-full mb-3 flex items-center justify-end">
            <button class="mx-5 text-2xl text-blue-500 hover:text-blue-700"
                    data-te-toggle="tooltip"
                    title="Add new product">
                <a href="{{ route('user.create') }}">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </button>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  00">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Password
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Role
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Account Creation Date
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Action
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $user->username }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->password }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->is_admin ? 'Admin' : 'User' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans(null, true) }}
                        </td>
                        <td class="px-6 py-4 text-left">
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection