<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/modal.css">
    <title>Document</title>
</head>
<body>


<div class="modalConten">
            <div class="contenidoModal">
                <div class="cabeceraModal">
                    <div class="titleM">Registrar Nueva Carrera</div>
                    <div class="cerrar" id="cerrarModalCarr"><i class="fa fa-remove"></i></div>
                </div>
                <form action="" method="POST" name="formCarrera" id="formCarrera">
                        <div class="row">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="Nombre de la Carrera" id="NomCarr" name="nombre">
                            <div class="errores" id="NomCar">Ingresa un Nombre</div>
                        </div>
                        <div class="row">
                            <i class="fa fa-university"></i>
                            <select name="campus" id="campus">
                                <option value="" selected>Elija Campus</option>
                                <option value="Campus I">Campus I</option>
                                <option value="Campus II">Campus II</option>
                            </select>
                            <div class="errores" id="Cam">Selecciona un Campus</div>
                        </div>
                        <div class="row">
                            <i class="fa fa-tags"></i>
                            <select name="estado" id="estado">
                                <option value="1">Activo</option>
                                <option value="0">Archivado</option>
                            </select>
                            <div class="errores" id="Cam">Selecciona un Campus</div>
                        </div>
                        <!-- <div class="row">
                            <i class="fa fa-phone"></i>
                            <input type="text" placeholder="Telefono" id="tlfCarr" name="tlfCarr">
                        </div> -->
                        <!-- <div class="row">
                            <i class="fa fa-photo"></i>
                            <div class="logo">
                                <p>Agregar Logotipo</p>
                            <input type="file" id="logoCarr" name="logoCarr">
                            </div>
                        </div> -->
                        <div class="btnCa">
                            <input type="submit" id="btnCarr" value="Registrar Carrera">
                        </div>
                </form>
            </div>  
 </div> 
    
</body>
</html>