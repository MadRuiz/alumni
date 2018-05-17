<form class="form-horizontal form-label-left" action="" method="get">
  <!--id-->
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <?php
        echo "
          <input type='text' class='form-control' name='' value='".$VARIABLEDECOUNT."' readonly>
        ";
      ?>
    </div>
  </div>
  <!--Input text-->
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">NOMBRE</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control" placeholder="PLACEHOLDER" name="NAME">
    </div>
  </div>
  <!--Input number-->
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">NOMBRE</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="number" class="form-control" placeholder="PLACEHOLDER" name="NAME">
    </div>
  </div>
  <!--Select-->
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">NOMBRE</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <select class="select2_single form-control" tabindex="-1" name="NAME">
      <?php 
        while ($fila = mysqli_fetch_array($VARIABLEDEDATOS)) {
          echo "
            <option value='".$fila['IDCAMPO']."'>".$fila['NOMBRECAMPO']."</option>
          ";
        }
      ?>
      </select>
    </div>
  </div>
  <!--Textarea-->
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">NOMBRETEXTAREA<span class="required">*</span></label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <textarea class="form-control" rows="3" placeholder="..." name="NAME"></textarea>
    </div>
  </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
<button type="submit" class="btn btn-primary" value="submit" onclick="">Guardar cambios</button>
</form>