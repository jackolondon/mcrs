<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneMetzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('plane_metzs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('numero', 255);
			$table->time('horaire');
			$table->date('date');
			$table->string('destination', 255);
			$table->string('note', 25)->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plane_metzs');
    }
}
