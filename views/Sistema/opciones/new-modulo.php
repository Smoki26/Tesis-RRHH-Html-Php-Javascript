<?php

echo '<div class="modal fade" id="modalFormNuevoModulo" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Módulo</h5>
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
                <label class="control-label">Nombre del Módulo</label>
                <input class="form-control" type="text" id="txtnombre" name="txtnombre" placeholder="ingresa el Módulo" required="">
              </div>
              <div class="form-group">
                <label class="control-label">Descripción</label>
                <input class="form-control" id="txtdescripcion" name="txtdescripcion" rows="2" placeholder="ingresa la Descripción" required="">
              </div>
              <!-- select -->  
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
</div>';

?>