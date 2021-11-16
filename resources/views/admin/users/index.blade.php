@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="float-right btn btn-primary" href="{{route('user.new')}}">Novo</a>
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
                @foreach($users as $u)
                    <tr>
                        <td>{{$u->id}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->created_at}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('user.edit', ['user' => $u->id])}}">EDITAR</a>
                            <a class="btn btn-danger" href="{{route('user.remove', ['user' => $u->id])}}">EXCLUIR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection