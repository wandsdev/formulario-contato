<?php

namespace WandsDev\FormularioContato\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use WandsDev\FormularioContato\Models\FormularioContato;

class FormularioContatoController
{
    public function index()
    {
        return view('formulario-contato::contato');
    }
    public function enviarEmail(Request $request)
    {
        FormularioContato::create($request->all());
        return redirect(route('contato'))->with(['mensagem' => 'Obrigado! Seu e-mail foi enviado com sucesso.']);
    }
}
