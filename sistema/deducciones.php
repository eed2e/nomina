<?php include_once "include/header.php"; ?>
<!-- Page-header end -->
<div class="content"> 
    <div class="page-header">
        <div class="page-block">
            <h1 class= "text-center">Deducciones</h1>
            <!-- Button to trigger modal -->
            <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">
                Nuevo
            </button>  
        </div>
    </div>
    <div class="card-block table-border-style">
        <table class="table  table-striped table-bordered " id="table" >
            <thead class="thead-dark">
                <tr>
                    <th>Descripcion</th>
                    <th>Monto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../conexion.php";
                $query = mysqli_query($conexion, "SELECT * FROM deducciones");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $data['descripcion']; ?></td>
                            <td><?php echo $data['monto']; ?></td>
                        </tr>
                    <?php }
                } ?>
            </tbody>

        </table>
        <!-- Page-header end -->
    </div>

    <!-- Modal -->
    
    <div class="modal fade" id="modalForm" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">X</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <br>
                    <h4 class="modal-title text-center" id="myModalLabel">Nueva deduccion</h4>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form action="login.php" method="post" class="md-float-material form-material">
                        <div class="text-center">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="form-group form-primary">
                                    <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Descripcion</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Monto</label>
                                </div>
                                <div class="row">

                                    <div class="col-md-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Registrar</button>
                </div>
            </div>
        </div>

        <!-- Page-body end -->
    </div>
    <div id="styleSelector"> </div>
</div>
</div>
</div>
</div>
</div>