<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villageois', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->string("telephone");
            $table->foreignId("entreprise_id") ->nullable()->constrained("entreprises")->cascadeOnDelete();
            $table->timestamps();
        });

        Schema:: enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table("villageois", function(Blueprint $table){
        $table -> dropConstrainedForeignId("entreprise_id");
        $table->dropColumn("entreprise_id");
      });
        Schema::dropIfExists('villageois');
    }
}
