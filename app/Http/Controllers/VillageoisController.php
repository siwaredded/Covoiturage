<?php

namespace App\Http\Controllers;

use App\Models\villageois;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    public function index () {

        $villageois = villageois::orderBy("nom","asc") ->get();
        return view('villageois',['villageois' => $villageois]);
     }
}
