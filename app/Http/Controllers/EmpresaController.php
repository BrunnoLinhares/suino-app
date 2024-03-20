<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $empresas = Empresa::all();
        return view('empresa.index')->with('empresas',$empresas);
    }

    public function create()
    {
        $empresas = Empresa::all();
        return view('empresa.create')->with('empresa',$empresas);;
    }

    public function store(Request $request)
    {
        $empresas = new Empresa();

        $empresas->nome_fan = $request->get('nome_fan');
        $empresas->razao = $request->get('razao');
        $empresas->cnpj = $request->get('cnpj');
        $empresas->cep = $request->get('cep');
        $empresas->endereco = $request->get('endereco');
        $empresas->ins_esta = $request->get('ins_esta');
        $empresas->ins_muni = $request->get('ins_muni');
        $empresas->email = $request->get('email');
        $empresas->telefone = $request->get('telefone');
        $empresas->obs_empresa = $request->get('obs_empresa');

        $empresas->save();

        return redirect('/empresas');


    }


}
