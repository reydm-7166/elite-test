<?php

namespace App\Services;

use Carbon\Carbon;
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
    public function store(array $validated) : bool
    {
        try {
            $this->document->create([
                'crew_id' => $validated['crew_id'],
                'code' => $validated['code'],
                'name' => $validated['name'],
                'number' => $validated['number'],
                'date_issued' => $this->convertToMySQLDateTime($validated['date_issued']),
                'date_expiry' => $this->convertToMySQLDateTime($validated['date_expiry']),
                'remarks' => $validated['remarks'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return true;
    }
    public function convertToMySQLDateTime($date)
    {
        return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }
}