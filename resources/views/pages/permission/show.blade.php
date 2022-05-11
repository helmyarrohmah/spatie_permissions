@extends('adminlte::page')

@section('title', 'Detail Permission')

@section('content_header')
    <h1>Detail Permissions</h1>
@stop

@section('content')
    <form action="{{ route('permission.update',$permission->id) }}" method="post">
        @csrf
        @method('PATCH')
        <x-adminlte-input name="name" label="Nama permission" value="{{ $permission->name }}" />
        <button type="submit" class="btn btn-block btn-success">Edit permission</button>
    </form>











@stop


