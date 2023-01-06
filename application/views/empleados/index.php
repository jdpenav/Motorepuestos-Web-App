<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Tabla Empleados</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Fecha de Nacimiento</th>
                                    <th scope="col">Identidad</th>
                                    <th scope="col">direccion</th>
                                    <th scope="col">telefono</th>
                                    <th scope="col">correo</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista as $f) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $f['idEmpleado']; ?></th>
                                        <td> <?php echo $f['nombre']; ?></td>
                                        <td><?php echo $f['apellido']; ?></td>
                                        <td><?php echo $f['sexo']; ?></td>
                                        <td><?php echo $f['fecha']; ?></td>
                                        <td><?php echo $f['identidad']; ?></td>
                                        <td><?php echo $f['direccion']; ?></td>
                                        <td><?php echo $f['telefono']; ?></td>
                                        <td><?php echo $f['correo']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('empleado/update/' . $f['idEmpleado']) ?>" type="button" class="btn btn-success">
                                                <i class="bi bi-nut-fill"></i></i>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo form_open('empleado/delete/' . $f['idEmpleado']); ?>
                                            <input type="hidden" name="idEmpleado" value="<?= $f['idEmpleado'] ?>">
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
        <a class="btn btn-primary" href="<?php echo base_url('empleado/crear') ?>" role="button">Nuevo Empleado</a>
    </section>

</main><!-- End #main -->