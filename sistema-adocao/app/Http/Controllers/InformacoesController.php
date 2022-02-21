<?php

namespace App\Http\Controllers;

use App\Models\Informacoes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Polyfill\Intl\Idn\Info;

class InformacoesController extends Controller
{
    public function index() {
        return view('informacoes.inicial');
    }

    public function formulario() {
        return view('informacoes.form');
    }

    public function insert(Request $request) {
        $id_usuario = Auth::id();

        $informacoes = new Informacoes();
        $informacoes = $informacoes->create($request->all());

        DB::table('users')
        ->where('id', $id_usuario)
        ->update(['id_informacoes' => $informacoes->id]);

        return Redirect::to('/home');
    }

    public function edit() {
        $id_usuario = Auth::id();

        $informacoes = User::findOrFail($id_usuario);
        $informacoes = Informacoes::findOrFail($informacoes->id_informacoes);
        return view('informacoes.form', ['informacoes' => $informacoes]);
    }

    public function editja(Request $request) {
        $id_usuario = Auth::id();
        $informacoes = User::findOrFail($id_usuario);

        $informacoes = Informacoes::findOrFail($informacoes->id_informacoes);
        $informacoes->update($request->all());
        
        return Redirect::to('/home');
    }
}
