<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pizza-tab" data-toggle="pill" href="#pizza" role="tab" aria-controls="pizza" aria-selected="true">Selecciona Pizza</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="drink-tab" data-toggle="pill" href="#drink" role="tab" aria-controls="drink" aria-selected="false">Selecciona Bebida</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="extra-tab" data-toggle="pill" href="#extra" role="tab" aria-controls="extra" aria-selected="false">Selecciona Extra</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pay-mode-tab" data-toggle="pill" href="#pay-mode" role="tab" aria-controls="pay-mode" aria-selected="false">Modo de pago</a>
  </li>
</ul>

<div class="tab-content" id="pizza-tabContent">
  
  <div class="tab-pane fade show active" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
      <div class="card-deck">
        @foreach($tpizzas as $tpizza)
          <div class="card">
            <img class="card-img-top" src="{{ asset('images/super-pizza.png') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$tpizza->name}}</h5>
              <p class="card-text">{{$tpizza->ingredients}}</p>
              @foreach($tpizza->pizzas as $pizza)
                <p class="card-text"><strong>Precio {{$pizza->size}}:</strong> {{$pizza->price}}</p>
              @endforeach
            </div>
            <div class="card-footer">
              <small class="text-muted">
                @foreach($tpizza->pizzas as $key => $pizza)
                  <div class="form-check">
                    <input name="pizzas[]" class="form-check-input" type="checkbox" value="{{$pizza->id}}" id="pizza-{{$pizza->id}}">
                    <label class="form-check-label" for="pizza-{{$pizza->id}}">
                      {{$pizza->size}}
                    </label>
                  </div>
                  <input name="cantidad[{{$pizza->id}}]" class="form-control form-control-sm" type="text" placeholder="Cantidad">
                @endforeach
              </small>
            </div>
          </div>
        @endforeach
      </div>
  </div>

  <div class="tab-pane fade" id="drink" role="tabpanel" aria-labelledby="drink-tab">
    <div class="card-deck">
      @foreach($drinks as $drink)
        <div class="card">
          <img class="card-img-top" src="{{ asset('images/drink.png') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$drink->name}}</h5>
            <p class="card-text"><strong>Precio:</strong> {{$drink->price}}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
                <div class="form-check">
                  <input name="drinks[]" class="form-check-input" type="checkbox" value="{{$drink->id}}" id="drink-{{$drink->id}}">
                  <label class="form-check-label" for="drink-{{$drink->id}}">
                    Seleccionar
                  </label>
                </div>
                <input name="cantidadBebidas[{{$drink->id}}]" class="form-control form-control-sm" type="text" placeholder="Cantidad">
            </small>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="tab-pane fade" id="extra" role="tabpanel" aria-labelledby="extra-tab">
    <div class="card-deck">
      @foreach($extras as $extra)
        <div class="card">
          <img class="card-img-top" src="{{ asset('images/extra.png') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$extra->name}}</h5>
            <p class="card-text"><strong>Precio:</strong> {{$extra->price}}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
                <div class="form-check">
                  <input name="extras[]" class="form-check-input" type="checkbox" value="{{$extra->id}}" id="extra-{{$extra->id}}">
                  <label class="form-check-label" for="extra-{{$extra->id}}">
                    Seleccionar
                  </label>
                </div>
                <input name="cantidadExtras[{{$extra->id}}]" class="form-control form-control-sm" type="text" placeholder="Cantidad">
            </small>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="tab-pane fade" id="pay-mode" role="tabpanel" aria-labelledby="pay-mode-tab">
    <div class="jumbotron">
      <h1 class="display-4">Selecciona modo de pago</h1>
      <p class="lead">Si escoges transferencia bancaria deberás enviarnos la confirmación de tu pago. Si escoges cobro a destino, podrás pagar en efectivo cuando te entreguemos tu pedido.</p>
      <hr class="my-4">
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">Transferencia bancaria</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">Cobro destino</label>
      </div>
    </div>
  </div>

  <br>
  <button class="btn btn-primary">Crear pedido</button>
</div>