

<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Tabla Categorias</h5>


                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($lista as $f) { ?>
                                    <tr>
                                        <th class="idC" scope="row"><?php echo $f['idCategoria']; ?></th>
                                        <td> <?php echo $f['nombre']; ?></td>
                                        <td> <?php echo $f['descripcion']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('categoria/update/' . $f['idCategoria']) ?>" type="button" class="btn btn-success">
                                                <i class="bi bi-nut-fill"></i></i>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo form_open('categoria/delete/' . $f['idCategoria']); ?>
                                            <input type="hidden" name="idCategoria" value="<?= $f['idCategoria'] ?>">
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

        <a class="btn btn-primary" href="<?php echo base_url('categoria/crear') ?>" role="button">Nueva Categoria</a>
        <a class="btn btn-primary" href="<?php echo base_url('categoria/imprimir') ?>" role="button">Imprimir</a>
        

    </section>
</main>