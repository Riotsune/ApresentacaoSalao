<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Servicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicosController extends Controller{
    public function index(){
        return Servicos::all();
    }

    public function store(Request $request){
        
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
    }

    //fazer path da imagem e gravar o caminho para a chamda no update ou get dps.

    public function destroy($id){
        $servico = Servicos::find($id);
        $servico->delete();
    }

    public function update(Request $request, $id){
        $servico = Servicos::find($id);
    
        $servico->tipo = $request->input('tipo');
        $servico->nome = $request->input('nome');
        $servico->descricao = $request->input('descricao');
        $servico->imagem = $request->input('imagem');
        $servico->preco = $request->input('preco');
        $servico->save();
    }
}

