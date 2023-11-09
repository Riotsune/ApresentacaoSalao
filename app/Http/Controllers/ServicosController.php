<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicosController extends Controller
{
    public function index(Request $request){
        //usando facades DB: $servicos = DB::select('SELECT * FROM servicos;'); 
        //return view('servicos.index')->with('servicos', $servicos);
        $servicos = Servicos::all();

        return view('servicos.index')->with('servicos', $servicos);
    }

    public function create(){
        return view('servicos.create');
    }

    public function store(Request $request){
        //usando facades DB: $tipoServico = $request->input('tipo');
        //$nomeServico = $request->input('nome');
        //$descricaoServico = $request->input('descricao');
        //$imagemServico = $request->input('imagem');
        //$precoServico = $request->input('preco');
        //DB::insert('INSERT INTO servicos (tipo,nome,descricao,imagem,preco) VALUES (?,?,?,?,?)',[$tipoServico, $nomeServico, $descricaoServico, $imagemServico, $precoServico]);
        //    return redirect('/servicos');
        
        $tipoServico = $request->input('tipo');
        $nomeServico = $request->input('nome');
        $descricaoServico = $request->input('descricao');
        $imagemPath = $request->file('imagem')->store('servicos_imagem', 'public');
        $request->$imagemPath = $imagemPath;
        $precoServico = $request->input('preco');

        $servico = new Servicos();
        $servico->tipo = $tipoServico;
        $servico->nome = $nomeServico;
        $servico->descricao = $descricaoServico;
        $servico->imagem = $imagemPath;
        $servico->preco = $precoServico;
        $servico->save();
        return redirect('/servicos');
    }
}