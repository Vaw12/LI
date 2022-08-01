<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function show(){
        $clients = Client::all();

        return view()->with('clients', $clients);
    }

    public function store(Request $request){
        $client = new Client();
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->gender = $request->gender;
        $client->client_type = $request->client_type;
        $client->national_id = $request->national_id;
        $client->physical_address = $request->physical_address;
        $client->email_address = $request->email_address;
        $client->org_number = $request->org_number;
        $client->user_id = $request->user()->id();
        $client->save();

        $client_id = $client->id;

        app('App\Http\Controllers\LicensesController')->store($client_id);

        return redirect()->route('license')->with('id', $client_id);
    }

    public function update(Request $request, $id){
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
    }

    public function delete($id){
        $client = Client::findOrFail($id);

        $client->delete();
    }

}

