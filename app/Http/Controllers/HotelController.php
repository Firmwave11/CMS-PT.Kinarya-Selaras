<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::paginate(5);
        $hotel1 = Hotel::All();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-hotel', compact('hotel','hotel1'));
        }

    	
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $hotel = Hotel::where('nama', 'LIKE', '%' . $search . '%')
                ->orWhere('harga','like','%'.$search.'%')
                ->orWhere('bintang','like','%'.$search.'%')
                ->paginate(5);

        return view('form-hotel', compact('hotel'));
    }
    public function store(Request $request)
    {
       $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'keterangan' => 'required',
            'ket_harga' => 'required',
            'bintang' => 'required|numeric|min:1|max:5',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',

        ]);        
    	$hotel = new Hotel;
    	$hotel->nama = $request->nama;
    	$hotel->harga = $request->harga;
    	$hotel->ket_harga = $request->ket_harga;
    	$hotel->bintang = $request->bintang;
        $hotel->persenbintang = $hotel->bintang * 20;
        $hotel->keterangan = $request->keterangan;
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan = base_path().'/public/uploads/hotel';
        $file->move($tujuan, $namaFile);
        $hotel->gambar = $namaFile;
        $hotel->save();
        return back()->with('status','Data Hotel Telah ditambahkan');
    }


    public function update(Hotel $hotel , Request $request){
       $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'keterangan' => 'required',
            'ket_harga' => 'required',
            'bintang' => 'required|numeric|min:1|max:5',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:5000'

        ]);  
        $hotel = Hotel::Find($request->id);
        $hotel->nama = $request->nama;
        $hotel->harga = $request->harga;
        $hotel->ket_harga = $request->ket_harga;
        $hotel->bintang = $request->bintang;
        $hotel->persenbintang = $hotel->bintang * 20;
        $hotel->keterangan = $request->keterangan;
        if (empty($request->file('gambar'))){
            $hotel->gambar = $hotel->gambar;
        }
            else{
        unlink(base_path().'/public/uploads/hotel/'.$hotel->gambar); //menghapus file lama
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/hotel';
        $file->move($tujuan, $namaFile);
        $hotel->gambar = $namaFile;
                }
        $hotel->save();
        return back()->with('status','Data Hotel Telah diupdate');

    }

    public function destroy(Request $request){
        $hotel = Hotel::Find($request->id);
        $hotel->delete();
        return back()->with('status',' Hotel berhasil dihapus.');

    }   
}
