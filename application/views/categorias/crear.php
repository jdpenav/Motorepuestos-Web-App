<main id="main" class="main">
    <section class="section">
        <div class="row">



            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Agregar Categoria</h5>

                        <!-- Vertical Form -->
                        
                            
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('categorias/crear', 'class="row g-3"'); ?>

                            <div class="col-12">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre"  type="text" class="form-control" required>
                                <p><i><?php echo form_error('nombre'); ?></i></p>
                            </div>

                            <div class="col-12">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input name="descripcion" type="text" class="form-control" >
                            </div>
                            
                            <div class="text-center">
                                <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <?php form_close(); ?><!-- Vertical Form -->




                    </div>
                </div>
            </div>

        </div>
    </section>
</main>