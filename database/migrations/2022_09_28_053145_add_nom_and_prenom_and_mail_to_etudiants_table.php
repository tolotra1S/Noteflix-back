<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNomAndPrenomAndMailToEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->string('nom', 200);
            $table->string('prenom', 200);
            $table->string('matricule', 200);
            $table->string('groupe', 200);
            $table->date('date', 40);
            $table->foreignId('niveau_id')->constraigned()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            //
        });
    }
}
