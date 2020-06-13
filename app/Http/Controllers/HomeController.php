<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Dompdf\Dompdf;

class HomeController extends Controller
{
    public function index() 
    {
        $usuarios = Home::all();
        $total = Home::all()->count();
        return view('home/index', compact('usuarios', 'total'));
    }

    public function create() 
    {
        return view('home/create');
    }

    public function edit($id) 
    {
        $usuario = Home::find($id);
        return view('home/edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Home::find($id);
        $usuario->nome = $request->nome;
        $usuario->nascimento = $request->nascimento;
        $usuario->rg = $request->rg;
        $usuario->cpf = $request->cpf;
        $usuario->cep = $request->cep;
        $usuario->logradouro = $request->logradouro;
        $usuario->numero = $request->numero;
        $usuario->complemento = $request->complemento;
        if($usuario->save()) {
            return redirect()->route('home.index')->with('message', 'Usuário atualizado com sucesso!');
        } else {
            return redirect()->route('home.index')->with('message', 'Erro ao atualizar usuário');
        }
    }
    
    public function store(Request $request) 
    {
        $usuario = 
        $_COOKIE['nome'] = $request->nome;
        $_COOKIE['sobrenome'] = $request->sobrenome;
        $_COOKIE['cpf'] = $request->cpf;
        $_COOKIE['rg'] = $request->rg;
        $_COOKIE['nascimento'] = $request->nascimento;
        $_COOKIE['email'] = $request->email;
        $_COOKIE['telefone'] = $request->telefone;
        return $_COOKIE['sobrenome'];
    }

    public function show($id) 
    {
        //
    }


    public function destroy($id) 
    {
        $object = Home::find($id);
        if($object && $object->delete()) {
            echo "ok";
        } else {
            echo "not";
        }
    }

    public function teste($cpf) {
        $resultado = Home::where('cpf', $cpf)->get()->first();
        if($resultado == null) {
            echo "ok";
        } else {
            echo "not";
        }
    } 

    public function several_Destroy(Request $request) {
        print_r($request->ids);
        for($x=0;$x<sizeof($request->ids);$x++) {
            $id = $request->ids[$x];
            $registro = Home::find($id);
            if($registro && $registro->delete()) {
                echo "ok";
            } else {
                echo "not";
            }
        }
    }


    public function busca($busca) {
        $resultado = Home::where('nome', $busca)->get()->first();
        return $resultado;
    }

}
