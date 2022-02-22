<?php

namespace App\Http\Controllers;

use App\Models\Animai;
use App\Models\Situacoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

        $animais->where('id_exclusao', 2);

        $resultado = $animais->get(['*']);

        foreach ($resultado as $key => $value) {
            $id_usuario = $value->id_usuario;

            $usuario = DB::table('users')->where('id', $id_usuario)->get();

            $id_informacoes = $usuario[0]->id_informacoes;

            $informacoes = DB::table('informacoes')->where('id', $id_informacoes)->get();

            if (count($informacoes) > 0) {
                $cidade = $informacoes[0]->cidade;
                $estado = $informacoes[0]->estado;
                $pais   = $informacoes[0]->pais;
                $telefone   = $informacoes[0]->telefone_primario;
                $imageURL = 'uploads/' . $value->foto;
                
                $resultado[$key]->foto     = $imageURL;
                $resultado[$key]->telefone = $telefone;
                $resultado[$key]->cidade = $cidade;
                $resultado[$key]->estado = $estado;
                $resultado[$key]->pais   = $pais;
            }
            $resultado[$key]->usu_atual = Auth::user()->id;
        }

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

        $filename = $_FILES["foto"]["name"];
        $tempname = $_FILES["foto"]["tmp_name"]; 
        $folder = "uploads/".$filename;


        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
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
            'updated_at' => date("Y-m-d H:i:s"),
            'foto' => $filename
        ]);

        return view('animais.sucesso');
    }

    public function excluir($id) {

        DB::table('animais')
        ->where('id', $id)
        ->update(['id_exclusao' => '1']);

        return view('animais.sucesso');
    }
}
