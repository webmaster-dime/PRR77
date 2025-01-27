<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Nuevo Banco | P.R 77</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <?php include('../includes/header.php') ?>

</head>
<!--  -->

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!--! SideBar -->
        <?php include('../includes/sidebar.php') ?>

        <div class="page-wrapper">
            <!--! TopBar -->
            <?php include('../includes/topbar.php') ?>

            <!-- ==========================================  -->
            <!-- ================ Content =================  -->
            <!-- ==========================================  -->
            <div class="page-content">
                <div class="row">
                    <!-- Subtitle -->
                    <div class="d-flex justify-content-between">
                        <h1 class="page-title">REGISTRO DE CUENTA </h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="cmxform" id="signupForm" method="get" action="#">
                                            <fieldset class="row">
                                                <!--! Tipo de cuenta  -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        Tipo de cuenta
                                                    </label>
                                                    <select class="form-select" id="exampleFormControlSelect1"
                                                        name="opcion">
                                                        <option selected disabled>Elige una opción</option>
                                                        <option>Crédito</option>
                                                        <option>Saldos</option>
                                                    </select>
                                                </div>
                                                <!--! Nombre de cuenta  -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        Nombre de cuenta bancaria
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                                <!--! Valor inicial -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        Valor inicial
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Escribe solo números">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input type="number" name="name" class="form-control">
                                                </div>
                                            </fieldset>
                                            <div class="form-group text-center">
                                                <button class="btn btn-warning btn-send mx-2" type="submit"
                                                    value="Submit">REGISTRAR</button>
                                                <a href="#" class="btn btn-outline-danger">CANCELAR</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Nuevo Proyecto | P.R 77</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <?php include('../includes/header.php') ?>

</head>
<!--  -->

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!--! SideBar -->
        <?php include('../includes/sidebar.php') ?>

        <div class="page-wrapper">
            <!--! TopBar -->
            <?php include('../includes/topbar.php') ?>

            <!-- ==========================================  -->
            <!-- ================ Content =================  -->
            <!-- ==========================================  -->
            <div class="page-content">
                <div class="row">
                    <!-- Subtitle -->
                    <div class="d-flex justify-content-between">
                        <h1 class="page-title">REGISTRO DE PROYECTO </h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="cmxform" id="signupForm" method="get" action="#">
                                            <fieldset class="row">
                                                <!--! Contacto  -->
                                                <div class="mb-3 col-12">
                                                    <label for="name"> Proyecto
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input class="form-control" id="contacto" name="contacto"
                                                        type="text">
                                                </div>
                                            </fieldset>
                                            <div class="form-group text-center">
                                                <button class="btn btn-warning btn-send mx-2" type="submit"
                                                    value="Submit">REGISTRAR</button>
                                                <a href="#" class="btn btn-outline-danger">CANCELAR</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>