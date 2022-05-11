@extends('adminlte::page')

@section('title', 'Role')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
    <a href="{{ route('role.create') }}" class="btn btn-primary">Buat Role</a>
    <hr>
    <x-adminlte-card theme="teal" theme-mode="outline">
        @foreach ($roles as $role)
            <form action="{{ route('role.destroy', $role->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="btn-group m-1">
                    <a href="{{ route('role.show', $role->id) }}" class="btn btn-sm btn-warning">{{ $role->name }}</a>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </div>
            </form>
        @endforeach
    </x-adminlte-card>











@stop
