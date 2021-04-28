<?php
include_once "include/header.php";
?>

<head>
    
    </head>
    <div class="page-header">
                        <div class="page-block">
                        <h1 class= "text-center">DEPARTAMENTOS</h1>
                            <div class="row align-items-center form-group row">
                                
                                <div class="col-sm-6">
                                <form action="" method="post" autocomplete="off">
                                <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">Nuevo</button>
                                    <input type="text" placeholder="Ingrese Nombre" name="departamento" id="departamento" class="form-control " style = "border-radius: 15px;">
                                            
                                </div>
                                <div class="col-sm-1">
                                </div>
                            


    <div class="content"> 
        <div class="page-header">
            <div class="page-block">
    <!-- Button to trigger modal -->
                <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">
                Nuevo
                </button>  
            </div>
        </div>
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
                                                        </div>
                                                    <div>
                                                    <center>
                                                        <h4 class="modal-title" id="myModalLabel">Nuevo Empleado</h4>
                                                            </center>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                        <form action="login.php" method="post" class="md-float-material form-material">
                                                                <div class="text-center">
                                                                </div>
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
                                                                            <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">nombre(s)</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">apellido Paterno</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">apellido Materno</label>
                                                                        </div>                                
                                                                        <div class="form-group form-primary">
                                                                            <label for="fecha" >Fecha:
                                                                                <div id="datepicker"></div>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="password" name="clave" id="clave" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Contraseña</label>
                                                                        </div>
                                                                        <div class="row m-t-25 text-left">
                                                                            <div class="col-12">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row m-t-30">
                                                                            <div class="col-md-12">

                                                                                <button type="submit" class="btn btn-primary btn-md btn-block text-center m-b-20">iniciar</button>
                                                                            </div>
                                                                        </div>
                                                                        <hr/>
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
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
                                                    </div>
                                                </div>
                                            </div>
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
$(function () {
$("#fecha").datepicker();
});
</script>

    

