<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deaths', function (Blueprint $table) {
            $table->id();
            $table->string('CT')->nullable();
            $table->string('PLACE')->nullable();
            $table->string('FOLIO_NO')->nullable();
            $table->string('PAGE_NO')->nullable();
            $table->string('FIRST')->nullable();
            $table->string('MI')->nullable();
            $table->string('LAST')->nullable();
            $table->string('PRN')->nullable();
            $table->string('LCR_NO')->nullable();
            $table->string('REG_STAT')->nullable();
            $table->string('SEX')->nullable();
            $table->string('RELIG')->nullable();
            $table->string('AGE')->nullable();
            $table->string('DATEX')->nullable();
            $table->string('NATLTY')->nullable();
            $table->string('URES')->nullable();
            $table->string('CS')->nullable();
            $table->string('UOCC')->nullable();
            $table->string('CAUSEX')->nullable();
            $table->string('MED_ATT')->nullable();
            $table->string('MAGE')->nullable();
            $table->string('METHOD')->nullable();
            $table->string('LENGTH')->nullable();
            $table->string('TYPE')->nullable();
            $table->string('CAUSE1')->nullable();
            $table->string('CAUSE2')->nullable();
            $table->string('IND')->nullable();
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
        Schema::dropIfExists('deaths');
    }
}
