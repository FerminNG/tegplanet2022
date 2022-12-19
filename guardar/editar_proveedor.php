<?php

if (!isset($_GET['Id_Prove'])) {
  header('Location: ../index.php?mensaje=Error');
  exit();
}



include_once '../conexion/conexion.php';

$Id_Prove = $_GET['Id_Prove'];

$sentencia = $bd->prepare("SELECT * FROM proveedor WHERE Id_Prove=?;");
$sentencia->execute([$Id_Prove]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);





?>











<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

  <link rel="stylesheet" href="../css/estilos.css">



  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../adicional_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adicional_admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">










  <title>Emfermera</title>



</head>

<body>







  <div class="container-fluid bg-primary">
    <div class="row">
      <div class="col-md">
        <header class="py-3 cabezera">
          <h4 class="text-center">ACTUALIZAR PROVEEDOR</h4>
          <img src="../images/imagen.jpg" alt="">

        </header>
      </div>
    </div>
  </div>



  <div class="container ">
    <div class="row justify-content-center">
      <div class="p-3 col-md-9 tarjeta_consulta">





        <!--inicio del formulario-->
        <div class=" card card-primary ">
          <div class="card-header">
            <h4 class="card-title text-center">ACTUALIZAR PROVEEDOR</h4>





            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {


            ?>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Rellena todos los campos
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"> </button>

              </div>

            <?php
            }
            ?>

            <!-- fin de la alerta -->



          </div>

          <form id="registro" name="registro" method="POST" action="editar_provActua.php">

            <div class="d-flex flex-row justify-content-center">
              <div class="p-2 col-lg-5 ">
                <label for="nombre" class="form-label">ID_PROVEEDOR</label>
                <input type="text" value="<?php echo $persona->Id_Prove; ?>" class="form-control" id="Id_Prove" name="Id_Prove" aria-describedby="emailHelp" placeholder="introduce el proveedor" require>
              </div>
              <div class="p-2 col-lg-5">
                <label for="telefono" class="form-label">NOMBRE</label>
                <input type="txt" value="<?php echo $persona->Nombre; ?>" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" require>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-center">
              <div class="p-2 col-lg-5">
                <label for="Direccion" class="form-label">Direccion</label>
                <input type="text" value="<?php echo $persona->Direccion; ?>" class="form-control" name="Direccion" id="Direccion" placeholder="introduce la direccion" require>
              </div>
              <div class="p-2 col-lg-5">
                <label for="Telefono" class="form-label">Telefono</label>
                <input type="tel" value="<?php echo $persona->Telefono; ?>" class="form-control" name="Telefono" id="Telefono" placeholder="introduce el telefono" require>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-center">
              <div class="p-2 col-lg-5">
                <label for="Email" class="form-label">Email</label>
                <input type="email" value="<?php echo $persona->Email; ?>" class="form-control" name="Email" id="Email" placeholder="introduce el Email" require>

              
            </div>

           
            </div>
            <div class="form-group d-flex justify-content-center">
              <input type="hidden" name="Id_Prove" value="<?php echo $persona->Id_Prove; ?>">
              <button type="submit" class="btn btn-success" name="actualizar" id="actualizar" value="Editar">ACTUALIZAR</button>
            </div>
          </form>
        </div>
        <!-- /.card -->






      </div>



    </div>
  </div>












  <footer class="container-fluid bg-primary fixed-bottom">
    <div class="row">
      <div class="col-md text-light ">
        <p class="text-center">SISTEMA HOSPITALARIO @2022</p>
      </div>
    </div>
  </footer>





















  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="adicional_admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="adicional_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adicional_admin/dist/js/adminlte.min.js"></script>





  <!-- javascrip bootstrap -->
  <script src="js/jquery-3.6.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabla').DataTable();
    });
  </script>


</body>

</html>























