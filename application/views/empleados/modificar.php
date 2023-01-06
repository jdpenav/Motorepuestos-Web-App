<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
            <h1 class="card-title">Modificar Empleado</h1>
               
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <?php echo validation_errors(); ?>
                        <?php echo form_open('empleado/update/'.$data->idEmpleado , 'class = "row g-3"'); ?>

                        <div class="col-6">
                            <label for="id" class="form-label">Id</label>
                            <input name="id" type="text" value="<?php echo $data->idEmpleado ?>" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" type="text" value="<?php echo $data->nombre ?>" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input name="apellido" type="text" value="<?php echo $data->apellido ?>" class="form-control" required>
                        </div>

                        <div class="col-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <input name="sexo" value="<?php echo $data->sexo ?>" type="text" class="form-control">
                        </div>

                        <div class="col-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input name="fecha" type="date" value="<?php echo $data->fecha ?>"  class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="identidad" class="form-label">Identidad</label>
                            <input name="identidad" value="<?php echo $data->identidad ?>" type="text" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input name="direccion" value="<?php echo $data->direccion ?>"  type="text" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input name="telefono" value="<?php echo $data->telefono ?>" type="text" class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="correo" class="form-label">Correo</label>
                            <input name="correo" value="<?php echo $data->correo ?>" type="text" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input name="usuario" value="<?php echo $data->usuario ?>" type="text" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input name="contraseña"  value="<?php echo $data->contraseña ?>"type="password" class="form-control">
                            <p><i>Escribir nueva contraseña si desea cambiarla</i></p>
                        </div>

                        <div class="text-center">
                            <button name="submit" type="submit" class="btn btn-success">Modificar</button>
                        </div>

                    </div>
                </div>
            </div>


            
        </div>
    </section>
</main>