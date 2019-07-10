@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pedidos</div>
                <div class="card-body">
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Cliente</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Hora de salida</th>
                          <th scope="col">Hora de entrega</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark Otto</td>
                          <td>Solicitado</td>
                          <td>00:00</td>
                          <td>00:00</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Cambiar Estado</a>
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Cancelar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob Thornton</td>
                          <td>Solicitado</td>
                          <td>00:00</td>
                          <td>00:00</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Cambiar Estado</a>
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Cancelar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry Caul</td>
                          <td>Enviado</td>
                          <td>12:17</td>
                          <td>00:00</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Cambiar Estado</a>
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Cancelar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Teresa Salas</td>
                          <td>Procesando</td>
                          <td>00:00</td>
                          <td>00:00</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Cambiar Estado</a>
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Cancelar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Vicente Bax</td>
                          <td>Entregado</td>
                          <td>11:10</td>
                          <td>11:45</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Cambiar Estado</a>
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Cancelar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Paul Brow</td>
                          <td>Cancelado</td>
                          <td>00:00</td>
                          <td>00:00</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Cambiar Estado</a>
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Cancelar</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
