<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajets extends Model
{
    use HasFactory;
    protected $fillable =["user_id","trj_depart","trj_destination","trj_date","trj_heure","trj_nbre_places","trj_info"];
    public function Users(){
     return   $this-> belongsTo('App\User');
    }
}

