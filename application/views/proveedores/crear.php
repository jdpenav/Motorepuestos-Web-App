<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Agregar Proveedor</h5>

                        <!-- Vertical Form -->
                        <form id="" method="post" class="row g-3">
                            
                            <?php echo validation_errors(); ?>
                            <?php form_open('proveedores/crear'); ?>

                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input name="telefono" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input name="direccion" type="text" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="correo" class="form-label">Correo</label>
                                <input name="correo" type="text" class="form-control" >
                            </div>
                            
                            <div class="text-center">

                                <button name="submit" type="submit" class="btn btn-primary">Guardar</button>

                            </div>
                        </form><!-- Vertical Form -->




                    </div>
                </div>
            </div>

        </div>
    </section>
</main>