<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard Principal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/motorepuestosCI/index.php/inicio">Inicio</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">



              <div class="card-body">
                <h5 class="card-title">Ventas <span>| 2022</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <!--AQUI VAMOS A TRAER DATA DE LA BASE DE DATOS -->
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Aumento</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">



              <div class="card-body">
                <h5 class="card-title">Ingresos Totales <span>| 2022</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    <h6>$3,264</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">



              <div class="card-body">
                <h5 class="card-title">Clientes <span>| 2022</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Reports -->
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Reporte General</h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Ventas',
                        data: [31, 40, 28, 51, 42, 82, 56],
                      }, {
                        name: 'Ingresos',
                        data: [11, 32, 45, 32, 34, 52, 41]
                      }, {
                        name: 'Clientes',
                        data: [15, 11, 32, 18, 9, 24, 11]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- End Line Chart -->

              </div>

            </div>
          </div><!-- End Reports -->




        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">




        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Valores de la Empresa | Motorepuestos</span></h5>

            <div class="news">
              <div class="post-item clearfix">
                <?php echo img('assets/img/news-1.jpg'); ?>
                <h4><a href="#">Compromiso</a></h4>
                <p>Proporcionar los mejores productos, en condiciones optimas para ofrecer una mayor calidad de servicio y mejores condiciones en repuestos.</p>
              </div>

              <div class="post-item clearfix">

                <?php echo img('assets/img/news-2.jpg'); ?>
                <h4><a href="#">Ética</a></h4>
                <p>Tenemos la ética, como punto de partida claro y bien definido, con el cual construimos valores que caracterizan la organización.</p>
              </div>

              <div class="post-item clearfix">
                <?php echo img('assets/img/news-3.jpg'); ?>
                <h4><a href="#">Servicio</a></h4>
                <p>Atendemos personalmente todos nuestros canales de servicio. Siempre buscamos la mejor solución en favor de nuestros clientes.</p>
              </div>

              <div class="post-item clearfix">
                <?php echo img('assets/img/news-4.jpg'); ?>
                <h4><a href="#">Credibilidad</a></h4>
                <p>Eficiencia en el servicio de forma fiable, sin contratiempos, brindando soluciones prácticas ligadas a la seguridad y a la credibilidad.
                </p>
              </div>



            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->
      <!-- Top Selling -->
      <div class="col-lg-12">
        <div class="card top-selling overflow-auto">

          <div class="card-body pb-0">
            <h5 class="card-title">Productos Disponibles <span>| 2022 </span></h5>

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
      </div><!-- End Top Selling -->


    </div>
  </section>



</main><!-- End #main -->