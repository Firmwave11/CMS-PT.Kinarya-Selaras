<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Tentang;

class TentangController extends Controller
{
     public function index(Tentang $tentang)
    {
    	$tentang = Tentang::all();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-tentang',compact('tentang'));
        }
    	
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]); 
    	$tentang = new Tentang;
    	$tentang->title = $request->title;
    	$tentang->subtitle = $request->subtitle;
        $tentang->keterangan = $request->keterangan;
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/tentang';
        $file->move($tujuan, $namaFile);
        $tentang->gambar = $namaFile;
        $tentang->save();
        return back()->with('status','Data Tentang Telah ditambahkan');
    }


    public function update(Tentang $tentang , Request $request){
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:5000',


        ]); 
        $tentang = tentang::FindorFail($request->id);
        $tentang->title = $request->title;
        $tentang->subtitle = $request->subtitle;
        $tentang->keterangan = $request->keterangan;
        if (empty($request->file('gambar'))){
            $tentang->gambar = $tentang->gambar;
        }
            else{
        unlink(base_path().'/public/uploads/tentang/'.$tentang->gambar); 
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/tentang/';
        $file->move($tujuan, $namaFile);
        $tentang->gambar = $namaFile;
        }
        $tentang->save();
        return back()->with('status','Data Tentang Telah diupdate');

    }


    public function destroy(Request $request){
        $tentang = Tentang::Find($request->id);
        $tentang->delete();
        return back()->with('status','Data Tentang Telah dihapus');

    }
}