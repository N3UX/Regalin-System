<div id="back"></div>

<div class="login-box card ">
  
  <div class="login-logo">

    <img src="vistas/img/plantilla/png.png" class="img-responsive" style="padding:30px 100px 0px 100px">

  </div>

  <div class="login-box-body card-body">

    <p class="login-box-msg" style="color: white;">Ingrese sus creedenciales:</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-purple center-content" >Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</div>
