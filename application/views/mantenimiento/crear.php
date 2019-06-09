<form class="form-horizontal" method="post" action="<?php echo URL ?>mantenimiento/crearmantenimiento">
    <fieldset>

        <!-- Form Name -->
        <legend>Mantenimiento - Crear</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="descripcion">Descripción</label>
            <div class="col-md-8">
                <input id="descripcion" name="descripcion" type="text" placeholder="Descripción del mantenimiento" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fecha">Fecha</label>
            <div class="col-md-8">
                <input id="fecha" name="fecha" type="text" placeholder="Fecha del mantenimiento" class="form-control input-md" required="" pattern="\d{4}-(0?[1-9]|1[012])-(0?[1-9]|[12][0-9]|3[01])">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="placa">Placa vehículo</label>
            <div class="col-md-8">
                <select id="placa" name="placa" class="form-control">
                    <?php foreach($vehiculos as $v) {?>
                        <option value="<?php echo $v->Placa ?>"><?php echo $v->Placa ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="crear"></label>
            <div class="col-md-4">
                <button id="crear" name="crear" class="btn btn-success">Crear</button>
            </div>
        </div>

    </fieldset>
</form>
