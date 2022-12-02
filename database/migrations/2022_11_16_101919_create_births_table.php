<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('births', function (Blueprint $table) {
            $table->id();
            $table->string('CT')->nullable();
            $table->string('PLACE')->nullable();
            $table->string('FOL')->nullable();
            $table->string('PAGE')->nullable();
            $table->string('FIRST')->nullable();
            $table->string('MI')->nullable();
            $table->string('LAST')->nullable();
            $table->string('MFIRST')->nullable();
            $table->string('MMI')->nullable();
            $table->string('MLAST')->nullable();
            $table->string('FFIRST')->nullable();
            $table->string('FMI')->nullable();
            $table->string('FLAST')->nullable();
            $table->string('PRN')->nullable();
            $table->string('LCR')->nullable();
            $table->string('RSTAT')->nullable();
            $table->string('SEX')->nullable();
            $table->string('DATE')->nullable();
            $table->string('BOC')->nullable();
            $table->string('WGT')->nullable();
            $table->string('MNATL')->nullable();
            $table->string('TNC')->nullable();
            $table->string('TNAC')->nullable();
            $table->string('TNDC')->nullable();
            $table->string('MOCCP')->nullable();
            $table->string('MAGE')->nullable();
            $table->string('RESIDE')->nullable();
            $table->string('FNATL')->nullable();
            $table->string('FOCCP')->nullable();
            $table->string('FAGE')->nullable();
            $table->string('ATTD')->nullable();
            $table->string('TBIRTH')->nullable();
            $table->string('MRELI')->nullable();
            $table->string('FRELI')->nullable();
            $table->string('CSTAT')->nullable();
            $table->string('IND')->nullable();
            $table->string('PLACEMAR')->nullable();
            $table->string('DATEMAR')->nullable();
            $table->string('DREG')->nullable();
            $table->string('USER')->nullable();
            $table->date('DATEMOD')->nullable();
            $table->string('MODE')->nullable();
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
        Schema::dropIfExists('births');
    }
}
