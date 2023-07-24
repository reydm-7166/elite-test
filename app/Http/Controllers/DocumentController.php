<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentStore;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Services\DocumentService;

class DocumentController extends Controller
{
    public function __construct
    (
        protected DocumentService $documentService,
    ){}
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

    public function edit(string $id) : View
    {
        return view('admin.document.edit', [
            'document' => Document::findOrFail($id)
        ]);
    }

    public function update(DocumentStore $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();
        if($this->documentService->update($validated, $id))
        {
            return redirect()->route('document.show', $id)->with('success', 'Document updated successfully!');
        }
        return redirect()->back()->with('error', 'Something went wrong!');
    }

    public function destroy(cr $id)
    {
        //
    }
}
