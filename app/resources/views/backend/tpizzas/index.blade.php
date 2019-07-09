@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tipos de Pizza</div>
                <div class="card-body">
                    @include('partials.message')
                    <section style="margin-bottom: 5px;">
                        <a href="{{route('tpizzas.create')}}" class="btn btn-secondary">Crear</a>
                    </section>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Ingredientes</th>
                                    <th scope="col">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tpizzas as $tpizza)
                                    <tr>
                                        <th scope="row">{{ $tpizza->id }}</th>
                                        <td>{{ $tpizza->name }}</td>
                                        <td>{{ $tpizza->ingredients }}</td>
                                        <td style="display: flex">
                                            <a href="{{route('tpizzas.edit', $tpizza->id)}}" class="btn btn-info">Editar</a>
                                            <form action="{{route('tpizzas.destroy', $tpizza->id)}}" method="POST" style="margin-left: 2px;">
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
