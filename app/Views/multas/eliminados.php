<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Multas</h1>
            <div>
                <p>
                    
                    <a href="<?php echo base_url(); ?>/multas" class="btn btn-warning">Eliminados</a>
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
                            <th>Fecha de alta</th>
                            <th>Reingresar</th>
                            
                            

                        </tr>
                    </thead>


                    <tbody>

                        <?php foreach ($datos as $dato) { ?>
                        <tr>

                            <td><?php echo $dato['Articulo']; ?></td>
                            <td><?php echo $dato['Descripción']; ?></td>
                            <td><?php echo $dato['Uma']; ?></td>
                            <td><?php echo $dato['Costo']; ?></td>
                            <td><?php echo $dato['fecha_alta']; ?></td>
                            



                            
                              <td><a href="#" data-href="<?php echo base_url() . '/multas/reingresar/' . $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" 
                            data-placement="top" title="Reingresar multa" class="btn btn-danger">
                                    <i class="fas fas fa-undo">
                                    </i></a></td>




                        </tr>

                        <?php } ?>

                    </tbody>


                </table>
            </div>

        </div>
    </main>

        <!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reingresar multa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea reingresar este multa? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
        <a class="btn btn-danger btn-ok">Si</a>
      </div>
    </div>
  </div>
</div>