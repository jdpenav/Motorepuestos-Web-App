<?php $attributes = array('class' => 'class="row g-3'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="row">



            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Agregar Empleado</h5>

                        

                        <!-- Vertical Form -->
                        
                            
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('empleado/crear', 'class = "row g-3"'); ?>

                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre" type="text" class="form-control" required >
                            </div>

                            <div class="col-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input name="apellido" type="text" class="form-control" required>
                            </div>

                            <div class="col-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <input name="sexo" type="text" class="form-control" >
                            </div>

                            <div class="col-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input name="fecha" type="date" value="2002-01-01" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="identidad" class="form-label">Identidad</label>
                                <input name="identidad" type="text" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input name="direccion" type="text" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input name="telefono" type="text" class="form-control" >
                            </div>

                            <div class="col-12">
                                <label for="correo" class="form-label">Correo</label>
                                <input name="correo" type="text" class="form-control" >
                            </div>

                            <div class="col-6">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input name="usuario" type="text" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input name="contraseña" type="text" class="form-control" required>
                            </div>
                
                            <div class="text-center">
                                <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>