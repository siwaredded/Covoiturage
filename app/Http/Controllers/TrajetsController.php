<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreTrajetsRequest;
use App\Models\Trajets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class TrajetsController extends Controller
{


    //  public function RechercherController() {
    //    return view('rechercherTrajet');

    //}
    public function footer1()
    {
      
            return view('comment');


        }
        public function footer2()
        {
          
                return view('QuiSommesNous');
    
    
            }
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

    public function store(Request $request)
   { 
    $request->user_id = Auth::user()->id;
      Trajets::create($request->all());
      return back()->with("success", "Trajet publié avec succés!");
   }

       // Trajets::create([
          //  'nom' => auth()->user()->nom,
           // 'prenom' => auth()->user()->prenom,
           // 'numero_de_telephone' => auth()->user()->numero_de_telephone,
           // 'email' => auth()->user()->email,
           // 'trajet_id' => auth()->user()->id,
            //'trj_depart' => request('trj_depart'),
            //'trj_destinationr' => request('trj_destination'),
           // 'trj_date' => request('trj_date'),
            //'trj_heure' => request('trj_heure'),
            //'trj_nbre_places' => request('nbre_places'),

        //]);
        //return back()->with("success", "Trajet enregistré");
    

    // afficher tous les trajets
    public function index()
{
    $trajets = Trajets::all();

    return view('index', compact('trajets'));
}

  


    public function Supprimer(Trajets $trajets)
    { $trajets->delete();
        return back()->with("successDelete", "votre publication a été supprimé avec succès!");
      
    }

    public function ModifierPublication(trajets $trajets)
    {
      
   }
    public function ReserverTrajet()
    {
        return view('');
    }
    public function AnnulerReservation()
    {
        return view('');
    }
}
