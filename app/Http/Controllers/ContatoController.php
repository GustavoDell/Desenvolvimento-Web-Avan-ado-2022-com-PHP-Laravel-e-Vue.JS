<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato (Request $request) 
    {
        $motivo_contatos = MotivoContato::all();

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

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) 
    {
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no maximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',

            'email.email' => 'O email informado não é valido',

            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback); // validate metodo que valida os inputs dos campos

        SiteContato::create($request->all()); // create segue a mesma base do metodo fill(), porem não é preciso do metodo save()
        return redirect()->route('site.index');
    }
}
