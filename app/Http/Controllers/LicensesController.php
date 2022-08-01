<?php

namespace App\Http\Controllers;

use App\Models\Licenses;
use Illuminate\Http\Request;

class LicensesController extends Controller
{
    //

    public function show(){
        $licenses = Licenses::all();

        return view()->with('licenses', $licenses);
    }

    public function store(Request $request, $client_id){
        $license = new Licenses();
        $license->license_name = $request->license_name;
        $license->last_name = $request->fee_paid;
        $license->client_id = $client_id;
        $license->save();

        $license_id = $license->id;

        return redirect()->route('all')->with('id', $license_id);
    }

    public function update(Request $request, $id){
        $license = Licenses::findOrFail($id);
        
        $license->save();
    }

    public function delete($id){
        $license = Licenses::findOrFail($id);

        $license->delete();
    }

}

