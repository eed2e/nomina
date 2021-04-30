<?php include_once "include/header.php";
include "../conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['departamento']) ) {
        $alert = '<div class="alert alert-danger" role="alert">
                                    Todo los campos son obligatorio
                                </div>';
    } else {
        $departamento = $_POST['departamento'];
        $query_insert = mysqli_query($conexion, "INSERT INTO departamentos(nombre) values ('$departamento')");
    }
    mysqli_close($conexion);
}
?>
                        <div class="content"> 
        <div class="page-header">
            <div class="page-block">
                <h1 class= "text-center">PERCEPCIONES</h1>
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
                                <th>Descripcion</th>
                                <th>Monto</th>
                                <th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php
                    $query = mysqli_query($conexion, "SELECT * FROM percepciones");
				    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                    while ($row = mysqli_fetch_assoc($query)){
                      echo "
                        <tr>
                          <td>".$row['id_per']."</td>
                          <td>".$row['descripcion']."</td>
                          <td>".number_format($row['monto'], 2)."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id_per']."'><i class='fa fa-edit'></i> Editar</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id_per']."'><i class='fa fa-trash'></i> Eliminar</button>
                          </td>
                        </tr>
                      ";
                    }
                    }?>
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
                                                        <h4 class="modal-title text-center" id="myModalLabel">Nuevo Percepcion</h4>
                                                            
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
                                                                            <input type="text" name="sm" id="sm" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Sueldo Mensual</label>
                                                                        </div>
                                                                        <div>
                                                                            <p>Salario diario</p>
                                                                            <input class="form-control" id="sd" name="sd" type="text" placeholder="salario diario" aria-label="Disabled input example" disabled readonly>
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
            </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Modal -->
 <!-- Carga de Imagen -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            [].forEach.call(document.querySelectorAll('.dropimage'), function(img) {
                img.onchange = function(e) {
                    var inputfile = this,
                        reader = new FileReader();
                    reader.onloadend = function() {
                        inputfile.style['background-image'] = 'url(' + reader.result + ')';
                    }
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        });
    </script>
    <!-- Traducir calendario -->
    <script>
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '< Ant',
            nextText: 'Sig >',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function() {
            $("#fecha").datepicker();
        });
    </script>
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
<!-- slimscroll js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="assets/pages/widget/amchart/gauge.js"></script>
<script src="assets/pages/widget/amchart/serial.js"></script>
<script src="assets/pages/widget/amchart/light.js"></script>
<script src="assets/pages/widget/amchart/pie.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js "></script>
                                         </div>
    <!-- Carga de Imagen -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
  [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
    img.onchange = function(e){
      var inputfile = this, reader = new FileReader();
      reader.onloadend = function(){
        inputfile.style['background-image'] = 'url('+reader.result+')';
      }
      reader.readAsDataURL(e.target.files[0]);
    }
  });
});
    </script> 
    <!-- Traducir calendario -->
    <script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);

</script>

</body>

</html>