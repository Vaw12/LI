<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use App\Models\Licenses;
use App\Models\Film;
use App\Models\Export;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showClients(){
        $clients = Client::all();

        return view('pages.admin.clients')->with('clients', $clients);
    }

    public function showLicenses(){
        $licenses = Licenses::all();

        return view('pages.admin.licenses')->with('licenses', $licenses);
    }

    public function updateClient(Request $request, $id){
        $client = Client::findOrFail($id);
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->gender = $request->gender;
        $client->client_type = $request->client_type;
        $client->national_id = $request->national_id;
        $client->physical_address = $request->physical_address;
        $client->email_address = $request->email_address;
        $client->org_number = $request->org_number;
        
        $client->save();
        return view('pages.admin.clients');
    }

    public function showPending(){
        $licenses = Licenses::where('approval', null)->get();
        return view('pages.admin.pending')->with('licenses', $licenses);
    }

    public function editLicense($id){
        return view('pages.license.edit')->with('id', $id);
    }

    public function updateLicense(Request $request, $id){
        $license = Licenses::find($id);
        $license->license_name = $request->license_name;
        $license->fee_paid = $request->fee_paid;
        $license->approval = $request->approval;
        
        $license->save();



        return redirect()->route('showLicenses');
    }
}
