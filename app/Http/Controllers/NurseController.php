<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NurseController extends Controller
{
    public function create()
    {
        return view('nurse-create');
    }

    public function store(Request  $request)
    {

        $nurse = new Nurse;
        $nurse->registration_number = $request->registration_number;
        $nurse->province = $request->province;
        $nurse->registration_class = $request->registration_class;
        $nurse->effective_from = $request->effective_from;
        $nurse->expiration_date = $request->expiration_date;
        $nurse->user_id = $request->user()->id;
        $nurse->save();
        return redirect(route('profile.edit'))->with('nurse', 'nurse-create');
    }

    public function edit(Request $request)
    {
        $tableName = 'nurses';
        $nurse = DB::table($tableName)->where('user_id', $request->user()->id)->first();
        return view('nurse-edit')->with('nurse', $nurse);;
    }

    public function update(Request $request)
    {
        $nurse = Nurse::where('user_id', $request->user()->id)->first();
        $nurse->registration_number = $request->registration_number;
        $nurse->province = $request->province;
        $nurse->registration_class = $request->registration_class;
        $nurse->effective_from = $request->effective_from;
        $nurse->expiration_date = $request->expiration_date;
        $nurse->user_id = $request->user()->id;
        $nurse->update();
        return redirect(route('profile.edit'))->with('nurse', 'nurse-update');
    }
}
