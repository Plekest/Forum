@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nova Dúvida</h1>
@stop

@section('content')

<x-alert/>

    <form action="{{ route('supports.store') }}" method="POST">
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        @include('admin.supports.partials.form')
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
