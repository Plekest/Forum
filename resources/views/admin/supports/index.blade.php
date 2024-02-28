@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>LISTAGEM DOS SUPORTES</h1>

    <a href="{{ route('supports.create') }}">Criar Dúvida</a>

    <table class="table table-dark">
        <thead>
            <th>assuntos</th>
            <th>status</th>
            <th>descrição</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>
                    <td>{{ $support['subject'] }}</td>
                    <td>{{ $support['status'] }}</td>
                    <td>{{ $support['body'] }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support["id"]) }}">ir</a>
                        <a href="{{ route('supports.edit', $support['id']) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
