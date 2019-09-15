<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Tourlist;
use App\User;

class TourlistController extends Controller
{
    
    public function index(Tourlist $tourlist)
    {
        $tourlist = Tourlist::paginate(5);
        
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-tour', compact('tourlist'));
        }

    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $tourlist = Tourlist::where('nama_tour', 'LIKE', '%' . $search . '%')
                ->orWhere('harga','like','%'.$search.'%')
                ->paginate(5);

        return view('form-tour', compact('tourlist'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tour' => 'required',
            'harga' => 'required|numeric',
            'waktutour' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',

        ]);
    	$tourlist = new Tourlist;
    	$tourlist->nama_tour = $request->nama_tour;
    	$tourlist->harga = $request->harga;
    	$tourlist->waktutour = $request->waktutour;
        $tourlist->keterangan = $request->keterangan;
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/tour';
        $file->move($tujuan, $namaFile);
        $tourlist->gambar = $namaFile;
        $tourlist->save();
        return back()->with('status','Data Tour Telah ditambahkan');
    }


    public function update( Request $request){
        $this->validate($request, [
            'nama_tour' => 'required',
            'harga' => 'required|numeric',
            'waktutour' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:5000',

        ]);
        $tourlist = Tourlist::Find($request->id);
        $tourlist->nama_tour = $request->nama_tour;
        $tourlist->harga = $request->harga;
        $tourlist->waktutour = $request->waktutour;
        $tourlist->keterangan = $request->keterangan;
        if (empty($request->file('gambar'))){
            $tourlist->gambar = $tourlist->gambar;
        }
            else{
        unlink(base_path().'/public/uploads/tour/'.$tourlist->gambar);
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/tour';
        $file->move($tujuan, $namaFile);
        $tourlist->gambar = $namaFile;
        }
        $tourlist->save();
        return back()->with('status','Data Tour Telah diupdate');

    }


    public function destroy(Request $request){
        $tourlist = Tourlist::Find($request->id);
        $tourlist->delete();
        return back()->with('status',' Tour berhasil dihapus.');

    }   
}
