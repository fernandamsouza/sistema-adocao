<?php

namespace App\Http\Controllers;

use App\Models\Animai;
use App\Models\Situacoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnimaisController extends Controller
{
    public function index(Request $request) {
        $id_situacao = null;
        $id_tipo     = null;

        $input = $request->collect();
        $input = json_decode($input, true);


        if (array_key_exists("situacao", $input)) {
            $id_situacao = DB::table('situacoes')->where('status', $input["situacao"])->value('id');
        }

        if (array_key_exists("tipo", $input)) {
            $id_tipo = DB::table('tipos')->where('tipo', $input["tipo"])->value('id');
        }

        $animais = DB::table('animais');

        if (!is_null($id_situacao)) {
            $animais->where('id_situacao', $id_situacao);
        }

        if (!is_null($id_tipo)) {
            $animais->where('id_tipo', $id_tipo);
        }

        $resultado = $animais->get(['*']);

        return view('animais.list', ['animais' => $resultado]);
    }

    public function cadastrar() {
        return view('animais.cadastrar');
    }

    public function add(Request $request) {
        $input = $request->collect();
        $input = json_decode($input, true);

        $id_usuario = Auth::id();

        if (array_key_exists("situacao", $input)) {
            $id_situacao = DB::table('situacoes')->where('status', $input["situacao"])->value('id');
        }

        if (array_key_exists("tipo", $input)) {
            $id_tipo = DB::table('tipos')->where('tipo', $input["tipo"])->value('id');
        }

        if (array_key_exists("porte", $input)) {
            $id_porte = DB::table('portes')->where('porte', $input["porte"])->value('id');
        }

        $animais = DB::table('animais')->insert([
            'id_usuario' => $id_usuario,
            'id_situacao' => $id_situacao,
            'id_tipo' => $id_tipo,
            'id_exclusao' => '2',
            'id_porte' => $id_porte,
            'name' => $input["name"],
            'idade' => $input["idade"],
            'descricao' => $input["descricao"],
            'castrado' => $input["castrado"],
            'vacinas' => $input["vacinas"],
            'preco' => $input["preco"],
            'sexo' => $input["sexo"],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return view('animais.sucesso');
    }
}
