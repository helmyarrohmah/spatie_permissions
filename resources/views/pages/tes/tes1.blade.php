@extends('adminlte::page')

@section('title', 'Laman Tes 1')

@section('content_header')
    <h1>Laman Tes 1</h1>
@stop

@section('content')
    <h1>Tes 1</h1>
    <p>Card di bawah akan tampil hanya jika user memiliki permission 'show card' (diblok di view)</p>
    @can('show card')
        <x-adminlte-card theme="primary" title="Permission 'show card'" >
            Ini adalah tampilan jika bisa memiliki permission untuk 'show card'
        </x-adminlte-card>
    @endcan
    <h1>Tes 2</h1>
    <p>Button di bawah akan tampil untuk semua user tapi hanya bisa diakses jika user memiliki permission 'show users' (diblok di controller)</p>
    <a href="/tes2">Klik link berikut</a>
    <h1>Tes 3</h1>
    <p>Button di bawah akan tampil untuk semua user tapi hanya bisa diakses jika user memiliki permission 'delete users' (diblok di route)</p>
    <a href="/tes3">Klik link berikut</a>











@stop
