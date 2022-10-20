<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
    Dashboard
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Dashboard</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

    </div> 



  </section>
 
</div>
