<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class villageois extends Model
{
    use HasFactory;
    protected $fillable =["nom","prenom","email","telephone","entreprise_id"];
    public function Entreprise(){
     return   $this-> belongsTo(Entreprise::class);
    }
    
}
