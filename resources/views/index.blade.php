<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/estilo.css')}}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-toggle.min.css') }}">

</head>
<body>
  <header>
    @include('header')

  </header>
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4"><div class="alert-danger" id="mensaje2"></div></div>
              <div class="col-md-4"></div>
            </div>

                <div class="row"  id="cont">
                  <div class="col-md-4"></div>
                   <form role="form" name="miformulario2" action="{{ route('login') }}" method="post">
                      {!! csrf_field() !!}
                    <div class="col-md-4">

                      <div class="form-group">
                      <label for="Usuario">Usuario</label>
                      <input type="text" class="form-control" id="" name="email"
                             placeholder="Ingrese su nombre de usuario" required>
                    </div>

                      <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="password" class="form-control" id="" name="password"
                             placeholder="Ingrese su Contraseña" required>
                    </div>
                </div>

                <div id="mensaje"></div>
                <div class="col-md-4"></div>

              </div>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><button id="boton2" class="btn btn-success center-block">Iniciar</button></div>
                <div class="col-md-4"></div>
              </div>
                  </form>
          </div>
        </div>
      </div>
    </div>

  <div id="contenido">

  </div>
      @if(Session::has('mensaje'))
      <p class="alert alert-danger"> {{Session::get('mensaje')}} </p>
      @endif


  <footer><p>Derechos Reservados &copy Monteria Opina 2016</p></footer>

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery-latest.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-toggle.min.js')}}"></script>

</body>
</html>
