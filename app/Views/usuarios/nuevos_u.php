<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Usuarios</h1>
                        <?php \Config\Services::validation()->listErrors();?>
                                <form method="POST" action="<?php echo base_url(); ?>/usuarios/insertar">
                                <?php csrf_field(); ?>
                          
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Usuario</label>
                                        <input class="form-control" id="usuarios" name="usuarios" type="text"
                                        value="<?php echo set_value('usuarios') ?>"
                                        autofocus required />
                            </div>

                                

                                    <div class="col-12 col-sm-6">
                                    <label>Contraseña</label>
                                    <input class="form-control" id="password" name="password" type="password"
                                    value="<?php echo set_value('password') ?>"
                                    autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                    <label>Repite contraseña</label>
                                    <input class="form-control" id="repassword" name="repassword" type="password"
                                    value="<?php echo set_value('repassword') ?>"
                                    autofocus required />
                                    </div>

                               <div class="form-group">
                                <div class="row">   
                                <div class=" col-12 ">
                                    <label>Roles</label>
                                    <select class="form-control" id="id_roles" name="id_roles" required>
                                    <option value = "">Seleccionar roles</option>
                                    <?php foreach ($roles as $rol) {?>
                                    <option value="<?php echo $rol['id']; ?>"> <?php echo $rol['nombre']; ?></option>
                                    <?php } ?>
                                    </select>
                                
                                </div>
                                
                                </div>
                                </div>

                                </div>
                          </div>
                            </div>

                        <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </main>