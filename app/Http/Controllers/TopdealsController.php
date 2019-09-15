<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Topdeals;

class TopdealsController extends Controller
{
    public function index(Topdeals $topdeals)
    {
        $topdeals = Topdeals::paginate(5);
        $topdeals1 = Topdeals::All();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('form-topdeals', compact('topdeals','topdeals1'));
        }

    	
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $topdeals = Topdeals::where('nama_tour_deals', 'LIKE', '%' . $search . '%')
                ->paginate(5);

        return view('form-topdeals', compact('topdeals'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tour_deals' => 'required',

        ]);
    	$topdeals = new Topdeals;
    	$topdeals->nama_tour_deals = $request->nama_tour_deals;
        $topdeals->save();
        return back()->with('status','Data Topdeals Telah ditambahkan');
    }


    public function update(Topdeals $topdeals , Request $request){
        $topdeals = Topdeals::FindorFail($request->id);
    	$topdeals->nama_tour_deals = $request->nama_tour_deals;
        $topdeals->save();
        return back()->with('status','Data Topdeals Telah diupdate');

    }


    public function destroy(Request $request){
        $topdeals = Topdeals::Find($request->id);
        $topdeals->delete();
        return back()->with('status',' Topdeals berhasil dihapus.');

    }
}
