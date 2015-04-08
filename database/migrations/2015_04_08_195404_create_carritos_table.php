<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carritos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehiculo_id')->unsigned();
			$table->integer('accesorio_id')->unsigned();
			$table->integer('compra_id')->unsigned();
			$table->integer('usuario_id')->unsigned();
			$table->integer('suma_parcial');

			//$table->foreign('vehiculo_id')->refences('id')
			  //    ->on('vehiculos');

		//	$table->foreign('accesorio_id')->refences('id')
		//	      ->on('accesorios');

		//	$table->foreign('compra_id')->refences('id')
		//	      ->on('compras');

		//	$table->foreign('usuario_id')->refences('id')
		//	      ->on('usuarios');

		//	$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carritos');
	}

}
