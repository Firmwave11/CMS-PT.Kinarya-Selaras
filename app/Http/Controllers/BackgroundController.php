<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Background;

class BackgroundController extends Controller
{
 
     public function index(Background $background)
    {
    	$background = Background::all();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-background',compact('background'));
        }
    	
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'background_awal' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'background_tengah' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'background_akhir' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'background_latar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]); 
    	$background = new background;
        $file = $request->file('background_awal');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/background/BackgroundAwal';
        $file->move($tujuan, $namaFile);
        $background->background_awal = $namaFile;

        $fileBackground = $request->file('background_tengah');
        $namafileBackground = $fileBackground->getClientOriginalName();
        $tujuanBackground =base_path().'/public/uploads/background/backgroundtengah';
        $fileBackground->move($tujuanBackground, $namafileBackground);
        $background->background_tengah = $namafileBackground;

        $fileBackground2 = $request->file('background_akhir');
        $namafileBackground2 = $fileBackground2->getClientOriginalName();
        $tujuanBackground2 =base_path().'/public/uploads/background/backgroundakhir';
        $fileBackground2->move($tujuanBackground2, $namafileBackground2);
        $background->background_akhir = $namafileBackground2;

        $fileBackground3 = $request->file('background_latar');
        $namafileBackground3 = $fileBackground3->getClientOriginalName();
        $tujuanBackground3 =base_path().'/public/uploads/background/backgroundlatar';
        $fileBackground3->move($tujuanBackground3, $namafileBackground3);
        $background->background_latar = $namafileBackground3;

        $fileBackground4 = $request->file('background_explore');
        $namafileBackground4 = $fileBackground4->getClientOriginalName();
        $tujuanBackground4 =base_path().'/public/uploads/background/backgroundexplore';
        $fileBackground4->move($tujuanBackground4, $namafileBackground4);
        $background->background_explore = $namafileBackground4;

        $fileBackground5 = $request->file('background_orang');
        $namafileBackground5 = $fileBackground5->getClientOriginalName();
        $tujuanBackground5 =base_path().'/public/uploads/background/backgroundorang';
        $fileBackground5->move($tujuanBackground5, $namafileBackground5);
        $background->background_orang = $namafileBackground5;
        $background->save();
        return back()->with('status','Data Background Telah ditambahkan');
    }


    public function update(background $background , Request $request){
        $this->validate($request, [
            'background_awal' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
            'background_tengah' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
            'background_akhir' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
            'background_latar' => 'image|mimes:jpeg,png,jpg,gif|max:5000',

        ]); 
        $background = Background::FindorFail($request->id);
        if (empty($request->file('background_awal'))){
            $background->background_awal = $background->background_awal;
        }
            else{
        unlink(base_path().'/public/uploads/background/BackgroundAwal/'.$background->background_awal);
        $file = $request->file('background_awal');
        $namaFile = $file->getClientOriginalName();
        $tujuan =base_path().'/public/uploads/background/BackgroundAwal';
        $file->move($tujuan, $namaFile);
        $background->background_awal = $namaFile;
   		}
   		if (empty($request->file('background_tengah'))){
            $background->background_tengah = $background->background_tengah;
        }
            else{
        unlink(base_path().'/public/uploads/background/backgroundtengah/'.$background->background_tengah);
        $fileBackground = $request->file('background_tengah');
        $namafileBackground = $fileBackground->getClientOriginalName();
        $tujuanBackground =base_path().'/public/uploads/background/backgroundtengah';
        $fileBackground->move($tujuanBackground, $namafileBackground);
        $background->background = $namafileBackground;
        }
        if (empty($request->file('background_akhir'))){
            $background->background_akhir = $background->background_akhir;
        }
            else{
        unlink(base_path().'/public/uploads/background/backgroundakhir/'.$background->background_akhir);
        $fileBackground2 = $request->file('background_akhir');
        $namafileBackground2 = $fileBackground2->getClientOriginalName();
        $tujuanBackground2 =base_path().'/public/uploads/background/backgroundakhir';
        $fileBackground2->move($tujuanBackground2, $namafileBackground2);
        $background->background_akhir = $namafileBackground2;
    	}
        if (empty($request->file('background_latar'))){
            $background->background_latar = $background->background_latar;
        }
            else{
        unlink(base_path().'/public/uploads/background/backgroundlatar/'.$background->background_latar);
        $fileBackground3 = $request->file('background_latar');
        $namafileBackground3 = $fileBackground3->getClientOriginalName();
        $tujuanBackground3 =base_path().'/public/uploads/background/backgroundlatar';
        $fileBackground3->move($tujuanBackground3, $namafileBackground3);
        $background->background_latar = $namafileBackground3;
        }

        if (empty($request->file('background_explore'))){
            $background->background_explore = $background->background_explore;
        }
            else{
        unlink(base_path().'/public/uploads/background/backgroundexplore/'.$background->background_explore);
        $fileBackground4 = $request->file('background_explore');
        $namafileBackground4 = $fileBackground4->getClientOriginalName();
        $tujuanBackground4 =base_path().'/public/uploads/background/backgroundexplore';
        $fileBackground4->move($tujuanBackground4, $namafileBackground4);
        $background->background_explore = $namafileBackground4;
        }
        if (empty($request->file('background_orang'))){
            $background->background_orang = $background->background_orang;
        }
            else{
        unlink(base_path().'/public/uploads/background/backgroundorang/'.$background->background_orang);
        $fileBackground5 = $request->file('background_orang');
        $namafileBackground5 = $fileBackground5->getClientOriginalName();
        $tujuanBackground5 =base_path().'/public/uploads/background/backgroundorang';
        $fileBackground5->move($tujuanBackground5, $namafileBackground5);
        $background->background_orang = $namafileBackground5;
        }
        $background->save();
        return back()->with('status','Data Background Telah diupdate');

    }


    public function destroy(Request $request){
        $background = Background::Find($request->id);
        $background->delete();
        return back()->with('status','Data Background Telah dihapus');

    }   
}


