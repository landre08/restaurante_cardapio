@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserção de Restaurantes</h1>
        <hr />

        <form action="{{route('user.store')}}" method="post">
            {{ csrf_field() }}
            <!--
            <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
            <p class="form-group">
                <label>Nome do Usuário</label> 
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
                <label>E-mail</label>
                <input type="email" name="email" value="{{old('email')}}"  class="form-control @if($errors->has('email')) is-invalid @endif" /> 
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                        @foreach($errors->get('email') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach  
                    </span>          
                @endif
            </p>

            <p class="form-group">
                <label>Senha</label>
                <input type="password" name="password" value="{{old('password')}}"  class="form-control @if($errors->has('password')) is-invalid @endif" /> 
                @if($errors->has('password'))
                    <span class="invalid-feedback">
                        @foreach($errors->get('password') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach  
                    </span>          
                @endif
            </p>

            <p class="form-group">
                <label>Confirma Senha</label>
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"  class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" /> 
                @if($errors->has('password_confirmation'))
                    <span class="invalid-feedback">
                        @foreach($errors->get('password_confirmation') as $n)
                            <strong>{{$n}}</strong>
                        @endforeach  
                    </span>          
                @endif
            </p>

            <input class="btn btn-success btn-lg" type="submit" value="Cadastrar" />
        </form>
    </div>
@endsection