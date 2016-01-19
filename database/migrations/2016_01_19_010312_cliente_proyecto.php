<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClienteProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('proyecto_id')->index()->unsigned();
            $table->integer('cliente_id')->index()->unsigned();

        });

        Schema::table('cliente_proyecto', function(Blueprint $table)
        {
            $table->foreign("proyecto_id")
                ->references("id")
                ->on("proyectos")
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign("cliente_id")
                ->references("id")
                ->on("clientes")
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente_proyecto');
    }
}
