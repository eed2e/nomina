<?PHP
session_start();
if (empty($_SESSION['active'])) {
    header('location: ../');
}
include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        NOMINAS
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.min.css" rel="stylesheet" />


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/picnic.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">




    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 style="color:white">DIGITALNET</h5>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/faq_man.png" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION['nombre']; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                                    <li class="waves-effect waves-light">
                                        <a href="salir.php">
                                            <i class="ti-layout-sidebar-left"></i> cerrar sesion
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/faq_man.png" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $_SESSION['nombre']; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">

                                            <a href="salir.php"><i class="ti-layout-sidebar-left"></i>cerrar sesion</a>
                                            <a href="pass.php"><i class="ti-user"></i>Cambiar contraseña</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">

                            </div>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li><li class="">
                                    <a href="usuarios.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Usuarios</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                               
 </ul>
                        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Empleados</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="agregar_empleado.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Lista de empleados</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            
                    
                        </ul>
                    
                        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Departamentos</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="departamento.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Departamentos</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            
                    
                        </ul>
                    
                        <div class="pcoded-navigation-label" data-i18n="nav.category.other">Nominas</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="vacaciones.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-truck"></i><b>M</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Vacaciones</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <a href="pago.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-money"></i><b>M</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">pago</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                  
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">

                        <!-- Page-header end -->
                        <div class="content">
                            <div class="page-header">
                                <div class="page-block">
                                    <!-- Button to trigger modal -->
                                    <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">
                                        Nuevo
                                    </button>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <table class="table  table-striped table-bordered " id="table">
                                    <thead class="thead-dark">
                                    <?php
                                        include "../conexion.php";

                                        $query = mysqli_query($conexion, "SELECT * FROM usuarios");
                                        $datos = mysqli_fetch_assoc($query)
                                        ?>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <?php if($_SESSION['rol']==3){ ?>
                                            <th>Contraseña</th>
                                            <?php }?>
                                            <th>acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_num_rows($query);
                                        if ($result > 0) {
                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                <tr>
                                                    <td><?php echo $data['id']; ?></td>
                                                    <td><?php echo $data['nombre']; ?></td>
                                                    <?php if($_SESSION['rol']==3){ ?>
                                                    <td><?php echo $data['pass']; ?></td>
                                                    <?php }?>
                                                    <td><a href="baja_empleado.php?id=<?php echo $data['id_empleado']; ?>" class="btn btn-danger" style="border-radius:20px">Baja </a>
                                                    <!-- Button to trigger modal -->
                                                     <button onclick='editar_empleado(
                                                    <?php echo $data["id"];?> , 
                                                    
                                                    "<?php echo $data["nombre"];?>",
                                                    "<?php echo $data["pass"];?>",
                                                    "<?php echo $data["apellido_materno"];?>",
                                                    <?php echo $data["fecha_ingreso"];?>,
                                                    <?php echo $data["sueldo_mensual"];?>,
                                                    <?php echo $data["sueldo_diario"];?>,
                                                    "<?php echo $data["departamento"];?>",
                                                    "<?php  echo $data["frecuencia_pago"];?>",
                                                    )' class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modal_editar">
                                                        Editar
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
                                                <span class="sr-only">Cerrar</span>
                                            </button>
                                            <br>
                                            <h4 class="modal-title text-center" id="myModalLabel">Nuevo Usuario</h4>

                                        </div>
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p class="statusMsg"></p>
                                            <form action="add_usuario.php" method="POST" class="md-float-material form-material" enctype="multipart/form-data">
                                                <div class="auth-box card">
                                                    <div class="card-block" class="row">
                                                        <center>
                                                            <div style="width: 200px">
                                                                <!-- this div just for demo display -->
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
                                                            <input type="text" name="pass" id="pass" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Contraseña</label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="rpass" id="rpass" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Ingrese de nuevo la Contraseña</label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <select name="rol" id="rol" class="form-control">
                                                                <?php
                                                                $query_rol = mysqli_query($conexion, " select * from rol");
                                                                mysqli_close($conexion);
                                                                $resultado_rol = mysqli_num_rows($query_rol);
                                                                if ($resultado_rol > 0) {
                                                                    while ($rol = mysqli_fetch_array($query_rol)) {
                                                                ?>
                                                                        <option value="<?php echo $rol["id_rol"]; ?>"><?php echo $rol["nombre"] ?></option>
                                                                <?php

                                                                    }
                                                                }

                                                                ?>
                                                            </select>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">rol</label>
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
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <!-- Page-body end -->
                            </div><!-- Modal -->

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
                <h4 class="modal-title text-center" id="myModalLabel">Nuevo Usuario</h4>

            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="add_empleado.php" method="POST" class="md-float-material form-material" enctype="multipart/form-data">
                    <div class="auth-box card">
                        <div class="card-block" class="row">
                            <center>
                                <div style="width: 200px">
                                    <!-- this div just for demo display -->
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
                                <input type="text" name="nombre" id="nombre_editar" class="form-control" required>
                                <span class="form-bar"></span>
                                <label class="float-label">Nombre(s)</label>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
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

   
        <script type="text/javascript">
            // funcion que se ejecuta cada vez que se selecciona una opción

        </script>
        <!-- Traducir calendario -->
        
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
    

</body>

</html>