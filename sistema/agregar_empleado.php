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

    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <!--<li class="header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <i class="ti-bell"></i>
                                <span class="badge bg-c-red"></span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                <li class="waves-effect waves-light">
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">John Doe</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="waves-effect waves-light">
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Joseph William</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="waves-effect waves-light">
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Sara Soudein</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>-->
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
                                            <a href="pass.php"><i class="ti-user"></i>Cambiar contrase??a</a>
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
                                </li>
                                <!--<li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="accordion.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Accordion</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="breadcrumb.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="button.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Button</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tabs.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Tabs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="color.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Color</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="label-badge.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Label Badge</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tooltip.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tooltip</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="typography.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Typography</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notification.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Notification</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-themify.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Themify</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                            
                                </ul>
                            </li>-->
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
                                    <!--<ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                            
                                </ul>-->
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

                                        $query = mysqli_query($conexion, "SELECT * FROM empleados ORDER BY id_empleado");
                                        $result = mysqli_num_rows($query);
                                        if ($result > 0) {
                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                <tr>
                                                    <td><?php echo $data['id_empleado']; ?></td>
                                                    <td><img width="130px" height="110px" src =" <?php echo $data['foto'] ?> "></td>
                                                    <td><?php echo $data['nombre']; ?> <?php echo $data['apellido_paterno']; ?> <?php echo $data['apellido_materno']; ?></td>
                                                    <td><?php echo $data['fecha_ingreso']; ?></td>
                                                    <td><?php  $y=$data['sueldo_mensual']; $x =number_format($y, 2, '.', ',');  echo $x;?></td>
                                                    <td><?php $n=$data['sueldo_diario']; $m =number_format($n, 2, '.', ',' );  echo $m; ?></td>
                                                    <td><?php echo $data['departamento']; ?></td>
                                                    <td><?php if ($data['status'] == 1) {
                                                            echo "activo";
                                                        } else {
                                                            echo "inactivo";
                                                        } ?></td>
                                                    <td><a href="baja_empleado.php?id=<?php echo $data['id_empleado']; ?>" class="btn btn-danger" style="border-radius:20px">Eliminar </a>
                                                    <!-- Button to trigger modal -->
                                                     <button onclick='editar_empleado(
                                                     <?php  echo $data["frecuencia_pago"];?>,
                                                    "<?php echo $data["id_empleado"];?>", 
                                                    "<?php echo $data["nombre"];?>",
                                                    "<?php echo $data["apellido_paterno"];?>",
                                                    "<?php echo $data["apellido_materno"];?>",
                                                    "<?php echo $data["fecha_ingreso"];?>",
                                                    <?php echo $data["sueldo_mensual"];?>,
                                                    <?php echo $data["sueldo_diario"];?>,
                                                    "<?php echo $data["departamento"];?>",
                                                    "<?php echo $data["foto"];?>"
                                                    
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
                                            <h4 class="modal-title text-center" id="myModalLabel">Nuevo Empleado</h4>

                                        </div>
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p class="statusMsg"></p>
                                            <form action="add_empleado.php" method="POST" class="md-float-material form-material" enctype="multipart/form-data">
                                                <div class="auth-box card">
                                                    <div class="card-block" class="row">
                                                        <center>
                                                  
                                                         <td><img width="130px" height="110px" src =" <?php echo  $img['foto'] ?> "></td>
                                                            <input type="file" name="image" id="image">
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
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
                                                            <span class="sr-only">Cerrar</span>
                                                        </button>
                                                        <br>
                                                        <h4 class="modal-title text-center" id="myModalLabel">Editar Empleado</h4>
                                                            
                                                        </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                        <form action="editar_empleado.php" method="POST" class="md-float-material form-material" enctype="multipart/form-data">
                                                                <div class="auth-box card">
                                                                    <div class="card-block">
                                                                        <center>
                                                                            <div style="width: 200px" > <!-- this div just for demo display -->
                                                                                <td>
                                                                                    <img width="130px" height="110px" src =" <?php echo  $data_producto['imagen'] ?> "></td>
                                                                                    <input type="file" name="image1" id="image1">
                                                                            </div>
                                                                        </center>

                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="id_editar" id="id_editar" class="form-control">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">ID</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="nombre_editar" id="nombre_editar" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Nombre(s)</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="ap_editar" id="ap_editar" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Apellido Paterno</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="am_editar" id="am_editar" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Apellido Materno</label>
                                                                        </div>                                                       
                                                                        <div class="form-group form-primary">
                                                                            <input onblur = 'autorrelleno();' type="text" name="sm_editar" id="sm_editar" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label" >Sueldo Mensual</label>
                                                                        </div>
                                                                        <div>
                                                                            <p>Salario diario</p>
                                                                            <input class="form-control" id="sd_editar" name="sd_editar" type="text" value="salario diario" aria-label="Disabled input example" disabled readonly>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-group form-primary">
                                                                            <label for="fecha" >
                                                                            Fecha de ingreso:<input type="date" name="fecha_editar" id= "fecha_editar" style = "border-radius:10px;" required >
                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <p>Departamento</p>
                                                                                <select class="form-select" aria-label="Default select example" id="dep_editar" name="dep_editar" style=" border-radius:10px;" required>
                                                                                   
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
                                                                                <select class="form-select" id="fp_editar" name="fp_editar" aria-label="Default select example" style=" border-radius:10px;" required>
                                                                                    
                                                                                    <option value="7">Semanal</option>
                                                                                    <option value="14">Catorcenal</option>
                                                                                    
                                                                        </select>
                                                                        </div>
                                                                        <hr>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                       
                                                                        <div class="form-check" >
                                                                            
                                                                            <label>
                                                                                <input type="checkbox" onclick = "baja_empleado()" name="baja" id="baja">
                                                                                <span class="checkable">Baja</span>
                                                                            </label>

                                                                        </div>
                                                                        <div class="form-group form-primary" >
                                                                            <label for="fecha" >
                                                                            Fecha de ingreso:<input type="date" name="fecha_baja" id= "fecha_baja" style = "border-radius:10px;" disabled required >
                                                                            </label>
                                                                        </div>
                                                                   
                                                                    </div>
                                                                </div>
                                                            
                                                    </div>
                                                    
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary submitBtn" >Guardar</button>
                                                    </div>
                                                    
                                                </div>
                                                </form>
                                            </div>

                                    <!-- Page-body end -->
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
        <script type="text/javascript">
            // funcion que se ejecuta cada vez que se selecciona una opci??n

            function autorrelleno()

            {

                document.getElementById('sd').value = (document.getElementById('sm').value) / 30.4;
                document.getElementById('sd_editar').value = (document.getElementById('sm_editar').value) / 30.4;

            }

            function editar_empleado(frecuencia,id,nombre,apellido_paterno,apellido_materno,fecha_ingreso,sueldo_mensual,sueldo_diario,departamento,foto)

            {   
                document.getElementById('id_editar').value = id;
                //document.getElementById('image1').value = foto;
                document.getElementById('nombre_editar').value = nombre;
                document.getElementById('ap_editar').value = apellido_paterno;
                document.getElementById('am_editar').value = apellido_materno;
                document.getElementById('fecha_editar').value = fecha_ingreso;
                document.getElementById('sm_editar').value = sueldo_mensual;
                document.getElementById('sd_editar').value = sueldo_diario;
                document.getElementById('dep_editar').value = departamento;
                document.getElementById('fp_editar').value = frecuencia;

            }
            
            function baja_empleado(){
                var checkbox =  document.getElementById('baja');
                if(checkbox.checked == true){
                    $("#fecha_baja").prop('disabled', false);
                }else{
                    $("#fecha_baja").prop('disabled',  true); 
                } 
                
            } 
        </script>
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
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi??rcoles', 'Jueves', 'Viernes', 'S??bado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi??', 'Juv', 'Vie', 'S??b'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S??'],
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
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi??rcoles', 'Jueves', 'Viernes', 'S??bado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi??', 'Juv', 'Vie', 'S??b'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S??'],
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