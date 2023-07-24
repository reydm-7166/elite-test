<?php

namespace App\Services;

use App\Models\Crew;
use App\Models\Details;
use DB;

class CrewService
{
    public function __construct
    (
        protected Crew $crew,
        protected Details $details,
    ){}

    public function getById(string $id)
    {
        return $this->crew
                    ->select('crews.*', 'details.id as details_id', 'details.education', 'details.address', 'details.contact_number')
                    ->join('details', 'crews.id', '=', 'details.crew_id')
                    ->where('crews.id', $id)
                    ->first();
    }
    public function store(array $validated) : bool
    {
        try {
            DB::beginTransaction();

            $crew = $this->crew->create([
                'first_name' => $validated['first_name'],
                'middle_name' => $validated['middle_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
            ]);
            $this->details->create([
                'crew_id' => $crew->id,
                'education' => $validated['education'],
                'address' => $validated['address'],
                'contact_number' => (int)$validated['number'],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }
    public function update(array $validated, string $id) : bool
    {
        $record = $this->crew->findOrFail($id);
        try {
            DB::beginTransaction();
            $record->update([
                'first_name' => $validated['first_name'],
                'middle_name' => $validated['middle_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
            ]);
            $record->details()->update([
                'education' => $validated['education'],
                'address' => $validated['address'],
                'contact_number' => (int)$validated['number'],
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }
}