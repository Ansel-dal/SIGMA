@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $accion }} {{ $tipo }}</h4>

                <div id="wizard">
                    <h2>Tipo de bien</h2>
                    <section>
                        <label>Seleccione a qué grupo pertenece el bien</label>
                        <select class="js-example-basic-single w-100" data-width="100%" name="grupo">
                            @foreach ($grupos as $grupo)
                                {
                                <option value="{{ $grupo->codigo }}">{{ $grupo->Nombre }} - {{ $grupo->Detalle }}
                                </option>

                                }
                            @endforeach
                        </select>
                    </section>

                    <h2>Ubicación</h2>
                    <section>
                        <label>Seleccione un destino</label>
                        <select class="js-example-basic-single w-100" data-width="100%" name="ubicacion">
                            @foreach ($empresas as $empresa)
                                {
                                <option value="{{ $empresa->name }}">{{ $empresa->name }}</option>

                                }
                            @endforeach
                        </select>
                    </section>

                    <h2>Estado</h2>
                    <section>
                        <div class="form-group">
                            <label for="">Estado</label>
                            <select class="w-100" data-width="100%" name="estado">
                                @foreach ($estados as $estado)
                                    {
                                    <option value="{{ $estado }}">{{ $estado }}
                                    </option>

                                    }
                                @endforeach
                            </select>
                        </div>
                        <br>


                    </section>

                    <h2>Orden de compra</h2>
                    <section>
                        <div class="form-group">
                            <label for="">Ingrese el n° de orden de compra</label>
                            <input type="text" class="form-control" name="ordencompra"
                                placeholder="N° orden de compra">
                        </div>
                    </section>

                    <h2>Precio</h2>
                    <section>
                        <div class="form-group">
                            <label for="">Ingrese el precio</label>
                            <input type="text" class="form-control" name="precio" placeholder="Precio">
                        </div>
                    </section>

                    <h2>Imagen</h2>
                    <section>
                        Proximamente...
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function onWizardFinish(event, currentIndex) {
        
    Swal.fire({
      title: '¿Está seguro?',
      text: "{{ $accion }}á este {{ $tipo }}" ,
      icon: 'success',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById("myForm").submit();
      }
    })
  }
</script>
