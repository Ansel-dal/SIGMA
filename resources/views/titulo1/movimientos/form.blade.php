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
                <h4 class="card-title">{{ $modo }} movimiento</h4>
                <div id="wizard">
                    <h2>Requerimento</h2>
                    <section>
                        <div class="form-group">
                            <label>Seleccione un requerimento</label>
                            <select class="js-example-basic-single w-100" data-width="100%" name="requerimento">
                                @foreach ($requerimentos as $requerimento)
                                    {
                                    <option value="{{ $requerimento }}">{{ $requerimento }}</option>

                                    }
                                @endforeach
                            </select>
                        </div>
                    </section>

                    <h2>Bien</h2>

                    <section>
                        <div class="form-group">

                            <label>Seleccione un bien</label>
                            <select class="js-example-basic-single w-100" data-width="100%" name="bien">
                                @foreach ($bienes as $bien)
                                    <option value="{{ $bien->codigo }}"> #{{ $bien->codigo }} -
                                        {{ $grupos->where('codigo', '=', $bien->grupo)->first()->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </section>

                    <h2>Destino</h2>
                    <section>
                        <div class="form-group">
                            <label>Seleccione un destino</label>
                            <select class="js-example-basic-single w-100" data-width="100%" name="destino">
                                @foreach ($empresas as $empresa)
                                    {
                                    <option value="{{ $empresa->name }}">{{ $empresa->name }}</option>

                                    }
                                @endforeach
                            </select>
                        </div>

                    </section>

                    <h2>Nivel de urgencia</h2>
                    <section>
                        <label>Seleccione un niel de urgencia</label>
                        <select class="js-example-basic-single w-100" data-width="100%" name="nivelurgencia">
                            @foreach ($niveles as $nivel)
                                {
                                <option value="{{ $nivel }}">{{ $nivel }}</option>

                                }
                            @endforeach
                        </select>

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
      text: "Agregará este movimiento" ,
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
