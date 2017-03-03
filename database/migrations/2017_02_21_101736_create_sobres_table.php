<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSobresTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sobres', function(Blueprint $table) {
            $table->increments('id');
            $table->text('principal')->nullable();
            $table->text('missao')->nullable();
            $table->text('visao')->nullable();
            $table->string('img')->default('null')->nullable();
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
		Schema::drop('sobres');
	}

}
