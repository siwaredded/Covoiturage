<?php

namespace App\Http\Controllers;

use App\Models\Trajets;
use Illuminate\Http\Request;


class TrajetsController extends Controller
{


    //  public function RechercherController() {
    //    return view('rechercherTrajet');

    //}

    public function RechercheTrajet()
    {
        $trajetsDispo = Trajets::where([
            ['trj_depart', '=', request('trj_depart')],
            ['trj_destination', '=', request('trj_destination')],
            ['trj_date', '=', request('trj_date')]
        ])->get();
        
        return view('/rechercherTrajet', [
            'trajet' => $trajetsDispo,
        ]);
    }


    public function ProposerTrajet()
    {
        return view('proposerTrajet');
    }

    public function StoreTrajet(Request $request)
    {

        $request()->validate([
            'trj_depart' => ['required'],

            'trj_destination' => ['required'],

            'trj_date' => ['required', 'date'],

            'trj_heure' => ['date_format:H:i'],

            'trj_nbre_places' => ['required'],

            'trj_info' => ['sometimes']

        ]);
        Trajets::create($request->all());
        return back()->with("success", "Trajet publié avec succés!");

        Trajets::create([
            'nom' => auth()->user()->nom,
            'prenom' => auth()->user()->prenom,
            'numero_de_telephone' => auth()->user()->numero_de_telephone,
            'email' => auth()->user()->email,
            'trajet_id' => auth()->user()->id,
            'trj_depart' => request('trj_depart'),
            'trj_destinationr' => request('trj_destination'),
            'trj_date' => request('trj_date'),
            'trj_heure' => request('trj_heure'),
            'trj_nbre_places' => request('nbre_places'),

        ]);
        return back()->with("success", "Trajet enregistré");
    }

    public function ModifierTrajet()
    {
        return view('');
    }

    public function SupprimerTrajet()
    {
        return view('');
    }
    public function ReserverTrajet()
    {
        return view('');
    }
}
