@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Crear Tipo de Pizza</div>
                <div class="card-body">
                    @include('partials.errors')
                    <form method="POST" action="{{ route('tpizzas.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="tpizzaname">Nombre</label>
                            <input type="text" name="name" class="form-control" id="tpizzaname" placeholder="Tocineta" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="tpizzaingredients">Ingredientes</label>
                            <textarea name="ingredients" class="form-control" id="tpizzaingredients" rows="3" value="{{old('ingredients')}}"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{route('tpizzas.index')}}" class="btn btn-secondary">Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
