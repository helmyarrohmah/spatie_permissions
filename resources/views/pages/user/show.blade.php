@php
$heads = ['Nama Role', 'Check','Permissions from Roles'];
@endphp

@extends('adminlte::page')

@section('title', 'Detail User')

@section('content_header')
    <h1>Detail User</h1>
@stop

@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PATCH')
        <x-adminlte-input name="name" label="Nama user" value="{{ $user->name }}" />
        <x-adminlte-input name="email" label="Email user" value="{{ $user->email }}" />
        {{-- <button type="submit" class="btn btn-block btn-success">Edit user</button> --}}
    </form>
    <hr>
    <x-adminlte-card theme="teal" title="Assign users">
        <form action="{{ route('user.update', $user->id) }}" method="post">
            @csrf
            @method('PATCH')
            <x-adminlte-datatable id="roles" :heads="$heads">
                @foreach ($user->roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <input type="checkbox" name="role[]" value="{{ $role->id }}" checked>
                        </td>
                        <td>
                            @foreach ($role->permissions as $permission)
                                <a class="btn btn-xs btn-info">{{ $permission->name }}</a>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <input type="checkbox" name="role[]" value="{{ $role->id }}">
                        </td>
                        <td>
                            @foreach ($role->permissions as $permission)
                                <a class="btn btn-xs btn-info">{{ $permission->name }}</a>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
            <button type="submit" class="btn btn-block btn-info">Simpan Role</button>
        </form>
    </x-adminlte-card>

    <x-adminlte-card theme="maroon" title="Permission yang Dimiliki">
        @foreach ($user->getAllPermissions() as $permission)
            <a href="" class="btn btn-primary">{{ $permission->name }}</a>
        @endforeach
    </x-adminlte-card>











@stop
