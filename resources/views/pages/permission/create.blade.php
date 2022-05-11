@extends('adminlte::page')

@section('title', 'Buat Permission')

@section('content_header')
    <h1>Buat Permission</h1>
@stop

@section('content')
    <form action="{{ route('permission.store') }}" method="post">
        @csrf
        <x-adminlte-input name="name" label="Nama Permission" />
        <button type="submit" class="btn btn-block btn-success">Simpan Permission</button>
    </form>











@stop


