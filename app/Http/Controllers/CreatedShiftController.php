<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmittedShift;
use App\Models\CreatedShift;

class CreatedShiftController extends Controller
{
    public function create()
    {
        $items = SubmittedShift::get();
        // dd($items);
        return view('CreateShiftAuto_test.create_shift', compact('items'));
    }

    public function store(Request $request)
    {
        CreatedShift::create([
            'name' => $request->name,
            'WorkingDate' => $request->WorkingDate,
            'StartTime' => $request->StartTime,
            'EndTime' => $request->EndTime,
        ]);

        return to_route('submitted');
    }

    public function submitted()
    {
        return view('CreateShiftAuto_test.submitted');
    }
}
