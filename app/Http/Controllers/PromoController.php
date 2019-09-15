<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Promo;

class PromoController extends Controller
{
    public function index(Promo $promo)
    {
        $promo = Promo::All();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-promo', compact('promo'));
        }
    	
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'diskon' => 'required|numeric',
            'keterangan' => 'required',

        ]);
    	$promo = new promo;
    	$promo->judul = $request->judul;
    	$promo->diskon = $request->diskon;
        $promo->keterangan = $request->keterangan;
        $promo->save();
        return back()->with('status','Data Promo Telah ditambahkan');
    }


    public function update(Promo $promo , Request $request){
       $this->validate($request, [
            'judul' => 'required',
            'diskon' => 'required|numeric',
            'keterangan' => 'required',

        ]);
        $promo = Promo::FindorFail($request->id);
    	$promo->judul = $request->judul;
    	$promo->diskon = $request->diskon;
        $promo->keterangan = $request->keterangan;
        $promo->save();
        return back()->with('status','Data Promo Telah diupdate');
    }


    public function destroy(Request $request){
        $promo = Promo::Find($request->id);
        $promo->delete();
        return back()->with('status',' promo berhasil dihapus.');

    }   
}
