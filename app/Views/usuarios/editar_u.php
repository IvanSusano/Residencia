<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Usuarios</h1>
                
                                <form method="POST" action="<?php echo base_url(); ?>/usuarios/actualizar"
                                >
                               
                                <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />
                          
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-12 colsm-6">
                                        <label>Id</label>
                                        <input class="form-control" id="id" name="id" type="text"
                                        value="<?php echo $datos['id']; ?>" autofocus require />
                            </div>

                                    <div class="col-12 colsm-6">
                                    <label>Usuario</label>
                                    <input class="form-control" id="usuarios" name="usuarios" type="text"
                                    value="<?php echo $datos['usuarios']; ?>"/>

                          </div>
                    </div>

                        <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </main>
