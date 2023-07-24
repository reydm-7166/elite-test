<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentStore;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('admin.document.show', [
            'document' => Document::findOrFail($id)
        ]);
    }

    public function edit(string $id)
    {
        return view('admin.document.edit', [
            'document' => Document::findOrFail($id)
        ]);
    }

    public function update(DocumentStore $request, string $id)
    {
        $validated = $request->validated();

    }

    public function destroy(cr $id)
    {
        //
    }
}
