<?php

echo '<div class="modal fade" id="modalFormActualizarPersona" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Persona</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- formularios -->
      <div class="tile">
          <div class="tile-body">
            <form id="formRol" name="formRol">
              <div class="form-group">
                <label class="control-label">Nombre</label>
                <input class="form-control" type="text" id="txtnombre" name="txtnombre" placeholder="ingresa el usuario" required="">
              </div>
              <div class="form-group">
                <label class="control-label">Apellido</label>
                <input class="form-control" id="txtdescripcion" name="txtdescripcion" rows="2" placeholder="ingresa la contraseña" required="">
              </div>
              <div class="form-group">
                  <label for="exampleSelect1">Sector</label>
                  <select class="form-control" id="liststatus" name="liststatus" required="">
                    <option value="1">Compra</option>
                    <option value="2">Ventas</option>
                    <option value="3">Producción</option>
                    <option value="4">Marketing</option>
                    <option value="5">RRHH</option>
                    <option value="4">Depósito</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleSelect1">Puesto</label>
                  <select class="form-control" id="liststatus" name="liststatus" required="">
                    <option value="1">Jefe de planta</option>
                    <option value="2">Jefe de sector</option>
                    <option value="3">jafe de sector</option>
                    <option value="4">administrador</option>
                    <option value="5">supervisor</option>
                    <option value="4">evaluador</option>
                    <option value="4">Lider</option>
                    <option value="5">operario</option>
                    <option value="4">mecánico</option>
                  </select>
              </div>
              
              <div class="form-group">
                  <label for="exampleSelect1">Puesto</label>
                  <select class="form-control" id="liststatus" name="liststatus" required="">
                    <option value="1">superadministrador</option>
                    <option value="2">administrador</option>
                    <option value="3">jafe de sector</option>
                    <option value="4">administrador</option>
                    <option value="5">supervisor</option>
                    <option value="4">evaluador</option>
                  </select>
              </div>
              <!-- select -->  
              <div class="form-group">
                  <label for="exampleSelect1">Sexo</label>
                  <select class="form-control" id="liststatus" name="liststatus" required="">
                    <option value="1">Masculino</option>
                    <option value="0">Femenino</option>
                    
                  </select>
              </div>
              <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" id="txtdescripcion" name="txtdescripcion" rows="2" placeholder="ingresa el email" required="">
              </div>
              <div class="form-group">
                <label class="control-label">Teléfono</label>
                <input class="form-control" id="txttelefono" name="txtdescripcion" rows="2" placeholder="ingresa el Teléfono" required="">
              </div>
              <div class="form-group">
                <label class="control-label">Fecha de nacimiento</label>
                <input class="form-control" type="date" id="fecha_nac" name="txtdescripcion" rows="2" placeholder="ingresa la Fecha de nacimiento" required="">
              </div>
              <div class="form-group">
                  <label for="exampleSelect1">Estado</label>
                  <select class="form-control" id="liststatus" name="liststatus" required="">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                    
                  </select>
              </div>
              <!-- botones -->  
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;

                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
                </button>
              </div>
            </form>
          </div>
          
        </div>

    </div>

  </div>
</div>
</div>':
?>