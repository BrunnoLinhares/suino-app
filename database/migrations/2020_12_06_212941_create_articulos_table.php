<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('res_tec',50);
            $table->string('inspetor',50);
            $table->date('data');
            $table->string('granja',50);
            $table->string('logradouro',50);
            $table->string('razao',50);
            $table->string('gta',50);
            $table->string('carrada',50);
            $table->string('placa',50);
            $table->string('time_down',50);
            $table->string('time_up',50);
            $table->string('motorista',50);
            $table->string('obs_trans',50);
            $table->string('fraturas',50);
            $table->string('contusoes',50);
            $table->string('decubito',50);
            $table->string('prolapso',50);
            $table->string('mortos',50);
            $table->string('ferimentos',50);
            $table->string('vesicula',50);
            $table->string('outros',50);
            $table->string('obs_rec_animais',50);
            $table->string('peso_vivo_01',03);
            $table->string('score_01',03);
            $table->string('matriz_01',03);
            $table->string('peso_vivo_02',03);
            $table->string('score_02',03);
            $table->string('matriz_02',03);
            $table->string('peso_vivo_03',03);
            $table->string('score_03',03);
            $table->string('matriz_03',03);
            $table->string('peso_vivo_04',03);
            $table->string('score_04',03);
            $table->string('matriz_04',03);
            $table->string('peso_vivo_05',03);
            $table->string('score_05',03);
            $table->string('matriz_05',03);
            $table->string('peso_vivo_06',03);
            $table->string('score_06',03);
            $table->string('matriz_06',03);
            $table->string('peso_vivo_07',03);
            $table->string('score_07',03);
            $table->string('matriz_07',03);
            $table->string('peso_vivo_08',03);
            $table->string('score_08',03);
            $table->string('matriz_08',03);
            $table->string('peso_vivo_09',03);
            $table->string('score_09',03);
            $table->string('matriz_09',03);
            $table->string('peso_vivo_10',03);
            $table->string('score_10',03);
            $table->string('matriz_10',03);
            $table->string('choque',50);
            $table->string('tabuas',50);
            $table->string('remo',50);
            $table->string('outros_cond',50);
            $table->string('asperacao',50);
            $table->string('dieta',50);
            $table->string('choque_1',50);
            $table->string('tabuas_1',50);
            $table->string('remo_1',50);
            $table->string('outros_cond_1',50);
            $table->string('obs_cond',50);
            $table->string('eletro_narcose',50);
            $table->string('eletro_cursao',50);
            $table->string('forma_sen_01',50);
            $table->string('calibracao_01',50);
            $table->string('tenta_isensi_01',50);
            $table->string('tempo_san_01',50);
            $table->string('t_san_01',50);
            $table->string('descri_san_01',50);
            $table->string('forma_sen_02',50);
            $table->string('calibracao_02',50);
            $table->string('tenta_isensi_02',50);
            $table->string('tempo_san_02',50);
            $table->string('t_san_02',50);
            $table->string('descri_san_02',50);
            $table->string('forma_sen_03',50);
            $table->string('calibracao_03',50);
            $table->string('tenta_isensi_03',50);
            $table->string('t_san_03',50);
            $table->string('descri_san_03',50);
            $table->string('forma_sen_04',50);
            $table->string('calibracao_04',50);
            $table->string('tenta_isensi_04',50);
            $table->string('tempo_san_04',50);
            $table->string('t_san_04',50);
            $table->string('descri_san_04',50);
            $table->string('forma_sen_05',50);
            $table->string('calibracao_05',50);
            $table->string('tenta_isensi_05',50);
            $table->string('tempo_san_05',50);
            $table->string('t_san_05',50);
            $table->string('descri_san_05',50);
            $table->string('forma_sen_06',50);
            $table->string('calibracao_06',50);
            $table->string('tenta_isensi_06',50);
            $table->string('tempo_san_06',50);
            $table->string('t_san_06',50);
            $table->string('descri_san_06',50);
            $table->string('forma_sen_07',50);
            $table->string('calibracao_07',50);
            $table->string('tenta_isensi_07',50);
            $table->string('tempo_san_07',50);
            $table->string('t_san_07',50);
            $table->string('descri_san_07',50);
            $table->string('forma_sen_08',50);
            $table->string('calibracao_08',50);
            $table->string('tenta_isensi_08',50);
            $table->string('tempo_san_08',50);
            $table->string('t_san_08',50);
            $table->string('descri_san_08',50);
            $table->string('forma_sen_09',50);
            $table->string('calibracao_09',50);
            $table->string('tenta_isensi_09',50);
            $table->string('tempo_san_09',50);
            $table->string('t_san_09',50);
            $table->string('descri_san_09',50);
            $table->string('forma_sen_10',50);
            $table->string('calibracao_10',50);
            $table->string('tenta_isensi_10',50);
            $table->string('tempo_san_10',50);
            $table->string('t_san_10',50);
            $table->string('descri_san_10',50);
            $table->string('condenacao_01',50);
            $table->string('pulmao_01',50);
            $table->string('baco_01',50);
            $table->string('lingua_01',50);
            $table->string('estomogo_01',50);
            $table->string('coracao_01',50);
            $table->string('rins_01',50);
            $table->string('figado_01',50);
            $table->string('cabeca_01',50);
            $table->string('instestino_01',50);
            $table->string('condenacao_02',50);
            $table->string('pulmao_02',50);
            $table->string('baco_02',50);
            $table->string('lingua_02',50);
            $table->string('estomogo_02',50);
            $table->string('coracao_02',50);
            $table->string('rins_02',50);
            $table->string('figado_02',50);
            $table->string('cabeca_02',50);
            $table->string('instestino_02',50);
            $table->string('condenacao_03',50);
            $table->string('pulmao_03',50);
            $table->string('baco_03',50);
            $table->string('lingua_03',50);
            $table->string('estomogo_03',50);
            $table->string('coracao_03',50);
            $table->string('rins_03',50);
            $table->string('figado_03',50);
            $table->string('cabeca_03',50);
            $table->string('instestino_03',50);
            $table->string('condenacao_04',50);
            $table->string('pulmao_04',50);
            $table->string('baco_04',50);
            $table->string('lingua_04',50);
            $table->string('estomogo_04',50);
            $table->string('coracao_04',50);
            $table->string('rins_04',50);
            $table->string('figado_04',50);
            $table->string('cabeca_04',50);
            $table->string('instestino_04',50);
            $table->string('condenacao_05',50);
            $table->string('pulmao_05',50);
            $table->string('baco_05',50);
            $table->string('lingua_05',50);
            $table->string('estomogo_05',50);
            $table->string('coracao_05',50);
            $table->string('rins_05',50);
            $table->string('figado_05',50);
            $table->string('cabeca_05',50);
            $table->string('instestino_05',50);
            $table->string('condenacao_06',50);
            $table->string('pulmao_06',50);
            $table->string('baco_06',50);
            $table->string('lingua_06',50);
            $table->string('estomogo_06',50);
            $table->string('coracao_06',50);
            $table->string('rins_06',50);
            $table->string('figado_06',50);
            $table->string('cabeca_06',50);
            $table->string('instestino_06',50);
            $table->string('condenacao_07',50);
            $table->string('pulmao_07',50);
            $table->string('baco_07',50);
            $table->string('lingua_07',50);
            $table->string('estomogo_07',50);
            $table->string('coracao_07',50);
            $table->string('rins_07',50);
            $table->string('figado_07',50);
            $table->string('cabeca_07',50);
            $table->string('instestino_07',50);
            $table->string('condenacao_08',50);
            $table->string('pulmao_08',50);
            $table->string('baco_08',50);
            $table->string('lingua_08',50);
            $table->string('estomogo_08',50);
            $table->string('coracao_08',50);
            $table->string('rins_08',50);
            $table->string('figado_08',50);
            $table->string('cabeca_08',50);
            $table->string('instestino_08',50);
            $table->string('condenacao_09',50);
            $table->string('pulmao_09',50);
            $table->string('baco_09',50);
            $table->string('lingua_09',50);
            $table->string('estomogo_09',50);
            $table->string('coracao_09',50);
            $table->string('rins_09',50);
            $table->string('figado_09',50);
            $table->string('cabeca_09',50);
            $table->string('instestino_09',50);
            $table->string('condenacao_10',50);
            $table->string('pulmao_10',50);
            $table->string('baco_10',50);
            $table->string('lingua_10',50);
            $table->string('estomogo_10',50);
            $table->string('coracao_10',50);
            $table->string('rins_10',50);
            $table->string('figado_10',50);
            $table->string('cabeca_10',50);
            $table->string('instestino_10',50);
            $table->string('condenacao_carca_01',50);
            $table->string('motivo_01',50);
            $table->string('peso_quente_01',50);
            $table->string('peso_48_01',50);
            $table->string('comprimento_01',50);
            $table->string('ph1_01',50);
            $table->string('ph2_01',50);
            $table->string('cor_01',50);
            $table->string('condenacao_carca_02',50);
            $table->string('motivo_02',50);
            $table->string('peso_quente_02',50);
            $table->string('peso_48_02',50);
            $table->string('comprimento_02',50);
            $table->string('ph1_02',50);
            $table->string('ph2_02',50);
            $table->string('cor_02',50);
            $table->string('condenacao_carca_03',50);
            $table->string('motivo_03',50);
            $table->string('peso_quente_03',50);
            $table->string('peso_48_03',50);
            $table->string('comprimento_03',50);
            $table->string('ph1_03',50);
            $table->string('ph2_03',50);
            $table->string('cor_03',50);
            $table->string('condenacao_carca_04',50);
            $table->string('motivo_04',50);
            $table->string('peso_quente_04',50);
            $table->string('peso_48_04',50);
            $table->string('comprimento_04',50);
            $table->string('ph1_04',50);
            $table->string('ph2_04',50);
            $table->string('cor_04',50);
            $table->string('condenacao_carca_05',50);
            $table->string('motivo_05',50);
            $table->string('peso_quente_05',50);
            $table->string('peso_48_05',50);
            $table->string('comprimento_05',50);
            $table->string('ph1_05',50);
            $table->string('ph2_05',50);
            $table->string('cor_05',50);
            $table->string('condenacao_carca_06',50);
            $table->string('motivo_06',50);
            $table->string('peso_quente_06',50);
            $table->string('peso_48_06',50);
            $table->string('comprimento_06',50);
            $table->string('ph1_06',50);
            $table->string('ph2_06',50);
            $table->string('cor_06',50);
            $table->string('condenacao_carca_07',50);
            $table->string('motivo_07',50);
            $table->string('peso_quente_07',50);
            $table->string('peso_48_07',50);
            $table->string('comprimento_07',50);
            $table->string('ph1_07',50);
            $table->string('ph2_07',50);
            $table->string('cor_07',50);
            $table->string('condenacao_carca_08',50);
            $table->string('motivo_08',50);
            $table->string('peso_quente_08',50);
            $table->string('peso_48_08',50);
            $table->string('comprimento_08',50);
            $table->string('ph1_08',50);
            $table->string('ph2_08',50);
            $table->string('cor_08',50);
            $table->string('condenacao_carca_09',50);
            $table->string('motivo_09',50);
            $table->string('peso_quente_09',50);
            $table->string('peso_48_09',50);
            $table->string('comprimento_09',50);
            $table->string('ph1_09',50);
            $table->string('ph2_09',50);
            $table->string('cor_09',50);
            $table->string('condenacao_carca_10',50);
            $table->string('motivo_10',50);
            $table->string('peso_quente_10',50);
            $table->string('peso_48_10',50);
            $table->string('comprimento_10',50);
            $table->string('ph1_10',50);
            $table->string('ph2_10',50);
            $table->string('cor_10',50);
            $table->string('toucinho_01',03);
            $table->string('area_long_01',03);
            $table->string('gordura_long_01',03);
            $table->string('musculo_01',03);
            $table->string('diametro_01',03);
            $table->string('toucinho_02',03);
            $table->string('area_long_02',03);
            $table->string('gordura_long_02',03);
            $table->string('musculo_02',03);
            $table->string('diametro_02',03);
            $table->string('toucinho_03',03);
            $table->string('area_long_03',03);
            $table->string('gordura_long_03',03);
            $table->string('musculo_03',03);
            $table->string('diametro_03',03);
            $table->string('toucinho_04',03);
            $table->string('area_long_04',03);
            $table->string('gordura_long_04',03);
            $table->string('musculo_04',03);
            $table->string('diametro_04',03);
            $table->string('toucinho_05',03);
            $table->string('area_long_05',03);
            $table->string('gordura_long_05',03);
            $table->string('musculo_05',03);
            $table->string('diametro_05',03);
            $table->string('toucinho_06',03);
            $table->string('area_long_06',03);
            $table->string('gordura_long_06',03);
            $table->string('musculo_06',03);
            $table->string('diametro_06',03);
            $table->string('toucinho_07',03);
            $table->string('area_long_07',03);
            $table->string('gordura_long_07',03);
            $table->string('musculo_07',03);
            $table->string('diametro_07',03);
            $table->string('toucinho_08',03);
            $table->string('area_long_08',03);
            $table->string('gordura_long_08',03);
            $table->string('musculo_08',03);
            $table->string('diametro_08',03);
            $table->string('toucinho_09',03);
            $table->string('area_long_09',03);
            $table->string('gordura_long_09',03);
            $table->string('musculo_09',03);
            $table->string('diametro_09',03);
            $table->string('toucinho_10',03);
            $table->string('area_long_10',03);
            $table->string('gordura_long_10',03);
            $table->string('musculo_10',03);
            $table->string('diametro_10',03);
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
        Schema::dropIfExists('articulos');
    }
}
