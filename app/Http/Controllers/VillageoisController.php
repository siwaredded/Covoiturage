<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVillageoisRequest;
use App\Models\Entreprise;
use App\Models\villageois;
use Illuminate\Http\Request;


class VillageoisController extends Controller
{
   public function index()
   {
      $villageois = villageois::orderBy("nom", "asc")->get();

      return view("villageois", compact("villageois"));
   }

   public function create()
   {
      $entreprises = Entreprise::get();

      return view("createVillageois", compact("entreprises"));
   }

   public function store(StoreVillageoisRequest $request)
   {
      Villageois::create($request->all());
      return back()->with("success", "villageois ajouté avec succés!");
   }

   public function edit(Villageois $villageois)
   {
      $entreprises = Entreprise::all();
      return view("EditVillageois", compact("villageois", "entreprises"));
   }

   public function delete(Villageois $villageois)
   {
      $villageois->delete();
      return back()->with("successDelete", "Employé supprimé avec succès!");
   }

   public function update(Request $request, villageois $villageois)
   {

      $request->validate([
         "nom" => "required",
         "prenom" => "required",
         "email" => "required",
         "telephone" => "required",
         "entreprise_id" => "required"
      ]);

      $villageois->update([
         "nom" => $request->nom,
         "prenom" => $request->prenom,
         "email" => $request->email,
         "telephone" => $request->telephone,
         "entreprise_id" => $request->entreprise_id
      ]);
      return back()->with("success", "employé mis a jour avec succés!");
   }
}
