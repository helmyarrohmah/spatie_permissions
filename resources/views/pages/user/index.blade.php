@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
    {{-- <a href="{{ route('user.create') }}" class="btn btn-primary">Buat User</a> --}}
    <hr>
    <x-adminlte-card theme="teal" theme-mode="outline">
        @foreach ($users as $user)
            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="btn-group m-1">
                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-warning">{{ $user->name }}</a>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </div>
            </form>
        @endforeach
    </x-adminlte-card>











@stop
