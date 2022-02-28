<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Entreprise extends Model
{
    use HasFactory;
    public function Entreprise(){
        $this-> HasOne(Entreprise::class);
    }
}
