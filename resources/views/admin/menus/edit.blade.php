@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edição de Cardápios</h1>
        <hr />

        <form action="{{route('menu.update', ['menu' => $menu->id])}}" method="post">
            {{ csrf_field() }}
            <!--
            <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
            <p class="form-group">
                <label>Nome do Menu</label> 
                <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{$menu->name}}" /> 
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
                <input type="text" class="form-control @if($errors->has('price')) is-invalid @endif" name="price" value="{{$menu->price}}" /> 
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
                    @foreach($restaurants as $r)
                        <option value="{{$r->id}}"
                            @if($menu->restaurant_id == $r->id)
                                selected
                            @endif>
                            {{$r->name}}
                        </option>
                    @endforeach
                </select>
            </p>

            <input class="btn btn-success btn-lg" type="submit" value="Atualizar" />
        </form>
    </div>
@endsection