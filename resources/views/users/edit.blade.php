@extends('layout')
@if(isset($user))
@section('title',"Editar Usuario")
    @else
        @section('title', "Crear usuario")
        @endif
@section('content')
    <form method="POST" action="/users/{{$user->id}}">
        @csrf
        @if(isset($user))
            @else
            @endif
        <div>
            <div>Nombre:</div>
            <div>
                <input name="name" id="name" value="{{$user->name}}" />
            </div>
            <div>E-mail:</div>
            <div>
                <input name="email" id="email" value="{{$user->email}}" />
            </div>
            <div>DNI:</div>
            <div>
                <input name="dni" id="dni" value="{{$user->dni}}" />
            </div>
        </div>
        <div>
            <button value="Enviar"/>
            <button value="Eliminar"/>

        </div>
    </form>
    @endsection
