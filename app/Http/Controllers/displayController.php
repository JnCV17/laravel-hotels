<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class displayController extends Controller
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
            $hoteles =DB::table('hotels')->paginate(5);
            return view('display.display')->with('hoteles', $hoteles);

    }

    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('manager');
        return view('hotels');
    }
}
