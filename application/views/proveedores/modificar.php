<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modificar Proveedor</h5>


                        <!-- Vertical Form -->
                        <form id="" method="post" class="row g-3">
                            
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('proveedor/update/'.$data->idProveedor , 'class = "row g-3"'); ?>

                            <div class="col-12">
                                <label for="id" class="form-label">Id</label>
                                <input name="id" value="<?php echo $data->idProveedor ?>" type="number" class="form-control" required >
                            </div>
                            
                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre" value="<?php echo $data->nombre ?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input name="telefono" value="<?php echo $data->telefono ?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input name="direccion" value="<?php echo $data->direccion ?>" type="text" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="correo" class="form-label">Correo</label>
                                <input name="correo" value="<?php echo $data->correo?>" type="email" class="form-control" >
                            </div>

                            <div class="text-center">
                                <button  name="submit" type="submit" class="btn btn-success">Modificar</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>

        </div>
    </section>
</main>