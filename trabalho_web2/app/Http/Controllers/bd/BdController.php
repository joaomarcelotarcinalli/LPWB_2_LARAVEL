<?php

namespace App\Http\Controllers\bd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login; // Lembre-se da letra maiúscula em "Login"


class BdController extends Controller
{
    public function NovoLogin(Request $request) 
    {
        //$_POST['cat_nome']
        $nome = $request->input("usuario");
        $senha = $request->input("senha");

        $nova = new login;
        $nova->usuario = $nome;
        $nova->senha = $senha;
        $nova->save();

        return redirect('/');

        //INSERT INTO categoria (id, cat_nome, cat_descricao)
        // VALUES ( ???, 'VALOR', 'DESCRICAO')
    }
}
