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
        $i = 0;
        foreach($request->num as $val) {
            CreatedShift::create([
                'name' => $request->name[$i],
                'WorkingDate' => $request->WorkingDate[$i],
                'StartTime' => $request->StartTime[$i],
                'EndTime' => $request->EndTime[$i],
            ]);
            $i++;
        }

        return to_route('submitted');
    }

    public function submitted()
    {
        return view('CreateShiftAuto_test.submitted');
    }
}
