<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrewStore;
use App\Models\Crew;
use App\Services\CrewService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CrewController extends Controller
{

    public function __construct
    (
        protected CrewService $crewService,
    ){}
    public function create(): View
    {
        return view('admin.crew.create');
    }

    public function store(CrewStore $request): RedirectResponse
    {
        $validated = $request->validated();
        if(!$this->crewService->store($validated)) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
        return redirect()->route('admin.dashboard')->with('success', 'Crew successfully added!');
    }
    public function show(string $id) : View
    {
        return view('admin.crew.show', [
            'crew' => $this->crewService->getById($id)
        ]);
    }
    public function edit(string $id) : View
    {
        return view('admin.crew.edit', [
            'crew' => $this->crewService->getById($id)
        ]);
    }

    public function update(CrewStore $request, string $id) : RedirectResponse
    {
        // I decided to put the update logic in the services since that's where the models were injected, it would be too redundant to inject them here as well.
        // might as well put the all the logic in the services.
        $validated = $request->validated();
        if(!$this->crewService->update($validated, $id)) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
        return redirect()->route('admin.dashboard')->with('success', 'Crew successfully updated!');
    }

    public function destroy(string $id)
    {
        $record = Crew::where('id', $id)->delete();
        if($record) {
            return response()->json([
                'message' => "Deleted Successfully!",
                'data' => Crew::with('details')->paginate(12),
                'status' => 200,
            ]);
        }
        return response()->json([
            'message' => "Something went wrong!",
            'status' => 500,
        ]);
    }
}
