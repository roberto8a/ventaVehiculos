<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoriosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accesorios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('imagen');
			$table->enum('tipo',['Llanta','Rin','Asiento']);
			$table->integer('precio');
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
		Schema::drop('accesorios');
	}

}
