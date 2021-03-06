<?php if($detalles_mecanico){ ?>
    <?php foreach ($detalles_mecanico as $mecanico) { ?>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2>Editar mecanico</h2>
                        <div class="form-validation">
                            
                            <?php echo form_open("principal/editar_mecanico/".$mecanico['id_mecanico'], "id='form_editor'"); ?>
                                
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="nombre">Nombre</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $mecanico['nombre']; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-succes">Editar</button>
                                        <a href="<?php echo base_url(); ?>mecanicos" class="btn btn-danger">Cancelar</a>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>