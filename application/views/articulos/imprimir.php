<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="//assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="//assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="//assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="//assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="//assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="//assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->

    <?php echo link_tag('assets/css/style.css') ?>
    <?php echo link_tag('assets/img/favicon.png') ?>
    <?php echo link_tag('assets/img/apple-touch-icon.png') ?>

    <?php echo link_tag('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>

    <?php echo link_tag('assets/vendor/boxicons/css/boxicons.min.css') ?>

    <?php echo link_tag('assets/vendor/quill/quill.snow.css') ?>

    <?php echo link_tag('assets/vendor/quill/quill.bubble.css') ?>

    <?php echo link_tag('assets/vendor/remixicon/remixicon.css') ?>

    <?php echo link_tag('assets/vendor/simple-datatables/style.css') ?>
    <?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <main id="main" class="main">
    <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card top-selling overflow-auto">

                        <div class="card-body pb-0">
                        <a class="btn btn-primary" href="<?php echo base_url('articulo') ?>" role="button">Volver</a>

                            <h5 class="card-title">Reporte de Productos <span>| 2022 </span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Existencias</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lista as $f) { ?>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo $f['imagen'] ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold"><?php echo $f['nombre']; ?></a></td>
                                            <td><?php echo $f['codProducto']; ?></td>
                                            <td class="fw-bold"><?php echo $f['Precio']; ?> Lemp</td>
                                            <td><?php echo $f['Existencias']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>


            </div>



        </section>
    </main>

    <script>
        window.addEventListener("load", window, print());
    </script>
</body>

</html>