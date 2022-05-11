@php
    $heads = ['Name','Check'];
@endphp

@extends('adminlte::page')

@section('title', 'Detail Role')

@section('content_header')
    <h1>Detail Roles</h1>
@stop

@section('content')
    <form action="{{ route('role.update',$role->id) }}" method="post">
        @csrf
        @method('PATCH')
        <x-adminlte-input name="name" label="Nama Role" value="{{ $role->name }}" />
        <button type="submit" class="btn btn-block btn-success">Edit Role</button>
    </form>
<hr>
    <x-adminlte-card theme="teal" title="Assign Permissions" >
        <form action="{{ route('role.assign_permissions',$role->id) }}" method="post">
            @csrf
            <x-adminlte-datatable id="permissions" :heads="$heads" >
                @foreach ($role->permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}" checked>
                        </td>
                    </tr>
                @endforeach
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
            <button type="submit" class="btn btn-block btn-info">Simpan Permission</button>
        </form>
    </x-adminlte-card>











@stop


