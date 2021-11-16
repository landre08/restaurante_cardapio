@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="float-right btn btn-primary" href="{{route('menu.new')}}">Novo</a>
        <h1 class="gloat-left">Cardápios</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Restaurante</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $m)
                    <tr>
                        <td>{{$m->id}}</td>
                        <td>{{$m->name}}</td>
                        <td>
                            <a href="{{route('restaurant.edit', ['restaurant' => $m->restaurant->id])}}">
                                {{$m->restaurant->name}}
                            </a>
                        </td>
                        <td>{{$m->price}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('menu.edit', ['menu' => $m->id])}}">EDITAR</a>
                            <a class="btn btn-danger" href="{{route('menu.remove', ['menu' => $m->id])}}">EXCLUIR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection