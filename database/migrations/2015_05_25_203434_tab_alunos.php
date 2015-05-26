<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabAlunos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tab_alunos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('endereco', 50);
            $table->string('bairro', 30);
            $table->string('cidade', 30);
            $table->char('uf', 2);
            $table->integer('telefone');
            $table->string('email');
            $table->date('datanascimento');
            $table->decimal('peso', 10,2);
            $table->decimal('altura', 10,2);
            $table->text('obs');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tab_alunos');
	}

}
