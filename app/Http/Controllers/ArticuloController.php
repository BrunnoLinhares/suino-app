<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = Articulo::all();
        return view('articulo.create')->with('articulos',$articulos);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        $articulos->res_tec = $request->get('res_tec');
        $articulos->inspetor = $request->get('inspetor');
        $articulos->data = $request->get('data');
        $articulos->granja = $request->get('granja');
        $articulos->logradouro = $request->get('logradouro');
        $articulos->razao = $request->get('razao');
        $articulos->gta = $request->get('gta');
        $articulos->carrada = $request->get('carrada');
        $articulos->placa = $request->get('placa');
        $articulos->time_down = $request->get('time_down');
        $articulos->time_up = $request->get('time_up');
        $articulos->motorista = $request->get('motorista');
        $articulos->obs_trans = $request->get('obs_trans');
        $articulos->fraturas= $request->get('fraturas');
        $articulos->contusoes = $request->get('contusoes');
        $articulos->decubito = $request->get('decubito');
        $articulos->prolapso = $request->get('prolapso');
        $articulos->mortos = $request->get('mortos');
        $articulos->ferimentos = $request->get('ferimentos');
        $articulos->vesicula = $request->get('vesicula');
        $articulos->outros = $request->get('outros');
        $articulos->obs_rec_animais = $request->get('obs_rec_animais');
        $articulos->peso_vivo_01 = $request->get('peso_vivo_01');
        $articulos->score_01 = $request->get('score_01');
        $articulos->matriz_01 = $request->get('matriz_01');
        $articulos->peso_vivo_02 = $request->get('peso_vivo_02');
        $articulos->score_02 = $request->get('score_02');
        $articulos->matriz_02 = $request->get('matriz_02');
        $articulos->peso_vivo_03 = $request->get('peso_vivo_03');
        $articulos->score_03 = $request->get('score_03');
        $articulos->matriz_03 = $request->get('matriz_03');
        $articulos->peso_vivo_04 = $request->get('peso_vivo_04');
        $articulos->score_04 = $request->get('score_04');
        $articulos->matriz_04 = $request->get('matriz_04');
        $articulos->peso_vivo_05 = $request->get('peso_vivo_05');
        $articulos->score_05 = $request->get('score_05');
        $articulos->matriz_05 = $request->get('matriz_05');
        $articulos->peso_vivo_06 = $request->get('peso_vivo_06');
        $articulos->score_06 = $request->get('score_06');
        $articulos->matriz_06 = $request->get('matriz_06');
        $articulos->peso_vivo_07 = $request->get('peso_vivo_07');
        $articulos->score_07 = $request->get('score_07');
        $articulos->matriz_07 = $request->get('matriz_07');
        $articulos->peso_vivo_08 = $request->get('peso_vivo_08');
        $articulos->score_08 = $request->get('score_08');
        $articulos->matriz_08 = $request->get('matriz_08');
        $articulos->peso_vivo_09 = $request->get('peso_vivo_09');
        $articulos->score_09 = $request->get('score_09');
        $articulos->matriz_09 = $request->get('matriz_09');
        $articulos->peso_vivo_10 = $request->get('peso_vivo_10');
        $articulos->score_10 = $request->get('score_10');
        $articulos->matriz_10 = $request->get('matriz_10');
        $articulos->choque = $request->get('choque');
        $articulos->tabuas = $request->get('tabuas');
        $articulos->remo = $request->get('remo');
        $articulos->outros_cond = $request->get('outros_cond');
        $articulos->obs_descanso = $request->get('obs_descanso');
        $articulos->asperacao = $request->get('asperacao');
        $articulos->dieta = $request->get('dieta');
        $articulos->choque_1 = $request->get('choque_1');
        $articulos->tabuas_1 = $request->get('tabuas_1');
        $articulos->remo_1 = $request->get('remo_1');
        $articulos->outros_cond_1 = $request->get('outros_cond_1');
        $articulos->obs_cond = $request->get('obs_cond');
        $articulos->eletro_narcose = $request->get('eletro_narcose');
        $articulos->eletro_cursao = $request->get('eletro_cursao');
        $articulos->forma_sen_01 = $request->get('forma_sen_01');
        $articulos->calibracao_01 = $request->get('calibracao_01');
        $articulos->tenta_isensi_01 = $request->get('tenta_isensi_01');
        $articulos->tempo_san_01 = $request->get('tempo_san_01');
        $articulos->t_san_01 = $request->get('t_san_01');
        $articulos->descri_san_01 = $request->get('descri_san_01');
        $articulos->forma_sen_02 = $request->get('forma_sen_02');
        $articulos->calibracao_02 = $request->get('calibracao_02');
        $articulos->tenta_isensi_02 = $request->get('tenta_isensi_02');
        $articulos->tempo_san_02 = $request->get('tempo_san_02');
        $articulos->t_san_02 = $request->get('t_san_02');
        $articulos->descri_san_02 = $request->get('descri_san_02');
        $articulos->forma_sen_03 = $request->get('forma_sen_03');
        $articulos->calibracao_03 = $request->get('calibracao_03');
        $articulos->tenta_isensi_03 = $request->get('tenta_isensi_03');
        $articulos->t_san_03= $request->get('t_san_03');
        $articulos->descri_san_03 = $request->get('descri_san_03');
        $articulos->forma_sen_04 = $request->get('forma_sen_04');
        $articulos->calibracao_04 = $request->get('calibracao_04');
        $articulos->tenta_isensi_04 = $request->get('tenta_isensi_04');
        $articulos->tempo_san_04 = $request->get('tempo_san_04');
        $articulos->t_san_04 = $request->get('t_san_04');
        $articulos->descri_san_04 = $request->get('descri_san_04');
        $articulos->forma_sen_05 = $request->get('forma_sen_05');
        $articulos->calibracao_05 = $request->get('calibracao_05');
        $articulos->tenta_isensi_05 = $request->get('tenta_isensi_05');
        $articulos->tempo_san_05 = $request->get('tempo_san_05');
        $articulos->t_san_05 = $request->get('t_san_05');
        $articulos->descri_san_05 = $request->get('descri_san_05');
        $articulos->forma_sen_06 = $request->get('forma_sen_06');
        $articulos->calibracao_06 = $request->get('calibracao_06');
        $articulos->tenta_isensi_06 = $request->get('tenta_isensi_06');
        $articulos->tempo_san_06 = $request->get('tempo_san_06');
        $articulos->t_san_06 = $request->get('t_san_06');
        $articulos->descri_san_06 = $request->get('descri_san_06');
        $articulos->forma_sen_07 = $request->get('forma_sen_07');
        $articulos->calibracao_07 = $request->get('calibracao_07');
        $articulos->tenta_isensi_07 = $request->get('tenta_isensi_07');
        $articulos->tempo_san_07 = $request->get('tempo_san_07');
        $articulos->t_san_07 = $request->get('t_san_07');
        $articulos->descri_san_07 = $request->get('descri_san_07');
        $articulos->forma_sen_08 = $request->get('forma_sen_08');
        $articulos->calibracao_08 = $request->get('calibracao_08');
        $articulos->tenta_isensi_08 = $request->get('tenta_isensi_08');
        $articulos->tempo_san_08 = $request->get('tempo_san_08');
        $articulos->t_san_08 = $request->get('t_san_08');
        $articulos->descri_san_08 = $request->get('descri_san_08');
        $articulos->forma_sen_09 = $request->get('forma_sen_09');
        $articulos->calibracao_09 = $request->get('calibracao_09');
        $articulos->tenta_isensi_09 = $request->get('tenta_isensi_09');
        $articulos->tempo_san_09 = $request->get('tempo_san_09');
        $articulos->t_san_09 = $request->get('t_san_09');
        $articulos->descri_san_09 = $request->get('descri_san_09');
        $articulos->forma_sen_10 = $request->get('forma_sen_10');
        $articulos->calibracao_10 = $request->get('calibracao_10');
        $articulos->tenta_isensi_10 = $request->get('tenta_isensi_10');
        $articulos->tempo_san_10 = $request->get('tempo_san_10');
        $articulos->t_san_10 = $request->get('t_san_10');
        $articulos->descri_san_10 = $request->get('descri_san_10');
        $articulos->condenacao_01 = $request->get('condenacao_01');
        $articulos->pulmao_01=$request->get('pulmao_01');
        $articulos->baco_01= $request->get('baco_01');
        $articulos->lingua_01= $request->get('lingua_01');
        $articulos->estomogo_01= $request->get('estomogo_01');
        $articulos->coracao_01= $request->get('coracao_01');
        $articulos->rins_01= $request->get('rins_01');
        $articulos->figado_01= $request->get('figado_01');
        $articulos->cabeca_01= $request->get('cabeca_01');
        $articulos->instestino_01= $request->get('instestino_01');
        $articulos->condenacao_02 = $request->get('condenacao_02');
        $articulos->pulmao_02=$request->get('pulmao_02');
        $articulos->baco_02= $request->get('baco_02');
        $articulos->lingua_02= $request->get('lingua_02');
        $articulos->estomogo_02= $request->get('estomogo_02');
        $articulos->coracao_02= $request->get('coracao_02');
        $articulos->rins_02= $request->get('rins_02');
        $articulos->figado_02= $request->get('figado_02');
        $articulos->cabeca_02= $request->get('cabeca_02');
        $articulos->instestino_02= $request->get('instestino_02');
        $articulos->condenacao_03 = $request->get('condenacao_03');
        $articulos->pulmao_03= $request->get('pulmao_03');
        $articulos->baco_03= $request->get('baco_03');
        $articulos->lingua_03= $request->get('lingua_03');
        $articulos->estomogo_03= $request->get('estomogo_03');
        $articulos->coracao_03= $request->get('coracao_03');
        $articulos->rins_03= $request->get('rins_03');
        $articulos->figado_03= $request->get('figado_03');
        $articulos->cabeca_03= $request->get('cabeca_03');
        $articulos->instestino_03= $request->get('instestino_03');
        $articulos->condenacao_04 = $request->get('condenacao_04');
        $articulos->pulmao_04= $request->get('pulmao_04');
        $articulos->baco_04= $request->get('baco_04');
        $articulos->lingua_04= $request->get('lingua_04');
        $articulos->estomogo_04= $request->get('estomogo_04');
        $articulos->coracao_04= $request->get('coracao_04');
        $articulos->rins_04= $request->get('rins_04');
        $articulos->figado_04= $request->get('figado_04');
        $articulos->cabeca_04= $request->get('cabeca_04');
        $articulos->instestino_04= $request->get('instestino_04');
        $articulos->condenacao_05 = $request->get('condenacao_05');
        $articulos->pulmao_05=$request->get('pulmao_05');
        $articulos->baco_05= $request->get('baco_05');
        $articulos->lingua_05= $request->get('lingua_05');
        $articulos->estomogo_05= $request->get('estomogo_05');
        $articulos->coracao_05= $request->get('coracao_05');
        $articulos->rins_05= $request->get('rins_05');
        $articulos->figado_05= $request->get('figado_05');
        $articulos->cabeca_05= $request->get('cabeca_05');
        $articulos->instestino_05= $request->get('instestino_05');
        $articulos->condenacao_06 = $request->get('condenacao_06');
        $articulos->pulmao_06= $request->get('pulmao_06');
        $articulos->baco_06= $request->get('baco_06');
        $articulos->lingua_06= $request->get('lingua_06');
        $articulos->estomogo_06= $request->get('estomogo_06');
        $articulos->coracao_06= $request->get('coracao_06');
        $articulos->rins_06= $request->get('rins_06');
        $articulos->figado_06= $request->get('figado_06');
        $articulos->cabeca_06= $request->get('cabeca_06');
        $articulos->instestino_06= $request->get('instestino_06');
        $articulos->condenacao_07 = $request->get('condenacao_07');
        $articulos->pulmao_07= $request->get('pulmao_07');
        $articulos->baco_07= $request->get('baco_07');
        $articulos->lingua_07= $request->get('lingua_07');
        $articulos->estomogo_07= $request->get('estomogo_07');
        $articulos->coracao_07= $request->get('coracao_07');
        $articulos->rins_07= $request->get('rins_07');
        $articulos->figado_07= $request->get('figado_07');
        $articulos->cabeca_07= $request->get('cabeca_07');
        $articulos->instestino_07= $request->get('instestino_07');
        $articulos->condenacao_08 = $request->get('condenacao_08');
        $articulos->pulmao_08=$request->get('pulmao_08');
        $articulos->baco_08= $request->get('baco_08');
        $articulos->lingua_08= $request->get('lingua_08');
        $articulos->estomogo_08= $request->get('estomogo_08');
        $articulos->coracao_08= $request->get('coracao_08');
        $articulos->rins_08= $request->get('rins_08');
        $articulos->figado_08= $request->get('figado_08');
        $articulos->cabeca_08= $request->get('cabeca_08');
        $articulos->instestino_08= $request->get('instestino_08');
        $articulos->condenacao_09 = $request->get('condenacao_09');
        $articulos->pulmao_09=$request->get('pulmao_09');
        $articulos->baco_09= $request->get('baco_09');
        $articulos->lingua_09= $request->get('lingua_09');
        $articulos->estomogo_09= $request->get('estomogo_09');
        $articulos->coracao_09= $request->get('coracao_09');
        $articulos->rins_09= $request->get('rins_09');
        $articulos->figado_09= $request->get('figado_09');
        $articulos->cabeca_09= $request->get('cabeca_09');
        $articulos->instestino_09= $request->get('instestino_09');
        $articulos->condenacao_10 = $request->get('condenacao_10');
        $articulos->pulmao_10=$request->get('pulmao_10');
        $articulos->baco_10= $request->get('baco_10');
        $articulos->lingua_10= $request->get('lingua_10');
        $articulos->estomogo_10= $request->get('estomogo_10');
        $articulos->coracao_10= $request->get('coracao_10');
        $articulos->rins_10= $request->get('rins_10');
        $articulos->figado_10= $request->get('figado_10');
        $articulos->cabeca_10= $request->get('cabeca_10');
        $articulos->instestino_10= $request->get('instestino_10');
        $articulos->condenacao_carca_01= $request->get('condenacao_carca_01');
        $articulos->motivo_01= $request->get('motivo_01');
        $articulos->peso_quente_01= $request->get('peso_quente_01');
        $articulos->peso_48_01= $request->get('peso_48_01');
        $articulos->comprimento_01= $request->get('comprimento_01');
        $articulos->ph1_01= $request->get('ph1_01');
        $articulos->ph2_01= $request->get('ph2_01');
        $articulos->cor_01= $request->get('cor_01');
        $articulos->condenacao_carca_02= $request->get('condenacao_carca_02');
        $articulos->motivo_02= $request->get('motivo_02');
        $articulos->peso_quente_02= $request->get('peso_quente_02');
        $articulos->peso_48_02= $request->get('peso_48_02');
        $articulos->comprimento_02= $request->get('comprimento_02');
        $articulos->ph1_02= $request->get('ph1_02');
        $articulos->ph2_02= $request->get('ph2_02');
        $articulos->cor_02= $request->get('cor_02');
        $articulos->condenacao_carca_03= $request->get('condenacao_carca_03');
        $articulos->motivo_03= $request->get('motivo_03');
        $articulos->peso_quente_03= $request->get('peso_quente_03');
        $articulos->peso_48_03= $request->get('peso_48_03');
        $articulos->comprimento_03= $request->get('comprimento_03');
        $articulos->ph1_03= $request->get('ph1_03');
        $articulos->ph2_03= $request->get('ph2_03');
        $articulos->cor_03= $request->get('cor_03');
        $articulos->condenacao_carca_04= $request->get('condenacao_carca_04');
        $articulos->motivo_04= $request->get('motivo_04');
        $articulos->peso_quente_04= $request->get('peso_quente_04');
        $articulos->peso_48_04= $request->get('peso_48_04');
        $articulos->comprimento_04= $request->get('comprimento_04');
        $articulos->ph1_04= $request->get('ph1_04');
        $articulos->ph2_04= $request->get('ph2_04');
        $articulos->cor_04= $request->get('cor_04');
        $articulos->condenacao_carca_05= $request->get('condenacao_carca_05');
        $articulos->motivo_05= $request->get('motivo_05');
        $articulos->peso_quente_05= $request->get('peso_quente_05');
        $articulos->peso_48_05= $request->get('peso_48_05');
        $articulos->comprimento_05= $request->get('comprimento_05');
        $articulos->ph1_05= $request->get('ph1_05');
        $articulos->ph2_05= $request->get('ph2_05');
        $articulos->cor_05= $request->get('cor_05');
        $articulos->condenacao_carca_06= $request->get('condenacao_carca_06');
        $articulos->motivo_06= $request->get('motivo_06');
        $articulos->peso_quente_06= $request->get('peso_quente_06');
        $articulos->peso_48_06= $request->get('peso_48_06');
        $articulos->comprimento_06= $request->get('comprimento_06');
        $articulos->ph1_06= $request->get('ph1_06');
        $articulos->ph2_06= $request->get('ph2_06');
        $articulos->cor_06= $request->get('cor_06');
        $articulos->condenacao_carca_07= $request->get('condenacao_carca_07');
        $articulos->motivo_07= $request->get('motivo_07');
        $articulos->peso_quente_07= $request->get('peso_quente_07');
        $articulos->peso_48_07= $request->get('peso_48_07');
        $articulos->comprimento_07= $request->get('comprimento_07');
        $articulos->ph1_07= $request->get('ph1_07');
        $articulos->ph2_07= $request->get('ph2_07');
        $articulos->cor_07= $request->get('cor_07');
        $articulos->condenacao_carca_08= $request->get('condenacao_carca_08');
        $articulos->motivo_08= $request->get('motivo_08');
        $articulos->peso_quente_08= $request->get('peso_quente_08');
        $articulos->peso_48_08= $request->get('peso_48_08');
        $articulos->comprimento_08= $request->get('comprimento_08');
        $articulos->ph1_08= $request->get('ph1_08');
        $articulos->ph2_08= $request->get('ph2_08');
        $articulos->cor_08= $request->get('cor_08');
        $articulos->condenacao_carca_09= $request->get('condenacao_carca_09');
        $articulos->motivo_09= $request->get('motivo_09');
        $articulos->peso_quente_09= $request->get('peso_quente_09');
        $articulos->peso_48_09= $request->get('peso_48_09');
        $articulos->comprimento_09= $request->get('comprimento_09');
        $articulos->ph1_09= $request->get('ph1_09');
        $articulos->ph2_09= $request->get('ph2_09');
        $articulos->cor_09= $request->get('cor_09');
        $articulos->condenacao_carca_10= $request->get('condenacao_carca_10');
        $articulos->motivo_10= $request->get('motivo_10');
        $articulos->peso_quente_10= $request->get('peso_quente_10');
        $articulos->peso_48_10= $request->get('peso_48_10');
        $articulos->comprimento_10= $request->get('comprimento_10');
        $articulos->ph1_10= $request->get('ph1_10');
        $articulos->ph2_10= $request->get('ph2_10');
        $articulos->cor_10= $request->get('cor_10');
        $articulos->toucinho_01= $request->get('toucinho_01');
        $articulos->area_long_01= $request->get('area_long_01');
        $articulos->gordura_long_01= $request->get('gordura_long_01');
        $articulos->musculo_01= $request->get('musculo_01');
        $articulos->diametro_01= $request->get('diametro_01');
        $articulos->toucinho_02= $request->get('toucinho_02');
        $articulos->area_long_02= $request->get('area_long_02');
        $articulos->gordura_long_02= $request->get('gordura_long_02');
        $articulos->musculo_02= $request->get('musculo_02');
        $articulos->diametro_02= $request->get('diametro_02');
        $articulos->toucinho_03= $request->get('toucinho_03');
        $articulos->area_long_03= $request->get('area_long_03');
        $articulos->gordura_long_03= $request->get('gordura_long_03');
        $articulos->musculo_03= $request->get('musculo_03');
        $articulos->diametro_03= $request->get('diametro_03');
        $articulos->toucinho_04= $request->get('toucinho_04');
        $articulos->area_long_04= $request->get('area_long_04');
        $articulos->gordura_long_04= $request->get('gordura_long_04');
        $articulos->musculo_04= $request->get('musculo_04');
        $articulos->diametro_04= $request->get('diametro_04');
        $articulos->toucinho_05= $request->get('toucinho_05');
        $articulos->area_long_05= $request->get('area_long_05');
        $articulos->gordura_long_05= $request->get('gordura_long_05');
        $articulos->musculo_05= $request->get('musculo_05');
        $articulos->diametro_05= $request->get('diametro_05');
        $articulos->toucinho_06= $request->get('toucinho_06');
        $articulos->area_long_06= $request->get('area_long_06');
        $articulos->gordura_long_06= $request->get('gordura_long_06');
        $articulos->musculo_06= $request->get('musculo_06');
        $articulos->diametro_06= $request->get('diametro_06');
        $articulos->toucinho_07= $request->get('toucinho_07');
        $articulos->area_long_07= $request->get('area_long_07');
        $articulos->gordura_long_07= $request->get('gordura_long_07');
        $articulos->musculo_07= $request->get('musculo_07');
        $articulos->diametro_07= $request->get('diametro_07');
        $articulos->toucinho_08= $request->get('toucinho_08');
        $articulos->area_long_08= $request->get('area_long_08');
        $articulos->gordura_long_08= $request->get('gordura_long_08');
        $articulos->musculo_08= $request->get('musculo_08');
        $articulos->diametro_08= $request->get('diametro_08');
        $articulos->toucinho_09= $request->get('toucinho_09');
        $articulos->area_long_09= $request->get('area_long_09');
        $articulos->gordura_long_09= $request->get('gordura_long_09');
        $articulos->musculo_09= $request->get('musculo_09');
        $articulos->diametro_09= $request->get('diametro_09');
        $articulos->toucinho_10= $request->get('toucinho_10');
        $articulos->area_long_10= $request->get('area_long_10');
        $articulos->gordura_long_10= $request->get('gordura_long_10');
        $articulos->musculo_10= $request->get('musculo_10');
        $articulos->diametro_10= $request->get('diametro_10');
        $articulos->save();

        return redirect('/articulos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo/show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);

        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');

        $articulo->save();

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
