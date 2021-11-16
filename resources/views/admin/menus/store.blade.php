@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserção de Cardápios</h1>
        <hr />

        <form action="{{route('menu.store')}}" method="post">
            {{ csrf_field() }}
            <!--
            <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
            <p class="form-group">
                <label>Nome do Restaurante</label> 
                <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif" /> 
                @if($errors->has('name'))
                        <span class="invalid-feedback">
                        @foreach($errors->get('name') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach      
                    </span>      
                @endif
            </p>

            <p class="form-group">
                <label>Preço</label>
                <input type="text" name="price" value="{{old('price')}}"  class="form-control @if($errors->has('price')) is-invalid @endif" /> 
                @if($errors->has('price'))
                    <span class="invalid-feedback">
                        @foreach($errors->get('price') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach  
                    </span>          
                @endif
            </p>

            <p class="form-group">
                <label>Restaurantes</label>
                
                <select name="restaurant_id" class="form-control">
                    <option>Selecione</option>
                    @foreach($restaurants as $r)
                        <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach
                </select>
            </p>

            <input class="btn btn-success btn-lg" type="submit" value="Cadastrar" />
        </form>
    </div>
@endsection