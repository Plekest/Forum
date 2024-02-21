@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nova Dúvida</h1>
@stop

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form action="{{ route('supports.store') }}" method="POST">
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        @csrf()
        <div class="form-group">
            <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
        </div>
        <div class="form-group">
            <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
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
