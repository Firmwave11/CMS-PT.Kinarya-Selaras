<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Testimoni;

class TestimoniController extends Controller
{
      public function index(Testimoni $testimoni)
    {
        $testimoni = Testimoni::paginate(5);
        $testimoni1 = Testimoni::All();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-testimoni', compact('testimoni','testimoni1'));
        }
        
    	
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $testimoni = Testimoni::where('nama', 'LIKE', '%' . $search . '%')
                ->orWhere('kota','like','%'.$search.'%')
                ->paginate(5);

        return view('form-testimoni', compact('testimoni'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kota' => 'required',
            'testimoni' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'background' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',

        ]);
    	$testimoni = new Testimoni;
    	$testimoni->nama = $request->nama;
    	$testimoni->kota = $request->kota;
        $testimoni->testimoni = $request->testimoni;
        $fileFoto = $request->file('foto');
        $namafileFoto = $fileFoto->getClientOriginalName();
        $tujuanFoto =base_path().'/public/uploads/testimoni/foto';
        $fileFoto->move($tujuanFoto, $namafileFoto);
        $testimoni->foto = $namafileFoto;
        $fileBackground = $request->file('background');
        $namafileBackground = $fileBackground->getClientOriginalName();
        $tujuanBackground =base_path().'/public/uploads/testimoni/background';
        $fileBackground->move($tujuanBackground, $namafileBackground);
        $testimoni->background = $namafileBackground;
        $testimoni->save();

        return back()->with('status','Data Testimoni Telah ditambahkan');
    }

    public function update(Testimoni $testimoni , Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'kota' => 'required',
            'testimoni' => 'required',
            'background' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:5000',

        ]);
        $testimoni = Testimoni::Find($request->id);
    	$testimoni->nama = $request->nama;
    	$testimoni->kota = $request->kota;
    	$testimoni->testimoni = $request->testimoni;
        if (empty($request->file('foto'))){
            $testimoni->foto = $testimoni->foto;
        }
            else{
        unlink(base_path().'/public/uploads/testimoni/foto/'.$testimoni->foto);
        $fileFoto = $request->file('foto');
        $namafileFoto = $fileFoto->getClientOriginalName();
        $tujuanFoto =base_path().'/public/uploads/testimoni/foto';
        $fileFoto->move($tujuanFoto, $namafileFoto);
        $testimoni->foto = $namafileFoto;
        }
        if (empty($request->file('background'))) {
            $testimoni->background = $testimoni->background;
        }
            else{
        unlink(base_path().'/public/uploads/testimoni/background/'.$testimoni->background);
        $fileBackground = $request->file('background');
        $namafileBackground = $fileBackground->getClientOriginalName();
        $tujuanBackground =base_path().'/public/uploads/testimoni/background';
        $fileBackground->move($tujuanBackground, $namafileBackground);
        $testimoni->background = $namafileBackground;
        }
        $testimoni->save();

        return back()->with('status','Data Testimoni Telah ditambahkan');
    }


    public function destroy(Request $request){
        $testimoni = Testimoni::Find($request->id);
        $testimoni->delete();
        return back()->with('status',' Testimoni berhasil dihapus.');

    }   
}
