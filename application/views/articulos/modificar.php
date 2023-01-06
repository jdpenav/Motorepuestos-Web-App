<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modificar Articulo</h5>

                        <!-- Vertical Form -->
                        

                            <?php echo validation_errors(); ?>
                            <?php echo form_open('articulo/update/'.$data->idArticulo, 'class = "row g-3"'); ?>

                            <div class="col-12">
                                <label for="id" class="form-label">Id</label>
                                <input name="id" value="<?php echo $data->idArticulo ?>" type="number"  class="form-control" required >
                            </div>

                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre" value="<?php echo $data->nombre ?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input name="descripcion" value="<?php echo $data->descripcion ?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-12">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input name="imagen" value="<?php echo $data->imagen ?>" type="text" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="codProducto" class="form-label">Codigo de Producto</label>
                                <input name="codProducto" value="<?php echo $data->codProducto ?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="Precio" class="form-label">Precio</label>
                                <input name="Precio" value="<?php echo $data->Precio?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="Costo" class="form-label">Costo</label>
                                <input name="Costo" value="<?php echo $data->Costo ?>" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="Existencias" class="form-label">Existencias</label>
                                <input name="Existencias" value="<?php echo $data->Existencias?>" type="text" class="form-control" required>
                            </div>


                            <div class="col-12">
                                <label for="Categorias_idCategoria" class="form-label">Id de Categoria</label>
                                <input name="Categorias_idCategoria" value="<?php echo $data->Categorias_idCategoria ?>" type="text" class="form-control" required>
                            </div>



                            <div class="text-center">

                                <button name="submit" type="submit" class="btn btn-success">Modificar</button>

                            </div>
                        <?php form_close()?><!-- Vertical Form -->
                    </div>
    </section>
</main>