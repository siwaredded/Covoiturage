<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id") ->constrained("users")->cascadeOnDelete();
            $table->string("trj_depart");
            $table->string("trj_destination");
            $table->date("trj_date");
            $table->time("trj_heure");
            $table->integer("trj_nbre_places");
            $table->string("trj_info");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table("trajets", function(Blueprint $table){
        $table -> dropConstrainedForeignId("users_id");
        $table->dropColumn("users_id");
      });
        Schema::dropIfExists('trajets');
    }
}
   