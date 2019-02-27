@extends('layout')
@section('title','Usuarios')
@section('content')
    @if(!empty($users))
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>DNI</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->dni}}</td>
                    <td>
                        <a href="/users/{{$user->id}}" title="Ver">Ver</a>
                        <a href="/users/{{$user->id}}/edit" title="Editar">Editar</a>
                        <!--<a href="/" title="Eliminar">Eliminar</a>-->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    <a href="/users/create">Crear nuevo usuario</a>
    @endsection
