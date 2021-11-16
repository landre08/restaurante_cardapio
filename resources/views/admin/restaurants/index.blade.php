@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="float-right btn btn-primary" href="{{route('restaurant.new')}}">Novo</a>
        <h1 class="gloat-left">Restaurantes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Criado Em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->created_at}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('restaurant.edit', ['restaurant' => $r->id])}}">EDITAR</a>
                            <a class="btn btn-danger" href="{{route('restaurant.remove', ['restaurant' => $r->id])}}">EXCLUIR</a>
                            <a class="btn btn-secondary" href="{{route('restaurant.photo', ['id' => $r->id])}}">FOTO</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection