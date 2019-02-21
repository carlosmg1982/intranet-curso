@extends('layout')
@section('title','Usuarios')
@section('content')
    @if(!empty($projects))
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>DNI</th>
            </tr>
            </thead>
            <tbody>
            @foreach($project as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->email}}</td>
                    <td>{{$project->dni}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    @endsection
