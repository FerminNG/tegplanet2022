
<?php

include_once '../conexion/conexion2.php';


$query = "SELECT * FROM productos order by Id_Produc desc limit 1";
$result = mysqli_query($conn, $query);

$row= mysqli_fetch_array($result);





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










  <title>Insertar_Producto</title>


















</head>

<body class="contenedor_padre">
 




           


                   <div class="container-fluid bg-primary">
                    <div class="row">
                      <div class="col-md">
                        <header class="py-3 cabezera">
                        <h4 class="text-center">REGISTRO DE PRODUCTOS</h4>
                          <img src="../images/imagen.jpg" alt="">
                          
                        </header>
                      </div>
                    </div>
                   </div>



                   <div class="container ">
                    <div class="row">
                      <div class="col-md-12">


                       <!--inicio del formulario-->
              <div class="card card-primary tarjeta">
                <div class="card-header">
                <h4 class="card-title text-center">REGISTRO DE PRODUCTOS</h4>

                  <!-- alerta -->

             <?php 
                    if(isset($_GET['mensaje']) and $_GET['mensaje']== 'falta'){

                   
                     ?>
                    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error!</strong> Rellena todos los campos 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">  </button>

                    </div>

                    <?php 
                     }
                    ?>

                    <!-- fin de la alerta -->




                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="registro" name="registro" method="POST" action="guardar_paciente.php">

                  <div class="d-flex flex-row justify-content-center"></div>
                    <div class="p-2 col-lg-5">
                      <label for="telefono" class="form-label">NOMBRE</label>
                      <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" required>
                    </div>

                    <div class="p-2 col-lg-5">
                      <label for="stock" class="form-label">STOCK</label>
                      <input type="number" class="form-control" name="stock" id="edad" placeholder="introduce el stock" required>
                    </div>

                    <div class="p-2 col-lg-5">
                      <label for="apellidos" class="form-label">stock_min</label>
                      <input type="number" class="form-control" name="stock_min" id="stock_min" placeholder="introduce el stock_min" required>
                    </div>

                    <div class="p-2 col-lg-5">
                      <label for="fecha_vencimiento" class="form-label">fecha_vencimiento</label>
                      <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="introduce el fecha_vencimiento" required>

                    </div>

                    <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="guarda" id="guarda">GUARDAR</button>
                  </div>



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