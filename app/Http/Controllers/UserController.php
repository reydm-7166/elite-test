<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Crew;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('admin.user.index', [
            'users' => User::all()
        ]);
    }

    public function create() : View
    {
        return view('admin.user.create');
    }

    public function store(AccountRequest $request) : RedirectResponse
    {
        $record = User::create($request->validated());
        if($record)
        {
            return redirect()->route('user.index')->with('success', 'Admin successfully created!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    public function destroy(string $id) : RedirectResponse
    {
        $record = User::where('id', $id)->delete();
        if($record) {
            return back()->with('success', 'User successfully deleted!');
        }
        return back()->with('error', 'Something went wrong!');
    }
}
