<div class="modal fade" id="modalFormNuevoCalf" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Nueva Calificacion</h5>
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
                    <label class="control-label">N° legajo</label>
                    <input class="form-control" type="number" id="txtnombre" name="txtnombre" placeholder="Nuemro de legajo" required="">
                  </div>
      <hr>
                <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label for="exampleSelect1">Puntualidad</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                               
                            </select>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label for="exampleSelect1">Cumplimiento de Normas</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                               
                            </select>
                            </div>
                            </div>
                            
                </div>
                <div class="row">
                           
                            <div class="col-3">
                            <div class="form-group">
                            <label for="exampleSelect1">PP</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                                 
                            </select>
                            </div>
                            </div>
                            <div class="col-4">
                            <div class="form-group">
                            <label for="exampleSelect1">Compañerismo</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                               
                            </select>
                            </div>
                            </div>
                            <div class="col-5">
                            <div class="form-group">
                            <label for="exampleSelect1">APT</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                                 
                            </select>
                            </div>
                            </div>
                </div>
                <div class="row">
                           
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label for="exampleSelect1">Responsabilidiad</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                                
                            </select>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label for="exampleSelect1">Iniciativa</label>
                            <select class="form-control" id="liststatus" name="liststatus" required="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>  
                                <option value="5">5</option>                                
                            </select>
                            </div>
                            </div>
                        
                </div>
              
                <hr>
               
                  
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
