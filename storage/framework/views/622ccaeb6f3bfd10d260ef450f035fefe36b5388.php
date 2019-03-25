<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal agregar Traslado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="sucursakOrigen">Sucursal Origen</label>
                    <select class="form-control" id="sucursakOrigen">
                    <option>Sucursal Origen 1</option>
                    <option>Sucursal Origen 2</option>
                    <option>Sucursal Origen 3</option>
                    <option>Sucursal Origen 4</option>
                    <option>Sucursal Origen 5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fdestino">Fecha de destino</label>
                    <input type="text" class="form-control" id="fdestino">
                </div>

                <div class="form-group">
                    <label for="trasporte">Trasporte</label>
                    <select class="form-control" id="trasporte">
                    <option>Trasporte 1</option>
                    <option>Trasporte 2</option>
                    <option>Trasporte 3</option>
                    <option>Trasporte 4</option>
                    <option>Trasporte 5</option>
                    </select>
                </div>

            </div>
            
            <div class="col">
                <div class="form-group">
                    <label for="fdestino">Fecha de destino</label>
                    <input type="text" class="form-control" id="fdestino">
                </div>

                <div class="form-group">
                    <label for="sucursalDestino">Sucursal Destino</label>
                    <select class="form-control" id="sucursalDestino">
                    <option>Sucursal Destino 1</option>
                    <option>Sucursal Destino 2</option>
                    <option>Sucursal Destino 3</option>
                    <option>Sucursal Destino 4</option>
                    <option>Sucursal Destino 5</option>
                    </select>
                </div>
                
               
                <div class="form-group">
                    <label for="tipoMovimiento">Tipo de movimiento</label>
                    <select class="form-control" id="tipoMovimiento">
                    <option>Tipo de movimiento 1</option>
                    <option>Tipo de movimiento 2</option>
                    <option>Tipo de movimientoo 3</option>
                    <option>Tipo de movimiento 4</option>
                    <option>Tipo de movimiento 5</option>
                    </select>
                </div>
            </div>
        </div>
        </form>
    
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php /* C:\laragon\www\traslados\resources\views/componentes/modal.blade.php */ ?>