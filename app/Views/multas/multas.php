<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Multas</h1>
                        <div>
                            <p> 
                                <a href="<?php echo base_url(); ?>/multas/nuevo" class="btn btn-info">Agregar</a>
                                <a href="<?php echo base_url(); ?>/multas/eliminados" class="btn btn-warning">Eliminados</a>
                            </P>
                        </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Articulo</th>
                                                <th>Descripción</th>
                                                <th>Uma</th>
                                                <th>Costo</th>
                                                <th>fecha_alta</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                       
                                        <tbody>
                                 
                                        <?php foreach($datos as $dato) { ?>
                                                <tr>
                                               
                                                    <td><?php echo $dato['Articulo']; ?></td>
                                                    <td><?php echo $dato['Descripción']; ?></td>
                                                    <td><?php echo $dato['Uma']; ?></td>
                                                    <td><?php echo $dato['Costo']; ?></td>
                                                    <td><?php echo $dato['fecha_alta']; ?></td>
                                                    
                                                    
                                                   

                                                    <td><a href="<?php echo base_url(). '/multas/editar/'.$dato
                                                    ['id']; ?> 
                                                    class="btn btn-warning">
                                                    <i class="fas fa-pen-square">
                                                    </i></a></td>

                                                    <td><a href="<?php echo base_url(). '/multas/eliminar/'.$dato
                                                    ['id']; ?>  
                                                    class="btn btn-danger">
                                                    <i class="fas fa-trash-alt">
                                                    </i></a></td>

                                                
                                                   
                                                   
                                                </tr>

                                                <?php } ?>
                                    
                                        </tbody>


                                    </table>
                                </div>
                          
                    </div>
                </main>
                