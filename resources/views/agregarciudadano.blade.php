<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-toggle.min.css') }}">

  </head>
  <body>
        <header>
          @include('header')
        </header>

        <div id="contenido" class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <form class="form-horizontal" action="#" method="" role="form">
              <div class="form-group">
                <label for="identificacion" class="col-lg-2 control-label">Identificacion</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese su Identificacion">
                </div>
              </div>

              <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="nom_ciudadano" name="nom_ciudadano" placeholder="Ingrese su Nombre">
                </div>
              </div>

              <div class="form-group">
                <label for="apellido" class="col-lg-2 control-label">Apellidos</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="apell_ciudadano" name="apell_ciudadano" placeholder="Ingrese sus apellidosS">
                </div>
              </div>

              <div class="form-group">
                <label for="ejemplo_password_3" class="col-lg-2 control-label">Usuario</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="" placeholder="Nombre de usuario">
                </div>
              </div>

              <div class="form-group">
                <label for="ejemplo_password_3" class="col-lg-2 control-label">Contraseña</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" id="ejemplo_password_3" placeholder="Contraseña">
                </div>
              </div>

              <div class="from-group">
                <label for="" class="col-lg-2">Lugar de residencia</label>
                <div class="col-lg-5">
                  <select class="from-control" name="">

                  </select>
                </div>
                <div class="col-lg-5">
                  <select class="from-control" name="">
                      
                  </select>
                </div>

              </div>

              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-default">Entrar</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-2">

          </div>

        </div>

  </body>
</html>
