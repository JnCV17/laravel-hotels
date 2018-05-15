<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchLoggedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['client', 'administrator']);
        $nombre = $request -> nombre;
        $radio = $request -> radio;
        if(is_null($nombre)){
            $hoteles1 =DB::table('hotels')->paginate(5);
            return view('search.searchLogged')->with('hoteles1', $hoteles1);
        }
        elseif (is_null($radio)){
            $hoteles1 = DB::table('hotels')->where('ciudad', 'LIKE',"%$nombre%")->orderBy('id', 'DESC')->paginate(5);
            return view('search.searchLogged')->with('hoteles1', $hoteles1);
        }
        else{
            $hoteles1 = DB::table('hotels')->where('nombre', 'LIKE',"%$nombre%")->orderBy('id', 'DESC')->paginate(5);
            return view('search.searchLogged')->with('hoteles1', $hoteles1);
        }

    }

    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('manager');
        return view('hotels');
    }
}
