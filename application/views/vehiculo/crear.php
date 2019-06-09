<form class="form-horizontal" method="post" action="<?php echo URL ?>vehiculo/crearvehiculo">
    <fieldset>

        <!-- Form Name -->
        <legend>Vehículo - Crear</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="placa">Placa</label>
            <div class="col-md-8">
                <input id="placa" name="placa" type="text" placeholder="Placa del vehículo"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="marca">Marca</label>
            <div class="col-md-8">
                <input id="marca" name="marca" type="text" placeholder="Marca del vehículo"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="modelo">Modelo</label>
            <div class="col-md-8">
                <input id="modelo" name="modelo" type="text" placeholder="Modelo del vehículo"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="estado">Estado vehículo</label>
            <div class="col-md-8">
                <select id="estado" name="estado" class="form-control">
                    <?php foreach($estadosVehiculos as $e) {?>
                        <option value="<?php echo $e->ID_Estado_Vehiculo ?>"><?php echo $e->Descripcion ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tipo">Tipo vehículo</label>
            <div class="col-md-8">
                <select id="tipo" name="tipo" class="form-control">
                    <?php foreach($tiposVehiculos as $t) {?>
                        <option value="<?php echo $t->ID_Tipo_Vehiculo ?>"><?php echo $t->Descripcion ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="documentoPersonal">Documento del personal</label>
            <div class="col-md-8">
                <select id="documentoPersonal" name="documentoPersonal" class="form-control">
                    <?php foreach($personal as $p) {?>
                        <option value="<?php echo $p->Documento ?>"><?php echo $p->Nombre_Completo . ' (' . $p->Documento . ')' ?></option>
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
