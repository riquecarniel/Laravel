@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Titulo</h1>
    <img src="/img/banner.jpg" alt="banner">
    @if(10 < 15)
    <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Pedro")
    <p>O nome é Pedro</p>
    @elseif($nome == "Henrique")
    <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissão }}</p>
    @else
    <p>O nome não é Henrique</p> 
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $nome }}</p>
    @endforeach

    @php /* Código PHP */
        $name = "João";
        echo $name;
    @endphp

    <a href="/produtos"><br>Tela de Produtos</a>

@endsection