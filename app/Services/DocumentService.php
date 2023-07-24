<?php

namespace App\Services;

use App\Models\Crew;
use App\Models\Details;
use App\Models\Document;
use DB;

class DocumentService
{
    public function __construct
    (
        protected Document $document,
    )
    {}

    public function update(array $validated, string $id) : bool
    {
        $record = $this->document->findOrFail($id);

        $update = $record->update([
                'code' => $validated['code'],
                'crew_id' => $validated['crew_id'],
                'name' => $validated['name'],
                'number' => $validated['number'],
                'date_issued' => $validated['date_issued'],
                'date_expiry' => $validated['date_expiry'],
                'remarks' => $validated['remarks'],
        ]);
        if($update)
        {
            return true;
        }
        return false;
    }

}