<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Multas</h1>
                
                                <form method="POST" action="<?php echo base_url(); ?>/multas/actualizar"
                                >
                               
                                <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />
                          
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-12 colsm-6">
                                        <label>Articulo</label>
                                        <input class="form-control" id="articulo" name="articulo" type="text"
                                        value="<?php echo $datos['Articulo']; ?>" autofocus require />
                            </div>

                                    <div class="col-12 colsm-6">
                                    <label>Descripción</label>
                                    <input class="form-control" id="descripción" nambre="Descripción" type="text"
                                    value="<?php echo $datos['Descripción']; ?>"autofocus require />

                                    <div class="col-12 colsm-6">
                                    <label>Uma</label>
                                    <input class="form-control" id="uma" nambre="uma" type="text"
                                    value="<?php echo $datos['Uma']; ?>" autofocus require />

                                </div>

                                <div class="col-12 colsm-6">
                                    <label>Costo</label>
                                    <input class="form-control" id="Costo" nambre="Costo" type="text"
                                    value="<?php echo $datos['Costo']; ?>"autofocus require />
 
                                   
 
                                </div>
                          </div>
                    </div>

                        <a href="<?php echo base_url(); ?>/multas" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </main>
