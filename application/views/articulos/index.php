<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Tabla Articulos</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">existencias</th>
                                    <th scope="col">Categoria_id</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista as $f) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $f['idArticulo']; ?></th>
                                        <td><?php echo $f['nombre']; ?></td>
                                        <td><?php echo $f['descripcion']; ?></td>
                                        <td><?php echo $f['codProducto']; ?></td>
                                        <td><?php echo $f['Precio']; ?></td>
                                        <td><?php echo $f['Costo']; ?></td>
                                        <td><?php echo $f['Existencias']; ?></td>
                                        <td><?php echo $f['Categorias_idCategoria']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('articulo/update/' . $f['idArticulo']) ?>" type="button" class="btn btn-success">
                                                <i class="bi bi-nut-fill"></i></i>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo form_open('articulo/delete/' . $f['idArticulo']); ?>
                                            <input type="hidden" name="idArticulo" value="<?= $f['idArticulo'] ?>">
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
                <a class="btn btn-primary" href="<?php echo base_url('articulo/crear') ?>" role="button">Nuevo Articulo</a>
                <a class="btn btn-info" href="<?php echo base_url('articulo/imprimir') ?>" role="button"><i class="bi bi-box-arrow-down"></i></a>

            </div>







    </section>
</main><!-- End #main -->