<main id="main" class="main">

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Tabla Proveedores</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista as $f) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $f['idProveedor']; ?></th>
                                        <td> <?php echo $f['nombre']; ?></td>
                                        <td> <?php echo $f['telefono']; ?></td>
                                        <td> <?php echo $f['direccion']; ?></td>
                                        <td><?php echo $f['correo']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('proveedor/update/' . $f['idProveedor']) ?>" type="button" class="btn btn-success">
                                                <i class="bi bi-nut-fill"></i></i>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo form_open('proveedor/delete/' . $f['idProveedor']); ?>
                                            <input type="hidden" name="idProveedor" value="<?= $f['idProveedor'] ?>">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-person-dash-fill"></i></i>
                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>

            </div>

        <a class="btn btn-primary" href="<?php echo base_url('proveedor/crear') ?>" role="button">Nuevo Proveedor</a>
    </section>
</main><!-- End #main -->