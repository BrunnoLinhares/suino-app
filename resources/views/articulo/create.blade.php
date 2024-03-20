@extends('adminlte::page')

@section('title', 'App Suino')

@section('content_header')
<h1>Criar nova Remessa</h1>
@stop

@section('content')

    <form action="/articulos" method="POST">
    @csrf
    <div class="row">
                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="res_tec" class="form-label">Responsavel Técnico</label>
                    <input id="res_tec" name="res_tec" type="text" class="form-control" tabindex="1" placeholder="Responsavel Técnico" required>
                </div>
                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="inspetor" class="form-label">Inspetor(a)</label>
                    <input id="inspetor" name="inspetor" type="text" class="form-control" tabindex="2" placeholder="Inspetor(a)" required>
                </div>
                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="data" class="form-label">Data</label>
                    <input id="data" name="data" type="date" class="form-control " tabindex="3" required>
                </div>
                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="granja" class="form-label">Granja</label>
                    <input id="granja" name="granja" type="text" step="any" class="form-control" tabindex="3" placeholder="Granja" required>
                </div>

                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input id="logradouro" name="logradouro" type="text" step="any" class="form-control" tabindex="3" placeholder="Logradouro" required>
                </div>
                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="razao" class="form-label">Razão Social</label>
                    <input id="razao" name="razao" type="text" step="any" class="form-control" tabindex="3" placeholder="Razão Social" required>
                </div>
                <div class="mb-3 col-md-4 col-xs-4">
                    <label for="gta" class="form-label">GTA</label>
                    <input id="gta" name="gta" type="number" step="any" class="form-control" tabindex="3" placeholder="GTA" required>
                </div>
    </div>
        <h3>Transporte</h3>
    <div class="row">
                <div class="mb-3 col-md-3 col-xs-3">
                    <label for="carrada" class="form-label">Quantidade da Carrada</label>
                    <input id="carrada" name="carrada" type="number" step="any" class="form-control" tabindex="3" placeholder="Quantidade da Carrada" required>
                </div>
                <div class="mb-3 col-md-3 col-xs-3">
                    <label for="time_down">Horário de Saída</label>
                    <input id="time_down" name="time_down" type="time" step="any"  class="form-control" tabindex="3" required>
                </div>
                <div class="mb-3 col-md-3 col-xs-3">
                    <label for="time_up">Horário de Chegada</label>
                    <input id="time_up" name="time_up" type="time" class="form-control" name="hora_chegada" placeholder="time_up" required>
                </div>
                <div class="mb-3 col-md-3 col-xs-3">
                    <label for="placa" class="form-label">Placa do Veículo</label>
                    <input id="placa" name="placa" type="text" step="any"  class="form-control" tabindex="3" placeholder="Placa do Veículo" required>
                </div>
                <div class="mb-3 col-md-3 col-xs-3">
                    <label for="motorista" class="form-label">Motorista</label>
                    <input id="motorista" name="motorista" type="text" step="any"  class="form-control" tabindex="3" placeholder="Nome do Motorista" required>
                </div>
                <div class="mb-3 col-md-3 col-xs-3">
                    <label for="obs_trans" class="form-label">Observações</label>
                    <input id="obs_trans" name="obs_trans" type="text" step="any"  class="form-control" tabindex="3" placeholder="Observações sobre o transporte" required>
                </div>
    </div>
    <div>
        <h3>Recepção dos Animais</h3>
        <h5>Inspeção na Recepção</h5>
    <div class="row">
                <div class=" mb-3 col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="fraturas">Fraturas</label>
                        <select class="form-control" id="fraturas"data-size="5" data-live-search="true" data-width="100%" name="fraturas" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="contusoes">Contusões</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="contusoes" id ="contusoes" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="decubito">Decubito</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="decubito" id="decubito"required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class=" col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="prolapso">Prolapso</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="prolapso" id="prolapso"required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="mortos">Mortos</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="mortos" id="mortos"required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="ferimentos">Ferimentos</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="ferimentos" id="ferimentos" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="vesicula">Vesicula</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="vesicula" id="vesicula" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="outros">Outros</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="outros" id="outros" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <label for="obs_rec_animais" class="form-label">Observações</label>
                    <input id="obs_rec_animais" name="obs_rec_animais" type="text" step="any"  class="form-control" placeholder="Observações sobre a Recepção"  tabindex="3" required>
                </div>
    </div>
    <div>
    <h5>Animais Marcados</h5>
    </div>
                <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 ml-5" style="width:70%" >
                <thead class="bg-primary text-white">
                    <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Peso Vivo(kg)</th>
                    <th scope="col">Score Corporal</th>
                    <th scope="col">Matriz</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <input id="peso_vivo_01" name="peso_vivo_01" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_01" name="score_01" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_01" name="matriz_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>
                        <input id="peso_vivo_02" name="peso_vivo_02" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_02" name="score_02" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_02" name="matriz_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>
                        <input id="peso_vivo_03" name="peso_vivo_03" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_03" name="score_03" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_03" name="matriz_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>
                        <input id="peso_vivo_04" name="peso_vivo_04" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_04" name="score_04" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_04" name="matriz_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>
                        <input id="peso_vivo_05" name="peso_vivo_05" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_05" name="score_05" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_05" name="matriz_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>
                        <input id="peso_vivo_06" name="peso_vivo_06" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_06" name="score_06" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_06" name="matriz_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td>
                        <input id="peso_vivo_07" name="peso_vivo_07" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_07" name="score_07" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_07" name="matriz_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>8</td>
                        <td>
                        <input id="peso_vivo_08" name="peso_vivo_08" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_08" name="score_08" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_08" name="matriz_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>9</td>
                        <td>
                        <input id="peso_vivo_09" name="peso_vivo_09" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_09" name="score_09" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_09" name="matriz_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td>
                        <input id="peso_vivo_10" name="peso_vivo_10" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                            <input id="score_10" name="score_10" type="number" step="any"  class="form-control" tabindex="3" required>
                        </td>
                        <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="matriz_10" name="matriz_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
            </table>

    </div>
    <div>
    <h3>Condução Pocilgas de Descanso</h3>
    </div>
            <div class="row">
            <div class="col-md-2 col-xs-2">
                <div class="form-group">
                    <label for="outros">Tipo da Conducação</label>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="choque" id="choque" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Choque</option>
                            <option>Tabuas</option>
                            <option>Remo</option>
                            <option>Outros</option>
                    </select>
                </div>
            </div>
                <div class="col-md-2 col-xs-2">
                    <div class="form-group">
                        <label for="asperacao">Asperção</label>
                            <select id="asperacao" class="form-control" data-size="5" data-live-search="true" data-width="100%" name="asperacao" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                    </div>
                </div>
                <div class="col-md-3 col-xs-2">
                    <div class="form-group">
                        <label for="dieta">Tempo de Dieta Hidrica(H)</label>
                        <input id="dieta" name="dieta" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3 col-xs-2">
                    <label for="obs_cond" class="form-label">Observações</label>
                    <input id="obs_cond" name="obs_descanso" type="text" step="any"  class="form-control" tabindex="3" required>
                </div>
            </div>
    <div>
    <h3>Condução Pocilgas Pré Abate</h3>
    </div>
            <div class="row">
                <div class="col-md-3 col-xs-2">
                    <div class="form-group">
                        <label for="outros">Tipo da Conducação</label>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="choque_01" id="choque_01" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>Choque</option>
                                <option>Tabuas</option>
                                <option>Remo</option>
                                <option>Outros</option>
                        </select>
                    </div>
                </div>
                    <div class="col-md-3 col-xs-2">
                            <label for="obs_cond" class="form-label">Observações</label>
                            <input id="obs_cond" name="obs_cond" type="text" step="any"  class="form-control" tabindex="3" required>
                    </div>
            </div>

    <div>
    <h3>Insensibilizção e Sangria</h3>
    </div>
            <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 ml-5" style="width:auto" >
            <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Nº</th>
                <th scope="col">Forma de Insensibilização</th>
                <th scope="col">Calibração(A)</th>
                <th scope="col">Tentativa de Insensibilização</th>
                <th scope="col">Tempo p/ Sangria(s)</th>
                <th scope="col">T. Sangria(m)</th>
                <th scope="col">Descrição</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_01" name="forma_sen_01" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_01" name="calibracao_01" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_01" name="tenta_isensi_01" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_01" name="tempo_san_01" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_01" name="t_san_01" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_01" name="descri_san_01" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>02</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_02" name="forma_sen_02" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_02" name="calibracao_02" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_02" name="tenta_isensi_02" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_02" name="tempo_san_02" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_02" name="t_san_02" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_02" name="descri_san_02" required>
                    <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>03</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_03" name="forma_sen_03" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_03" name="calibracao_03" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_03" name="tenta_isensi_03" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_03" name="tempo_san_03" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_03" name="t_san_03" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_03" name="descri_san_03" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>04</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_04" name="forma_sen_04" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_04" name="calibracao_04" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_04" name="tenta_isensi_04" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_04" name="tempo_san_04" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_04" name="t_san_04" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_04" name="descri_san_04" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>05</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_05" name="forma_sen_05" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_05" name="calibracao_05" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_05" name="tenta_isensi_05" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_05" name="tempo_san_05" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_05" name="t_san_05" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_05" name="descri_san_05" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>06</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_06" name="forma_sen_06" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_06" name="calibracao_06" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_06" name="tenta_isensi_06" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_06" name="tempo_san_06" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_06" name="t_san_06" type="number" step="any"  class="form-control" tabindex="3"required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_06" name="descri_san_06" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>07</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_07" name="forma_sen_07" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_07" name="calibracao_07" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_07" name="tenta_isensi_07" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_07" name="tempo_san_07" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_07" name="t_san_07" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_07" name="descri_san_07" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>08</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_08" name="forma_sen_08" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_08" name="calibracao_08" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_08" name="tenta_isensi_08" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_08" name="tempo_san_08" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_08" name="t_san_08" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_08" name="descri_san_08" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>09</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_09" name="forma_sen_09" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_09" name="calibracao_09" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_09" name="tenta_isensi_09" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_09" name="tempo_san_09" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_09" name="t_san_09" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_09" name="descri_san_09" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>10</td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="forma_sen_10" name="forma_sen_10" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Eletro Narcose</option>
                        <option>2-Eletro Cursão</option>
                        <option>3-Outro</option>
                </select>
                </td>
                <td>
                    <input id="calibracao_10" name="calibracao_10" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tenta_isensi_10" name="tenta_isensi_10" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="tempo_san_10" name="tempo_san_10" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <input id="t_san_01" name="t_san_10" type="number" step="any"  class="form-control" tabindex="3" required>
                </td>
                <td>
                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="descri_san_10" name="descri_san_10" required>
                        <option selected disabled>Escolha uma opção</option>
                        <option>1-Totalmente Insensibilizado</option>
                        <option>2-Retorno a consciência</option>
                        <option>3-Tentativa de Fuga</option>
                        <option>4-Sinais de sofrimento</option>
                        <option>5-Animal Sangrado não estava totalmente insensibilizado</option>
                    </select>
                </td>
            </tr>
            </tbody>

    </table>
    <div class="mb-3 ">
        <label for="" class="form-label">Observações</label>
        <input id="obs_rec_animais" name="obs_rec_animais" type="text" step="any"  class="form-control" tabindex="3" required>
    </div>
    <div>
    <div>
    <h2>Fase de Inspeção Carcaça Quente</h2>
    <h5>Animais Marcados</h5>
    </div>

    <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 ml-5" style="width:auto" >
                        <thead class="bg-primary text-white">
            <tr>
            <th scope="col">Nº</th>
            <th scope="col">Condenação</th>
            <th scope="col">Pulmão</th>
            <th scope="col">Baço</th>
            <th scope="col">Lingua</th>
            <th scope="col">Estomogo</th>
            <th scope="col">Coração</th>
            <th scope="col">Rins</th>
            <th scope="col">Figado</th>
            <th scope="col">Cabeça</th>
            <th scope="col">Instestino</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                <td>01</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_01" name="condenacao_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_01" name="pulmao_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_01" name="baco_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_01" name="lingua_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_01" name="estomogo_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_01" name="coracao_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_01" name="rins_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_01" name="figado_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_01" name="cabeca_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_01" name="instestino_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>02</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_02" name="condenacao_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_02" name="pulmao_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_02" name="baco_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_02" name="lingua_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_02" name="estomogo_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_02" name="coracao_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_02" name="rins_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_02" name="figado_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_02" name="cabeca_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_02" name="instestino_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>03</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_03" name="condenacao_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_03" name="pulmao_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_03" name="baco_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_03" name="lingua_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_03" name="estomogo_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_03" name="coracao_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_03" name="rins_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_03" name="figado_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_03" name="cabeca_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_03" name="instestino_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>04</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_04" name="condenacao_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_04" name="pulmao_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_04" name="baco_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_04" name="lingua_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_04" name="estomogo_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_04" name="coracao_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_04" name="rins_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_04" name="figado_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_04" name="cabeca_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_04" name="instestino_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>05</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_05" name="condenacao_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_05" name="pulmao_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_05" name="baco_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_05" name="lingua_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_05" name="estomogo_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_05" name="coracao_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_05" name="rins_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_05" name="figado_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_05" name="cabeca_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_05" name="instestino_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>06</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_06" name="condenacao_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_06" name="pulmao_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_06" name="baco_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_06" name="lingua_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_06" name="estomogo_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_06" name="coracao_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_06" name="rins_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_06" name="figado_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_06" name="cabeca_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_06" name="instestino_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>07</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_07" name="condenacao_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_07" name="pulmao_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_07" name="baco_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_07" name="lingua_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_07" name="estomogo_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_07" name="coracao_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_07" name="rins_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_07" name="figado_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_07" name="cabeca_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_07" name="instestino_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>08</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_08" name="condenacao_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_08" name="pulmao_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_08" name="baco_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_08" name="lingua_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_08" name="estomogo_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_08" name="coracao_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_08" name="rins_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_08" name="figado_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_08" name="cabeca_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_08" name="instestino_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>09</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_09" name="condenacao_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_09" name="pulmao_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_09" name="baco_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_09" name="lingua_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_09" name="estomogo_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_09" name="coracao_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_09" name="rins_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_09" name="figado_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_09" name="cabeca_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_09" name="instestino_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
                <tr>
                <td>10</td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_10" name="condenacao_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>1-Sim</option>
                            <option>2-Não</option>
                        </select>
                </td>
                <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="pulmao_10" name="pulmao_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="baco_10" name="baco_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="lingua_10" name="lingua_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="estomogo_10" name="estomogo_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="coracao_10" name="coracao_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="rins_10" name="rins_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="figado_10" name="figado_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="cabeca_01" name="cabeca_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                <td>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="instestino_10" name="instestino_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>	ABCESSO	</option>
                            <option>	ADENITE	</option>
                            <option>	ASPIRAÇÃO DE SANGUE	</option>
                            <option>	ASPIRAÇÃÇÃO GASTRICA	</option>
                            <option>	ADERENCIA	</option>
                            <option>	ASPECTO REPUGNANTE	</option>
                            <option>	ATROFIA	</option>
                            <option>	BRONQUITE	</option>
                            <option>	BRUCELOSE	</option>
                            <option>	CALCULO	</option>
                            <option>	CIRROSE	</option>
                            <option>	CISTICERCOSE	</option>
                            <option>	CONGESTÃO	</option>
                            <option>	CONTAMONAÇÃO	</option>
                            <option>	ENTERITE	</option>
                            <option>	ENFISEMA	</option>
                            <option>	EDEMA	</option>
                            <option>	ESOFAGOSTAMOSE	</option>
                            <option>	ESTEATOSE	</option>
                            <option>	ESPLENOMEGALIA	</option>
                            <option>	GASTRITE	</option>
                            <option>	HIDATILOSE	</option>
                            <option>	HEPATITE	</option>
                            <option>	ISQUEMIA	</option>
                            <option>	NEFRITE	</option>
                            <option>	NEOPLASIA	</option>
                            <option>	PAREQUERATOSSE	</option>
                            <option>	PERICARDITE	</option>
                            <option>	PERIPATITE	</option>
                            <option>	PLEURIS	</option>
                            <option>	PNEUMONIA	</option>
                            <option>	PETEQUIAS HEMORRAGICAS	</option>
                            <option>	PEROTONITE	</option>
                            <option>	CISTO URINÁRIO	</option>
                            <option>	TELEANGIECTASIA	</option>
                            <option>	TUBERCULOSE	</option>
                            <option>	ÚCERA	</option>
                            <option>	PARASITOSE	</option>
                            <option>	OUTROS	</option>
                        </select>
                </td>
                </tr>
        </tbody>
    </table>
    <div>
    <h3>Carcaça</h3>
    </div>
    <div class="row">


            </div>
            <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 ml-5" style="width:auto" >
                <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Condenação da Carcaça</th>
                    <th scope="col">Motivo da Condenação</th>
                    <th scope="col">Peso da Carcaça Quente(kg)</th>
                    <th scope="col">Peso da Carcaça Fria(Kg)</th>
                    <th scope="col">Comprimento da Carcaça(cm)</th>
                    <th scope="col">ph Inicial (após abate)</th>
                    <th scope="col">ph Final (após 48 h)</th>
                    <th scope="col">Cor(L)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_01" name="condenacao_carca_01" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_01" name="motivo_01" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_01" name="peso_quente_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_01" name="peso_48_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_01" name="comprimento_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_01" name="ph1_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_01" name="ph2_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_01" name="cor_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>02</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_02" name="condenacao_carca_02" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_02" name="motivo_02" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_02" name="peso_quente_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_02" name="peso_48_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_02" name="comprimento_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_02" name="ph1_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_02" name="ph2_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_02" name="cor_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>03</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_03" name="condenacao_carca_03" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_03" name="motivo_03" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_03" name="peso_quente_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_03" name="peso_48_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_03" name="comprimento_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_02" name="ph1_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_02" name="ph2_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_02" name="cor_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>04</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_04" name="condenacao_carca_04" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_04" name="motivo_04" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_04" name="peso_quente_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_04" name="peso_48_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_04" name="comprimento_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_04" name="ph1_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_04" name="ph2_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_04" name="cor_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>05</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_05" name="condenacao_carca_05" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_05" name="motivo_05" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_05" name="peso_quente_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_05" name="peso_48_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_05" name="comprimento_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_05" name="ph1_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_05" name="ph2_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_05" name="cor_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>06</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_06" name="condenacao_carca_06" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_06" name="motivo_06" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_06" name="peso_quente_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_06" name="peso_48_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_06" name="comprimento_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_06" name="ph1_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_06" name="ph2_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_06" name="cor_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>07</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_07" name="condenacao_carca_07" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_07" name="motivo_07" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_07" name="peso_quente_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_07" name="peso_48_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_07" name="comprimento_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_07" name="ph1_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_07" name="ph2_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_07" name="cor_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>08</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_08" name="condenacao_carca_08" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_08" name="motivo_08" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_08" name="peso_quente_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_08" name="peso_48_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_08" name="comprimento_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_08" name="ph1_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_08" name="ph2_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_08" name="cor_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>09</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_09" name="condenacao_carca_09" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_09" name="motivo_09" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_09" name="peso_quente_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_09" name="peso_48_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_09" name="comprimento_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_09" name="ph1_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_09" name="ph2_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_09" name="cor_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" id="condenacao_carca_10" name="condenacao_carca_10" required>
                            <option selected disabled>Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </td>
                    <td>
                        <input id="motivo_10" name="motivo_10" type="text" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_quente_10" name="peso_quente_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="peso_48_10" name="peso_48_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="comprimento_10" name="comprimento_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph1_10" name="ph1_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="ph2_10" name="ph2_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="cor_10" name="cor_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                </tbody>
    </table>



        <div>
            <h3>Espessura da Aréa de Gordura</h3>

        </div>
        <div class="row">


            </div>
            <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 ml-5" style="width:auto" >
                <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Espessura do Toucinho (mm)</th>
                    <th scope="col">Área do Longissimus Dorsi (cm2)</th>
                    <th scope="col">Área da gordura do Longissimus Dorsi (cm2)</th>
                    <th scope="col">Profundidade do Musculo (mm)</th>
                    <th scope="col">Diametro da Seção Circular (cm)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>
                        <input id="toucinho_01" name="toucinho_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_01" name="musculo_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_01" name="diametro_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>02</td>
                    <td>
                        <input id="toucinho_02" name="toucinho_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_02" name="musculo_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_02" name="diametro_02" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>03</td>
                    <td>
                        <input id="toucinho_03" name="toucinho_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_03" name="musculo_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_03" name="diametro_03" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>04</td>
                    <td>
                        <input id="toucinho_04" name="toucinho_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_04" name="musculo_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_04" name="diametro_04" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>05</td>
                    <td>
                        <input id="toucinho_05" name="toucinho_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_05" name="musculo_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_05" name="diametro_05" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>06</td>
                    <td>
                        <input id="toucinho_06" name="toucinho_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_06" name="musculo_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_06" name="diametro_06" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>07</td>
                    <td>
                        <input id="toucinho_07" name="toucinho_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_07" name="musculo_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_07" name="diametro_07" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>08</td>
                    <td>
                        <input id="toucinho_08" name="toucinho_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_08" name="musculo_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_08" name="diametro_08" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>09</td>
                    <td>
                        <input id="toucinho_09" name="toucinho_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_09" name="musculo_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_09" name="diametro_09" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        <input id="toucinho_10" name="toucinho_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="area_long_01" name="area_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="gordura_long_01" name="gordura_long_01" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="musculo_10" name="musculo_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>
                    <td>
                        <input id="diametro_10" name="diametro_10" type="number" step="any"  class="form-control" tabindex="3">
                    </td>

                </tr>

    </table>

            </div>
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
