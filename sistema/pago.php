<?php include_once "include/header.php"; ?>


                        <!-- Page-header end -->
                        <div class="content">
                            <div class="page-header">
                                <div class="page-block">
                                    <!-- Button to trigger modal -->
                                    <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">
                                        Generar pago
                                    </button>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <table class="table  table-striped table-bordered " id="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>foto</th>
                                            <th>Nombre</th>
                                            <th>fecha ingreso</th>
                                            <th>Salario Mensual</th>
                                            <th>Salario diario</th>
                                            <th>Departamento</th>
                                            <th>estatus</th>
                                            <th>acciones</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../conexion.php";

                                        $query = mysqli_query($conexion, "SELECT * FROM empleados");
                                        $result = mysqli_num_rows($query);
                                        if ($result > 0) {
                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                <tr>
                                                    <td><?php echo $data['id_empleado']; ?></td>
                                                    <td><img width="130px" height="110px" src =" <?php echo $data['foto'] ?> "></td>
                                                    <td><?php echo $data['nombre']; ?> <?php echo $data['apellido_paterno']; ?> <?php echo $data['apellido_materno']; ?></td>
                                                    <td><?php echo $data['fecha_ingreso']; ?></td>
                                                    <td><?php echo $data['sueldo_mensual']; ?></td>
                                                    <td><?php echo $data['sueldo_diario']; ?></td>
                                                    <td><?php echo $data['departamento']; ?></td>
                                                    <td><?php if ($data['status'] == 1) {
                                                            echo "activo";
                                                        } else {
                                                            echo "inactivo";
                                                        } ?></td>
                                                    <td>
                                                    <!-- Button to trigger modal -->
                                                    <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">
                                                    Configurar Nomina
                                                    </button>
                                                       
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
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <br>
                                            <h4 class="modal-title text-center" id="myModalLabel">Configurar Nomina</h4>

                                        </div>
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p class="statusMsg"></p>
                                            <form action="add_empleado.php" method="POST" class="md-float-material form-material" enctype="multipart/form-data">
                                                <div class="auth-box card">
                                                    <div class="card-block" class="row">
                                                        <div class="card-block" class="row">
                                                        <center>
                                                            <h4>Asistencia</h4>
                                                        </center>
                                                            <hr>
                                                            <div class="form-check" >
                                                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Lunes
                                                            </label>
                                                            </div>
                                                            <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Martes
                                                            </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"    id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Miercoles
                                                                </label>
                                                            </div>                                                            
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"    id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Jueves
                                                                </label>
                                                            </div>                                                            
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"    id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Viernes
                                                                </label>
                                                            </div>                                                            
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"    id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Sabado
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked >
                                                                 <label class="form-check-label" for="flexCheckChecked">
                                                                  Domingo
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <center>
                                                            <h4>Persepciones</h4>
                                                        </center>
                                                        <hr>
                                                        
                                                        <div class="field_wrapper">
                                                            <div class="form-group form-primary">
                                                                
                                                                <input type="text" name="field_name[]" class="form-control" placeholder="Nombre" value="" style="margin-left = 45%;" />
                                                                <input type="text" name="field_name[]" class="form-control" placeholder="Cantidad" value="" style="margin-right = 45%;" />
                                                                <br>
                                                                <p></p>
                                                                <center>
                                                                    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="ti-plus"></i></a>
                                                                </center>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <br>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="ap" id="ap" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Apellido Paterno</label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="am" id="am" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Apellido Materno</label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input onblur='autorrelleno();' type="text" name="sm" id="sm" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Sueldo Mensual</label>
                                                        </div>
                                                        <div>
                                                            <p>Salario diario</p>
                                                            <input class="form-control" id="sd" name="sd" type="text" placeholder="salario diario" aria-label="Disabled input example" disabled readonly>
                                                        </div>
                                                        <br>
                                                        <div class="form-group form-primary" class="col">
                                                            <label for="fecha">
                                                                Fecha de ingreso:<input type="date" name="fecha" id="fecha" style="border-radius:10px;" required>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <p>Departamento</p>
                                                            <select class="form-select" aria-label="Default select example" id="dep" name="dep" style=" border-radius:10px;" required>

                                                                <?php
                                                                include "../conexion.php";
                                                                $query = mysqli_query($conexion, "SELECT * FROM departamentos");
                                                                $result = mysqli_num_rows($query);
                                                                if ($result > 0) {
                                                                    while ($data = mysqli_fetch_assoc($query)) { ?>
                                                                        <option><?php echo $data['nombre']; ?></option>
                                                                <?php }
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                        <br>
                                                        <div>
                                                            <p>Frecuencia de pago</p>
                                                            <select class="form-select" id="fp" name="fp" aria-label="Default select example" style=" border-radius:10px;" required>
                                                                <option selected>Seleccionar</option>
                                                                <option value="7">Semanal</option>
                                                                <option value="14">Catorcenal</option>

                                                            </select>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-2">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <!-- Page-body end -->
                            </div>
                            <div class="modal fade" id="modal_editar" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true">X</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                        <br>
                                                        <h4 class="modal-title text-center" id="myModalLabel">Nuevo Empleado</h4>
                                                            
                                                        </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                        <form action="add_empleado.php" method="POST" class="md-float-material form-material">
                                                                <div class="auth-box card">
                                                                    <div class="card-block">
                                                                        <center>
                                                                            <div style="width: 200px" > <!-- this div just for demo display -->
                                                                                <label class="dropimage miniprofile" style=" border-radius: 50%; padding-bottom: 75%; heigth:2px; width:145px;">
                                                                                <input name="image" title="Drop image or click me" type="file" id="imagen">
                                                                                </label>
                                                                            </div>
                                                                        </center>

                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="id" id="id" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">ID</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Nombre(s)</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="ap" id="ap" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Apellido Paterno</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="am" id="am" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Apellido Materno</label>
                                                                        </div>                                                       
                                                                        <div class="form-group form-primary">
                                                                            <input onblur = 'autorrelleno();' type="text" name="sm" id="sm" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label" >Sueldo Mensual</label>
                                                                        </div>
                                                                        <div>
                                                                            <p>Salario diario</p>
                                                                            <input class="form-control" id="sd" name="sd" type="text" value="salario diario" aria-label="Disabled input example" disabled readonly>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-group form-primary">
                                                                            <label for="fecha" >
                                                                            Fecha de ingreso:<input type="date" name="fecha" id= "fecha" style = "border-radius:10px;" required >
                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <p>Departamento</p>
                                                                                <select class="form-select" aria-label="Default select example" id="dep" name="dep" style=" border-radius:10px;" required>
                                                                                   
                                                                                    <?php
                                                                                        include "../conexion.php";
                                                                                        $query = mysqli_query($conexion, "SELECT * FROM departamentos");
                                                                                        $result = mysqli_num_rows($query);  
                                                                                        if ($result > 0) {
                                                                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                                                                <option><?php echo $data['nombre']; ?></option>
                                                                                            <?php } 
                                                                                        }
                                                                                    ?>
                                                                                    
                                                                                </select>
                                                                        </div>
                                                                        <br>
                                                                        <div>
                                                                            <p>Frecuencia de pago</p>
                                                                                <select class="form-select" id="fp" name="fp" aria-label="Default select example" style=" border-radius:10px;" required>
                                                                                    <option selected>Seleccionar</option>
                                                                                    <option value="7">Semanal</option>
                                                                                    <option value="14">Catorcenal</option>
                                                                                    
                                                                        </select>
                                                                        </div>
                                                                        
                                                                        <div class="row">

                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                    </div>
                                                    
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary submitBtn" >Guardar</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>

                                    <!-- Page-body end -->
                                </div>
   
                            <div id="styleSelector"> </div>
                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 99; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" class="form-control" placeholder="Nombre" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"></i></a><i> </i><input type="text" name="field_name[]" class="form-control" placeholder="Nombre" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><center><i class="ti-trash"></i></center></a></div>';
   
    //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
        