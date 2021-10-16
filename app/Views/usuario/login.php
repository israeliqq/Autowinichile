
<!-- PLANTILLA HEADER -->
    <?=$header; ?> 
<!-- /PLANTILLA HEADER -->  

<div class="row" style="margin-top:60px;"></div>

    <div class="row">

        <!-- FORMULARIO INGRESAR -->
        <div class="col-md-6">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="card">
                        <div class="card-header"><strong>Ingresar</strong></div>
                        <div class="card-body">
                            <form method="post" action="<?=site_url('Login/ingresar'); ?>" enctype="multipart/form-data">
                                <div class="form-group"><label class="text-muted">Email</label><input type="email" class="form-control"> 
                                    <small class="form-text text-muted">No compartiremos tu correo con nadie</small>
                                </div>
                                <div class="form-group"><label class="text-muted">Password</label><input type="password" class="form-control"> 
                                    <small class="form-text text-muted">Su contraseña se guarda en forma encriptada</small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check"><input type="checkbox" class="form-check-input"><label class="form-check-label">Recordar</label></div>
                                </div> 
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- /FORMULARIO INGRESAR -->

        <!-- FORMULARIO REGISTRAR -->
        <div class="col-md-6">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="card">
                        <div class="card-header"><strong>Registrar</strong></div>
                        <div class="card-body">
                        <form method="post" action="<?=site_url('Login/registrar'); ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="text-muted">Email address</label>
                                    <input type="email" name="email" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Password</label>
                                    <input type="password" name="pass1" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Re Password</label>
                                    <input type="password" name="pass2" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Nombre</label>
                                    <input type="text" name="nombre" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" > 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">RUT</label>
                                    <input type="text" name="rut" class="form-control" > 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Pais</label>
                                    <input type="text" name="pais" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Región</label>
                                    <input type="text" name="region" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Ciudad</label>
                                    <input type="text" name="ciudad" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control"> 
                                </div>

                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- /FORMULARIO REGISTRAR -->

        <?php print_r($usuario); ?> <br>

</div>

<!-- /PLANTILLA FOOTER -->  
    <?=$footer; ?> 
<!-- /PLANTILLA FOOTER -->  