<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        
    $nome = "Henrique";
    $idade = 35;

    $arr = [1,2,3,4,5];

    $nomes = ["Matheus", "Maria", "João", "Saulo"];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissão' => "Desenvolvedor",
        'arr' => $arr,
        'nomes' => $nomes
    ]);
    }

    public function create() {
        return view('events.create');
}
}
