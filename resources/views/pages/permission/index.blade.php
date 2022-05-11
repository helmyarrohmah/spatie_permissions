@extends('adminlte::page')

@section('title', 'Permission')

@section('content_header')
    <h1>Permissions</h1>
@stop

@section('content')
    <a href="{{ route('permission.create') }}" class="btn btn-primary">Buat Permission</a>
    <hr>
    <x-adminlte-card theme="teal" theme-mode="outline">
        @foreach ($permissions as $permission)
            <form action="{{ route('permission.destroy', $permission->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="btn-group m-1">
                    <a href="{{ route('permission.show', $permission->id) }}" class="btn btn-sm btn-warning">{{ $permission->name }}</a>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </div>
            </form>
        @endforeach
    </x-adminlte-card>











@stop
