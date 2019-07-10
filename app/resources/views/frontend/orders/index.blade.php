@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Mis pedidos</div>
                <div class="card-body">
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Total a Pagar</th>
                          <th scope="col">Modo de Pago</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Solicitado</td>
                          <td>63.35</td>
                          <td>Cobro a destino</td>
                          <td style="display: flex">
                            <a href="#" class="btn btn-info">Ver pedido</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Cancelado</td>
                          <td>70.40</td>
                          <td>Cobro a destino</td>
                          <td>
                            <a href="#" class="btn btn-info">Ver pedido</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Enviado</td>
                          <td>54</td>
                          <td>Transferencia</td>
                          <td>
                            <a href="#" class="btn btn-info">Ver pedido</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Procesando</td>
                          <td>37.42</td>
                          <td>Transferencia</td>
                          <td>
                            <a href="#" class="btn btn-info">Ver pedido</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Entregado</td>
                          <td>51.22</td>
                          <td>Transferencia</td>
                          <td>
                            <a href="#" class="btn btn-info">Ver pedido</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Cancelado</td>
                          <td>37</td>
                          <td>Transferencia</td>
                          <td>
                            <a href="#" class="btn btn-info">Ver pedido</a>
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