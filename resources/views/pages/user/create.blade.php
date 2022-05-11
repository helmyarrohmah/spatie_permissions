@extends('adminlte::page')

@section('title', 'Buat Role')

@section('content_header')
    <h1>Buat Roles</h1>
@stop

@section('content')
    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <x-adminlte-input name="name" label="Nama Role" />
        <button type="submit" class="btn btn-block btn-success">Simpan Role</button>
    </form>











@stop


