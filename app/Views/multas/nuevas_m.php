<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Multas</h1>
                        <?php \Config\Services::validation()->listErrors();?>
                                <form method="POST" action="<?php echo base_url(); ?>/multas/insertar">
                                <?php csrf_field(); ?>
                               
                          
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Articulo</label>
                                        <input class="form-control" id="Articulo" name="Articulo" type="text"
                                        autofocus required />
                            </div>

                                    <div class="col-12 col-sm-6">
                                    <label>Descripción</label>
                                    <input class="form-control" id="Descripción" name="Descripción" type="text"
                                    autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                    <label>Uma</label>
                                    <input class="form-control" id="Uma" name="Uma" type="text"
                                    autofocus required />
                                    </div>

                                <div class="col-12 col-sm-6">
                                    <label>Costo</label>
                                    <input class="form-control" id="Costo" name="Costo" type="text"
                                    autofocus required />
                                </div>

                                

                                </div>
                          </div>
                            </div>

                        <a href="<?php echo base_url(); ?>/multas" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </main>
