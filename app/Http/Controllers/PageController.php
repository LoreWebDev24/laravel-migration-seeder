<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // CON LA WHERE:

        // $trains = Train::where('in_partenza_oggi',true); oppure Train::where('departure_time','>',now());
        // return view('guest.index', compact('trains'));

        // CON LA SELECT ALL :

        $trains = Train::all();
        return view('guest.index', compact('trains'));
    }
}
