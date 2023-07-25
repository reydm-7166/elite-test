<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentStore;
use App\Models\Crew;
use App\Models\Document;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\DocumentService;
use Illuminate\View\View;

class DocumentController extends Controller
{
    public function __construct
    (
        protected DocumentService $documentService,
    ){}
    public function index()
    {

    }

    public function create() : View
    {
        // I limited the number of crews to 5 for testing purposes and not fill the whole screen with all crews' list of names.
        // this is used for the select option in the create document form if the admin wants to attach or bind the document to a crew.
        return view('admin.document.create', [
            'crews' => Crew::where('id', '<=', 5)->get(),
        ]);
    }

    public function store(DocumentStore $request)
    {
        $validated = $request->validated();
        if($this->documentService->store($validated)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error', 'Something went wrong!');
    }

    public function show(string $id) : View
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

    public function destroy(String $id) : RedirectResponse
    {
        $record = Document::where('id', $id)->delete();
        if($record) {
            return redirect()->route('admin.dashboard')->with('deleted', 'Document deleted successfully!');
        }
        return redirect()->back()->with('error', 'Something went wrong!');
    }
}
