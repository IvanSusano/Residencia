<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Reglamento</h1>
                        <?php \Config\Services::validation()->listErrors();?>
                                <form method="POST" action="<?php echo base_url(); ?>/reglamento/insertar">
                                <?php csrf_field(); ?>
                          
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Titulo</label>
                                        <input class="form-control" id="titulo" name="titulo" type="text"
                                        autofocus required />
                            </div>

                                    <div class="col-12 col-sm-6">
                                    <label>Capitulo</label>
                                    <input class="form-control" id="capitulo" name="capitulo" type="text"
                                    autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                    <label>Artículo</label>
                                    <input class="form-control" id="artículo" name="artículo" type="text"
                                    autofocus required />
                                    </div>

                                <div class="col-12 col-sm-6">
                                    <label>Descripción</label>
                                    <input class="form-control" id="descripción" name="descripción" type="text"
                                    autofocus required />
                                </div>

                                </div>
                          </div>
                            </div>

                        <a href="<?php echo base_url(); ?>/reglamento" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </main>
