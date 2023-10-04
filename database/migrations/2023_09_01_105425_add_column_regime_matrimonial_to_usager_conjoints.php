<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRegimeMatrimonialToUsagerConjoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usager_conjoints', function (Blueprint $table) {
            //
            $table->string("regime_matrimonial")->nullable();
            $table->string("lieu_mariage")->nullable();
            $table->datetime("date_mariage")->nullable();
            $table->integer("id_ligne")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usager_conjoints', function (Blueprint $table) {
            //
            $table->dropColumn('regime_matrimonial');
            $table->dropColumn('lieu_mariage');
            $table->dropColumn('date_mariage');
            $table->dropColumn('id_ligne');
        });
    }
}
