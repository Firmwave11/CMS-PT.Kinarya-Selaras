<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Explore;
class ExploreController extends Controller
{
     public function index(Explore $explore)
    {
    	$explore = Explore::all();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-explore',compact('explore'));
        }
    	
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',


        ]); 
    	$explore = new Explore;
    	$explore->title = $request->title;
    	$explore->subtitle = $request->subtitle;
    	$explore->link = $request->link;
        $explore->keterangan = $request->keterangan;
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/explore/gambar';
        $file->move($tujuan, $namaFile);
        $explore->gambar = $namaFile;
        $explore->save();
        return back()->with('status','Data Explore Telah ditambahkan');
    }


    public function update(Explore $explore , Request $request){
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:5000',

        ]); 
        $explore = Explore::FindorFail($request->id);
        $explore->title = $request->title;
        $explore->subtitle = $request->subtitle;
        $explore->link = $request->link;
        $explore->keterangan = $request->keterangan;
        if (empty($request->file('gambar'))){
            $explore->gambar = $explore->gambar;
        }
            else{
        unlink(base_path().'/public/uploads/explore/gambar/'.$explore->gambar); 
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/explore/gambar';
        $file->move($tujuan, $namaFile);
        $explore->gambar = $namaFile;
        }
        $explore->save();
        return back()->with('status','Data Explore Telah diupdate');

    }


    public function destroy(Request $request){
        $explore = Explore::Find($request->id);
        $explore->delete();
        return back()->with('status','Data Explore Telah dihapus');

    }   
}
