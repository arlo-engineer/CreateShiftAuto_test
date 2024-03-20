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
        return view('CreateShiftAuto_test.create_shift', compact('items'));
    }

    public function store(Request $request)
    {
        for($i = 0; $i < 4 * 15; $i++) { // $iの上限は"スタッフ数*日数"に変更
            if (!empty($request->StartTime[$i]) && !empty($request->EndTime[$i]))
            CreatedShift::create([
                'name' => $request->name[$i],
                'WorkingDate' => $request->WorkingDate[$i],
                'StartTime' => $request->StartTime[$i],
                'EndTime' => $request->EndTime[$i],
            ]);
        }

        return to_route('submitted');
    }

    public function submitted()
    {
        return view('CreateShiftAuto_test.submitted');
    }
}
