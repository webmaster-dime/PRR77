<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Compras | P.R 77</title>

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
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="title">Compras</h1>
                        <a href="../pages/addCompra.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus">Nueva Compra</i>
                            <span>Nueva Compra</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">TIPO DE ORDEN DE COMPRA</label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Pendientes de Pago</option>
                                                    <option value="2">Pagadas</option>
                                                    <option value="3">Canceladas </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <p class="form-label">FECHA DE GENERACIÓN</p>
                                                <div class="input-group date datepicker" id="datePickerExample">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-text input-group-addon">
                                                        <i data-feather="calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">PROVEEDOR</label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Facebook</option>
                                                    <option value="2">Sapsa</option>
                                                    <option value="3">ACME</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">PROYECTO</label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Toluca</option>
                                                    <option value="2">León</option>
                                                    <option value="3">Morelos </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-warning mt-4">
                                                    <i data-feather="search" class="me-2"></i>
                                                    Buscar
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive pt-3">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>Proveedor</th>
                                <th>Proyecto</th>
                                <th>Fecha Entrega</th>
                                <th>Total</th>
                                <th>Adeudo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Cedric Kelly</td>
                                <td> 30-07-2021 </td>
                                <td>$206,850</td>
                                <td>$206,850</td>
                                <td>
                                    <a href="../pages/detallesCompra.php" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver detalles">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Totales</strong></td>
                                <td class="text-center"><strong>$2,307,067.38</strong></td>
                                <td class="text-center"><strong>$2,306,103.94</strong></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>

    </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>