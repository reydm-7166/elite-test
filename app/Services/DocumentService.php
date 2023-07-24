<?php

namespace App\Services;

use App\Models\Crew;
use App\Models\Details;
use App\Models\Document;
use DB;

class CrewService
{
    public function __construct
    (
        protected Document $document,
    )
    {}

    public function update(array $validated, string $id) : bool
    {
        $record = $this->$document->findOrFail($id);
        try {
            $record->update([
                'code' => $validated['code'],
                'name' => $validated['name'],
                'number' => $validated['number'],
                'date_issued' => $validated['date_issued'],
                'date_expiry' => $validated['date_expiry'],
                'remarks' => $validated['remarks'],
            ]);
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

}