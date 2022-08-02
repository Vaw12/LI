<?php

namespace App\Http\Controllers;

use App\Models\Licenses;
use App\Models\Film;
use App\Models\Export;
use App\Models\Utilization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LicensesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        $id = Auth::user()->client_id;
        if ($id == !NULL) {
            return view('pages.license.register');
        }
        else {
            return view('pages.client.register');
        }
        
    }

    public function show(){
        $id = Auth::user()->client_id;
        $licenses = Licenses::where('client_id',$id)->get();

        return view('pages.license.all')->with('licenses', $licenses);
    }

    public function store(Request $request){
        $license = new Licenses();
        $license->license_name = $request->license;
        $license->client_id = Auth::user()->client_id;
        $license->save();

        $license_name = $license->license_name;

        switch ($license_name) {
            case 'Film License':
                $film = new Film();
                $film->film_permit = $request->file('permit')->store('permits');
                $film->synopsis = $request->file('synopsis')->store('synopsis');
                $film->license_id = $license->id;
                $film->save();
                break;
            case 'Export License':
                $export = new Export();
                $export->research_permit = $request->file('permit')->store('permits');
                $export->cv = $request->file('cv')->store('cvs');
                $export->support_letter = $request->file('application_letter')->store('letters');
                $export->instituitional_profile = $request->file('profile')->store('profiles');
                $export->license_id = $license->id;
                $export->save();
                break;
            case 'Wildlife Utilization Permit':
                $utilization = new Utilization();
                $utilization->application_letter = $request->file('application_letter')->store('letters');
                $utilization->business_plan = $request->file('synopsis')->store('synopsis');
                $utilization->license_id = $license->id;
                $utilization->save();
                break;
            default:
                return 'Error encountered';
                break;
        }
        return redirect()->route('home');
    }
    
    public function check(){
        $id = Auth::user()->client_id;
        $licenses = Licenses::where('client_id',$id)
                    ->where('approval', '1')
                    ->get();

        return view('pages.license.check')->with('licenses', $licenses);
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

