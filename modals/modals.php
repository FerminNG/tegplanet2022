 <!-- modal usuario -->


 <div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" require>
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

