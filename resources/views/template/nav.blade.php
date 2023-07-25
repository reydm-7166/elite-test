<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between">
    <div id="links" class="flex flex-row justify-evenly items-center w-1/3">
        <p class="text-blue-500 hover:underline hover:underline-offset-4"><a href="{{ route('admin.dashboard') }}">Crew</a></p>
        <p class="text-blue-500 hover:underline hover:underline-offset-4"><a href="">Documents</a></p>
        <p class="text-blue-500 hover:underline hover:underline-offset-4"><a href="{{ route('user.index') }}">Users</a></p>
    </div>

    <div id="logout" class=" p-2 text-end w-1/3 my-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class=" text-black hover:text-blue-500 main-font text-lg hover:underline hover:underline-offset-4">Logout</button>
        </form>
    </div>
</div>
