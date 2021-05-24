<?php include_once "include/header.php"; ?>
<!-- Page-header end -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
<div class="content"> 
    <div class="page-header">
        <div class="page-block">
            <h1 class= "text-center">Vacaciones</h1>
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
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Inicio de vacaciones</th>
                    <th>Fin de vacaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../conexion.php";
                $query = mysqli_query($conexion, "SELECT * FROM vacaciones");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $data['id_empleado']; ?></td>
                            <td><?php echo $data['nombre']; ?> <?php echo $data['apellido_paterno']; ?> <?php echo $data['apellido_materno']; ?></td>
                            <td><?php echo $data['inicio_v']; ?></td>
                            <td><?php echo $data['fin_v']; ?></td>                           
                            <td><a href="baja_vacaciones.php?id=<?php echo $data['id_empleado']; ?>"style="border-radius:20px">Baja</a>
                            <!-- Button to trigger modal -->
                                <div onClick="loadDynamicContentModal('mysql')"class="btn waves-effect waves-light btn-grd-info btn-round">Editar</div>
                                                       
                            </td>
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
                        <span class="sr-only">Cerrar</span>
                    </button>
                    <br>
                    <h4 class="modal-title text-center" id="myModalLabel">Registro de Vacaciones</h4>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form action="registrar_vacaciones.php" method="post" class="md-float-material form-material">   
                        <div class="auth-box card">
                            <div class="card-block" class="row">
                                <H6>Selecciona al empleado</H6>
                               <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="empleado_v" name="empleado_v" style="border-radius:15px;"> 
                                    <?php
                                        include "../conexion.php";  
                                            $query = mysqli_query($conexion, "SELECT * FROM empleados");
                                            $result = mysqli_num_rows($query);  
                                            if ($result > 0) {
                                                while ($data = mysqli_fetch_assoc($query)) { ?>
                                                    <option value="<?php  echo $data['id_empleado']; ?>"><?php  echo $data['nombre']; ?> <?php echo $data['apellido_paterno']; ?> <?php echo $data['apellido_materno']; ?></option>
                                                <?php } 
                                            }
                                    ?>
                                </select>
                            
                                <br>
                                <div class="form-group form-primary" class="col">
                                    <label for="fecha">
                                        <br>
                                        <H6>Inicio de Vacaciones:</H6>                                 
                                         <input center type="date" name="fecha_i" id="fecha_i" stylerequired style="border-radius:15px;" class="form-control">
                                        
                                     </label>
                                 </div>
                                <div class="form-group form-primary" class="col">
                                    <label for="fecha">
                                        
                                        <H6>Fin de Vacaciones:</H6>                                 
                                         <input center type="date" name="fecha_f" id="fecha_f" stylerequired style="border-radius:15px;" class="form-control">
                                     </label>
                                 </div>

                                <div class="row">

                                    <div class="col-md-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>

                                  <!-- Modal 2 -->
                <!-- Modal Footer -->
               <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
               </div>
            </div>
        </div>
            </form>

        <!-- Page-body end -->
    </div>
    <div id="styleSelector"> </div>
</div>
