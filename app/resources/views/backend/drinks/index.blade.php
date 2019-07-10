@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Bebidas</div>
                <div class="card-body">
                    @include('partials.message')
                    <section style="margin-bottom: 5px;">
                        <a href="{{route('drinks.create')}}" class="btn btn-secondary">Crear</a>
                    </section>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($drinks as $drink)
                                    <tr>
                                        <td>{{ $drink->name }}</td>
                                        <td>{{ $drink->price }}</td>
                                        <td style="display: flex">
                                            <a href="{{route('drinks.edit', $drink->id)}}" class="btn btn-info">Editar</a>
                                            <form action="{{route('drinks.destroy', $drink->id)}}" method="POST" style="margin-left: 2px;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
