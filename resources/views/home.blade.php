@extends('layouts.app')

@section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Status') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Estás conectado!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col mb-4">
    <div class="card h-100">
      <img src="https://www.bizneo.com/blog/wp-content/uploads/2021/08/planificador-de-horarios-laborales.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">⏱️Horarios⏱️</h5>
        <p class="card-text">Lunes a Viernes 1:00 PM a 5:00 PM ⏱️ 
            <br>
            Sábado 09:00 AM a 2:00 PM⏱️
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Solo atención presencial</small>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="https://salauno.com.mx/wp-content/uploads/2022/06/consulta-oftalmologica-salauno.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">💵Consultas Oftamológicas💵</h5>
        <p class="card-text">Jueves 9:00 AM a 1:00 PM⏱️ 
            <br>
            Sábado 9:00 AM a 2:00 PM⏱️ 
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Dr José Prado - Dra Nipcela Carmona</small>
      </div>
    </div>
  </div>
  <div class="col mb-4 text-center"> <!-- Agregado: Clase text-center para centrar contenido -->
    <div class="card h-100">
      <img src="https://www.euroclima.org/images/BuenosAires2018/logos-contacto.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">📱 Contacto 📱</h5>
        <p class="card-text">
          ☎️ 0212-761-9096 ☎️
          <br>
          📲 0412-7329701 📲
        </p>
      </div>
    </div>
  </div>
</div>

@endsection