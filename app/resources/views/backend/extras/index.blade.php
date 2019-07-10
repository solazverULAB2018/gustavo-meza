@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Extras</div>
                <div class="card-body">
                    @include('partials.message')
                    <section style="margin-bottom: 5px;">
                        <a href="{{route('extras.create')}}" class="btn btn-secondary">Crear</a>
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
                                @foreach($extras as $extra)
                                    <tr>
                                        <td>{{ $extra->name }}</td>
                                        <td>{{ $extra->price }}</td>
                                        <td style="display: flex">
                                            <a href="{{route('extras.edit', $extra->id)}}" class="btn btn-info">Editar</a>
                                            <form action="{{route('extras.destroy', $extra->id)}}" method="POST" style="margin-left: 2px;">
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
