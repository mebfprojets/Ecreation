<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsagerConjointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usager_conjoints', function (Blueprint $table) {
            $table->id();
            $table->integer("usager_id");
            $table->integer("conjoint_id");
            $table->integer("regime_matrimonial")->nullable();
            $table->string("lieu_mariage")->nullable();
            $table->date("date_mariage")->nullable();
            $table->integer("id_ligne")->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usager_conjoints');
    }
}
