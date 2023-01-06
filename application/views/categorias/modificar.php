<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modificar Categoria</h5>


                        <!-- Vertical Form -->
                        <form id="" method="post" class="row g-3">

                            <?php echo validation_errors(); ?>
                            <?php echo form_open('categoria/update/' . $data->idCategoria, 'class = "row g-3"'); ?>



                            <div class="col-12">
                                <label for="id" class="form-label">Id</label>
                                <input name="id" type="number" value="<?php echo $data->idCategoria ?>" class="form-control" required>
                            

                            </div>

                            <div class="col-12">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre" type="text" value="<?php echo $data->nombre ?>" class="form-control" required>

                            </div>
                            <div class="col-12">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input name="descripcion" type="text" value="<?php echo $data->descripcion ?>" class="form-control">
                            </div>
                            <div class="text-center">

                                <button name="submit" type="submit" class="btn btn-success">Modificar</button>

                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>

        </div>
    </section>
</main>