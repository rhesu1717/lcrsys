<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('CT')->nullable();
            $table->string('PLACE')->nullable();
            $table->double('FOL')->nullable();
            $table->double('PAGE')->nullable();
            $table->string('G_FNAME')->nullable();
            $table->string('G_MI')->nullable();
            $table->string('G_LNAME')->nullable();
            $table->string('W_FNAME')->nullable();
            $table->string('W_MI')->nullable();
            $table->string('W_LNAME')->nullable();
            $table->string('G_FFIRST')->nullable();
            $table->string('G_FMI')->nullable();
            $table->string('G_FLAST')->nullable();
            $table->string('W_FFIRST')->nullable();
            $table->string('W_FMI')->nullable();
            $table->string('W_FLAST')->nullable();
            $table->string('G_MFIRST')->nullable();
            $table->string('G_MMI')->nullable();
            $table->string('G_MLAST')->nullable();
            $table->string('W_MFIRST')->nullable();
            $table->string('W_MMI')->nullable();
            $table->string('W_MLAST')->nullable();
            $table->string('G_PRN')->nullable();
            $table->string('W_PRN')->nullable();
            $table->string('LCR')->nullable();
            $table->string('REGST')->nullable();
            $table->double('G_AGE')->nullable();
            $table->double('W_AGE')->nullable();
            $table->string('G_CITI')->nullable();
            $table->string('W_CITI')->nullable();
            $table->string('G_RESI')->nullable();
            $table->string('W_RESI')->nullable();
            $table->string('G_RELI')->nullable();
            $table->string('W_RELI')->nullable();
            $table->string('G_STATUS')->nullable();
            $table->string('W_STATUS')->nullable();
            $table->string('DATE')->nullable();
            $table->string('CEREMONY')->nullable();
            $table->string('IND')->nullable();
            $table->string('DREG')->nullable();
            $table->string('USER')->nullable();
            $table->dateTime('DATEMOD')->nullable();
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
        Schema::dropIfExists('marriages');
    }
}
