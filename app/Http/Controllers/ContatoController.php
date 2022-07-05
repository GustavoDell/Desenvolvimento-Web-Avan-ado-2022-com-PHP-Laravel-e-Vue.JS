<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato (Request $request) 
    {
        // echo '<pre>';
        // print_r($request->all()); //retona todos parametros do formulario com base um array associativo
        // echo '</pre>';
        // echo $request->input('nome');
        // echo '<br>';
        // echo $request->input('email');

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // print_r($contato->getAttributes());
        // $contato->save();

        //$contato = new SiteContato();
        //$contato->fill($request->all()); // fill preenche os objetos do atributo com base no array associativo
        //$contato->create($request->all()); // create segue a mesma base do metodo fill(), porem não é preciso do metodo save()
        //$contato->save();
        //print_r($contato->getAttributes());

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }

    public function salvar(Request $request) 
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]); // validate metodo que valida os inputs dos campos
        //SiteContato::create($request->all()); // create segue a mesma base do metodo fill(), porem não é preciso do metodo save()
    }
}
