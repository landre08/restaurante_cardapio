@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserção de Restaurantes</h1>
        <hr />

        <form action="{{route('restaurant.store')}}" method="post">
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
                <label>Endereço</label>
                <input type="text" name="address" value="{{old('address')}}"  class="form-control @if($errors->has('address')) is-invalid @endif" /> 
                @if($errors->has('address'))
                    <span class="invalid-feedback">
                        @foreach($errors->get('address') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach  
                    </span>          
                @endif
            </p>

            <p class="form-group">
                <label>Fale sobre o restaurante</label>
                <textarea name="description"  class="form-control @if($errors->has('description')) is-invalid @endif" cols="30" rows="10">
                    {{old('description')}}
                </textarea> 
                @if($errors->has('description'))
                    <span class="invalid-feedback">
                        @foreach($errors->get('description') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach  
                    </span>          
                @endif
            </p>

            <input class="btn btn-success btn-lg" type="submit" value="Cadastrar" />
        </form>
    </div>
@endsection