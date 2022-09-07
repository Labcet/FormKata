<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CasosPruebas;
use App\Models\Evidencias;
use Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $cps = CasosPruebas::where('user_id', $user->id)->get();
        /*$evi = Evidencias::where('cp_id', $cps)*/

        return View('home')
            ->with('cps', $cps);

        //return view('home');
    }
}
