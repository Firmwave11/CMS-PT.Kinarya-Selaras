<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Tourlist;
use App\Hotel;
use App\Testimoni;
use App\Promo;
use App\Topdeals;
use App\Contactus;
use App\Explore;
use App\Tentang;
use App\Background;

class KinaryaController extends Controller
{
    public function index()
    {

    	$tourlist = Tourlist::all();
    	$tourlists = Tourlist::all();
    	$gambar = DB::table('tourlist')->take(6)->get();
    	$hotel = DB::table('hotel')->take(4)->get();
    	$testimoni = DB::table('testimoni')->take(4)->get();;
    	$promo = DB::table('promo')->take(1)->get();
    	$topdeals = Topdeals::all();
    	$contactus = DB::table('contactus')->take(1)->get();
        $background = DB::table('background')->take(1)->get();
        $tentang = DB::table('tentang')->take(1)->get();         
    	$explore = DB::table('explore')->take(1)->get();
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
         else{

        return view('Kinarya_html.index',compact('tourlist','hotel','testimoni','promo','topdeals','contactus','explore','tourlists','gambar','background','tentang'));
        }
    	
    }
    public function hotel()
    {      

     $hotel = DB::table('hotel')->get();

        return view('Kinarya_html.hotel-result',compact('hotel'));
    }
}
