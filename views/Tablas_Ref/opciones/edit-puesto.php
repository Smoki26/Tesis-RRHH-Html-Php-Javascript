<div class="modal fade" id="modalFormActualizarPuesto" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Puesto</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- formularios -->
      <div class="tile">
          <div class="tile-body">
            <form action="Puestos_controll.php" id="formRol" name="formRol" method="POST">
            


              
    
                  <div class="form-group">
                    <label class="control-label">Nombre Puesto</label>
                    <input class="form-control" type="text" id="txtnombre" name="txtnombre" placeholder="nombre" required="">
                  </div>
      
                
                <div class="form-group">
                      <label for="exampleSelect1">Experiencia Requerida</label>
                      <select class="form-control" id="liststatus" name="listsector" required="">
                        <option value="1">Logistica</option>
                        <option value="2">Marketing</option>
                        <option value="3">Ventas</option>
                        <option value="5">RRHH</option>
                        <option value="6">Gestion</option>
                      </select>
                  </div>
                
              
              <hr>
               
                  <label for="exampleSelect1">ctrl + click </label>
                  <div class="form-group">
                        <label>Habilidades</label>
                        <select multiple class="custom-select">
                          <?php
                          while($row = $arr2->fetch_assoc()){
                            
                          ?>
                          <option><?php echo $row['nombre_habilidad'] ?></option>
                          
                          
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                  
                  <hr>

                  <label for="exampleSelect1">Psicofisico</label>
               <div class="row">
               
               <div class="col-3">
                    <!-- radio -->
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Examen visual</label>
                        </div>
                    
                    
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Evaluacion fisica</label>
                        </div>
                    </div>
                  </div>
         
              
              <div class="col-4">      
              <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Alergias</label>
                        </div>
                    
              
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Lesiones</label>
                        </div>
                    </div>
             </div>

             <div class="col-5">      
              <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Problemas cardiacos</label>
                        </div>
                    
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Examen Psicofisico</label>
                        </div>
                    </div>
             </div>

</div>

            <!--<div class="form-group">
                      <label for="exampleSelect1">Sexo</label>
                      <select class="form-control" id="liststatus" name="liststatus" required="">
                        <option value="1">Masculino</option>
                        <option value="0">Femenino</option>
                        
                      </select>
                      
                  </div>-->
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
</div>

