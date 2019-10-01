@extends('layouts.base2')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        Oi
    </div>
@endsection

@section('maisinfo','Mais informaçoes')

@section('sidebar')
     @parent <!-- retorna o valor do pai -->
    <p>mais uma info</p>
@endsection

@component('alert')
    <strong>OPA</strong> Deu ruim!
@endcomponent

