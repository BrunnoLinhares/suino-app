<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fan',50);
            $table->string('razao',50);
            $table->string('cnpj',14);
            $table->string('cep',50);
            $table->string('endereco',50);
            $table->string('ins_esta',50);
            $table->string('ins_muni',50);
            $table->string('email',50);
            $table->string('telefone',50);
            $table->string('obs_empresa',150);

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
        Schema::dropIfExists('empresas');
    }
}
