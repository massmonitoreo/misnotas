@extends('layouts.main')

@section('content')
<style>
    body {
        padding-top: 60px;
    }
</style>
<div class="container">
    <div class="col col-lg-12">
        <h2 class="pull-left">Lista de notas</h2>
        <a href="{{ route('notas.tv.create') }}" class="btn btn-info btn-sm pull-right" style="margin-top: 22px; margin-left: 3px;">
            crear nota televisión
        </a>
        <a href="#" class="btn btn-info btn-sm pull-right" style="margin-top: 22px; margin-left: 3px;">
            crear nota prensa
        </a>
        <a href="{{ route('notas.radio.create') }}" class="btn btn-info btn-sm pull-right" style="margin-top: 22px; margin-left: 3px;">
            crear nota radio
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Encabezado</th>
                <th>Medio</th>
                <th>Conductor</th>
                <th>Programa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notas as $nota)
            <tr>
                <td>{{ $nota->id }}</td>
                <td>{{ $nota->encabezado }}</td>
                <td>{{ $nota->medio }}</td>
                @if($nota->medio == 'Radio')
                    @foreach($nota->radios as $radio)
                        <td>{{ $radio->conductor }}</td>
                        <td>{{ $radio->programa }}</td>
                    @endforeach
                @else
                    @foreach($nota->tvs as $tv)
                    <td>{{ $tv->conductor }}</td>
                    <td>{{ $tv->programa }}</td>
                    @endforeach
                @endif
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop