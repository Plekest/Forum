@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalhes da dúvida {{ $support->id }} </h1>
@stop

@section('content')
    <ul>
        <li>Assunto: {{ $support->subject }}</li>
        <li>Status: {{ $support->status }}</li>
        <li>Descrição: {{ $support->body }}</li>
    </ul>

    <form action="{{ route('supports.destroy', $support->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type='submit'>Deletar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
