<form class="form-horizontal" method="post" action="<?php echo URL ?>repuesto/crearrepuesto">
    <fieldset>

        <!-- Form Name -->
        <legend>Repuesto - Crear</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre</label>
            <div class="col-md-8">
                <input id="nombre" name="nombre" type="text" placeholder="Nombre del repuesto" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="valor">Valor</label>
            <div class="col-md-8">
                <input id="valor" name="valor" type="text" placeholder="Valor del repuesto" class="form-control input-md" required="">

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
