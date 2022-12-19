<?php

include 'conexion/conexion2.php';
include 'conexion/conexion.php';

$sentencia= $bd-> query("SELECT * FROM productos");

$persona= $sentencia->fetchAll(PDO::FETCH_OBJ);



?>





<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/css/misEstilos.css">



  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adicional_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adicional_admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <title>Productos</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="adicional_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Re 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="adicional_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <!-- <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 Menú
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a> -->
              
              <!-- <ul class="nav nav-treeview">
                 <li class="nav-item">
                  <a href="index.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>INICIO</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="compras.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>COMPRAS</p>
                  </a>            
              </ul> -->

              <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Inicio
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="compras.php" class="nav-link">
                  <i class="nav-icon fas fa-money"></i>
                  <p>
                    Compras
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Ventas
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Productos
                  </p>
                </a>
            </li>


            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">REGISTRO DE PACIENTES</h1>









              <!-- boton del modal -->
              <div class="col-sm-6">

                <!-- <a href="guardar/guardar.php" class="mt-1 mx-0 btn btn-success" >Nuevo Usuario</a> -->
                
              </div> <!-- aqui termina -->

              <!-- *************************MODAL****************************************** -->
              <a href="guardar/vista_guardaProve.php" class="mt-1 mx-0 btn btn-success" >Nuevo PRODUCTO</a>

             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <di v class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                      </div>

                        <div class="modal-body bodyModal">
                          
                          <form id="registro" name="registro" method="POST" action="guardar_paciente.php">
                            
                              <div class="p-2  cajas">
                                <label for="Nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="introduce el nombre" required>
                              </div>

                              <div class="p-2 cajas">
                                <label for="stock" class="form-label">STOCK</label>
                                <input type="number" class="form-control" name="stock" id="edad" placeholder="introduce el stock" required>
                              </div>

                              <div class="p-2 cajas">
                                <label for="apellidos" class="form-label">stock_min</label>
                                <input type="number" class="form-control" name="stock_min" id="stock_min" placeholder="introduce el stock_min" required>
                              </div>

                              <div class="p-2 cajas">
                                <label for="fecha_vencimiento" class="form-label">fecha_vencimiento</label>
                                <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="introduce el fecha_vencimiento" required>

                              </div>

                              <!-- <div class="form-group d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary" name="guarda" id="guarda">GUARDAR</button>
                            </div>      -->
                          <form>                
                        

                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary" name="guarda" id="guarda" >Registrar</button>
                      </div>
                  </div>
                </div>
              </div>
              <!-- ************************************************************************ -->






            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Principal</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->



      <!-- modal usuario -->


      <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tituloModal">Nuevo Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="registro" name="registro" method="POST" action="guardar/guardar_paciente.php">

                <div class="d-flex flex-row">
                  <div class="p-2">
                    <label for="nombre" class="form-label">CODIGO</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp" placeholder="introduce el codigo" autofocus require>
                  </div>
                  <div class="p-2">
                    <label for="telefono" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" require>
                  </div>
                </div>

                <div class="d-flex flex-row">
                  <div class="p-2">
                    <label for="edad" class="form-label">EDAD</label>
                    <input type="number" class="form-control" name="edad" id="edad" placeholder="introduce la edad" require>
                  </div>
                  <div class="p-2">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="introduce el apellido" require>
                  </div>
                </div>

                <div class="d-flex flex-row">
                  <div class="p-2">
                    <label for="edad" class="form-label">telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="introduce el telefono" require>

                  </div>
                  <div class="p-2">
                    <label for="edad" class="form-label">DIRECCION</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="introduce la direccion" require>
                  </div>
                </div>

                <div class="d-flex flex-row">
                  <div class="p-2">
                    <label for="edad" class="form-label">TUTOR</label>
                    <input type="text" class="form-control" name="tutor" id="tutor" placeholder="introduce al tutor" require>
                  </div>
                  <div class="p-2">
                    <label for="sexo">SEXO</label>
                    <select class="form-control" aria-label=".form-select-lg example" id="sexo1" name="sexo1" require>
                      <option selected>Elije el sexo</option>
                      <option value="soltero">M</option>
                      <option value="casado">F</option>
                    </select>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CERRAR</button>
                  <button type="submit" class="btn btn-success">GUARDAR</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div> <!-- fin del modal -->



      







      








      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">


              <div class="card">

                <!-- alerta -->

             <?php 
                    if(isset($_GET['mensaje']) and $_GET['mensaje']== 'registrado'){

                   
                     ?>
                    
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Registrado!</strong>Operacion con Exito. 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">  </button>

                    </div>

                    <?php 
                     }
                    ?>

                    <!-- fin de la alerta -->


                      <!-- alerta -->

             <?php 
                    if(isset($_GET['mensaje']) and $_GET['mensaje']== 'Error'){

                   
                     ?>
                    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error!</strong>Vuelve a Intentarlo. 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">  </button>

                    </div>

                    <?php 
                     }
                    ?>

                    <!-- fin de la alerta -->


                     <!-- alerta -->

             <?php 
                    if(isset($_GET['mensaje']) and $_GET['mensaje']== 'actualizado'){

                   
                     ?>
                    
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Actulizado !</strong> con exito. 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">  </button>

                    </div>

                    <?php 
                     }
                    ?>

                    <!-- fin de la alerta -->

                     <!-- alerta -->

             <?php 
                    if(isset($_GET['mensaje']) and $_GET['mensaje']== 'eliminado'){

                   
                     ?>
                    
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Elimanado !</strong> con exito. 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">  </button>

                    </div>

                    <?php 
                     }
                    ?>

                    <!-- fin de la alerta -->




                <!-- /.card-header -->
                <div class="card-body">
                  <table id="tabla" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID_PRODUCTO</th>
                        <th>NOMBRE</th>
                        <th>STOCK</th>
                        <th>STOCK_MINIMO</th>
                        <th>FECHA_VENCIMIENTO</th>
                        <th>OPERACIONES</th>
                       
                    
                      </tr>
                    </thead>
                    <tbody>
                     
                  <?php foreach($persona as $dato){  ?>
                        <tr>
                          <td><?php echo $dato->Id_Produc; ?></td>
                          <td><?php echo $dato->Nombre; ?></td>
                          <td><?php echo $dato->stock; ?></td>
                          <td><?php echo $dato->stock_min; ?></td>
                          <td><?php echo $dato->fecha_vencimiento; ?></td>
                          
                       <td><a href="guardar/editar.php?Id_Produc=<?php echo $dato->Id_Produc; ?>" class="btn btn-warning">Editar</a>
                          <a onclick="return confirm('Estas seguro de eliminar?');" href="guardar/eliminar_paciente.php?Id_Produc=<?php echo $dato->Id_Produc; ?>" class="btn btn-danger">Eliminar</a></td>
                          
                        
                        </tr>
                      <?php    } ?> 

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>


























            </div>

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->














    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


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