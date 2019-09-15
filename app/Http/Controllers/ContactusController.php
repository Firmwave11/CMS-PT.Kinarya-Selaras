<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Contactus;

class ContactusController extends Controller
{
    public function index(Contactus $contactus)
    {
        $contactus = Contactus::All();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-contactus', compact('contactus'));
        }
    	
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'lokasi' => 'required',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',

        ]); 
    	$contactus = new Contactus;
    	$contactus->lokasi = $request->lokasi;
    	$contactus->no_telp = $request->no_telp;
        $contactus->email = $request->email;
        $contactus->save();
        return back()->with('status','Data Contactus Telah ditambahkan');
    }


    public function update(Contactus $contactus , Request $request){
        $this->validate($request, [
            'lokasi' => 'required',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',

        ]);
        $contactus = Contactus::Find($request->id);
    	$contactus->lokasi = $request->lokasi;
    	$contactus->no_telp = $request->no_telp;
        $contactus->email = $request->email;
        $contactus->save();
        return back()->with('status','Data contactus Telah diupdate');
    }


    public function destroy(Request $request){
        $contactus = Contactus::Find($request->id);
        $contactus->delete();
        return back()->with('status',' contactus berhasil dihapus.');

    }  
}
