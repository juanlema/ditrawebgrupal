<form id="crearPersonal" class="form-horizontal" action="<?php echo URL; ?>personal/crearpersonal" method="POST">
    <fieldset>

        <!--Form Name-->
        <legend> Personal - Crear</legend>

        <!--Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="documento"> Documento</label>
            <div class="col-md-8">
                <input id="documento" name="documento" type="text" placeholder="Número de documento de identificación"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!--Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nombreCompleto"> Nombre completo </label>
            <div class="col-md-8">
                <input id="nombreCompleto" name="nombreCompleto" type="text" placeholder="Nombre completo"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!--Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email"> Email</label>
            <div class="col-md-8">
                <input id="email" name="email" type="email" placeholder="Correo electrónico"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!--Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="col-md-4">
                <button id="enviar" name="enviar" class="btn btn-success"> Crear</button>
            </div>
        </div>

    </fieldset>
</form>
