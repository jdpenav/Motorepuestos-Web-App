<main>

    <!----->
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="#" class="logo d-flex align-items-center w-auto">
                                <?php img("assets/img/logo.png"); ?>
                                <span class="d-none d-lg-block">Motorepuestos</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Iniciar sesion en su cuenta</h5>
                                    <p class="text-center small">Ingrese su usuario y contraseña para Iniciar Sesion</p>
                                </div>

                                <?php echo form_open('login/iniciarsesion', 'class=" class="row g-3"'); ?>

                                <div class="col-12">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" value="<?php echo set_value('usuario'); ?>" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Enter email">
                                        <br>
                                    </div>
                                    <p><?php echo form_error('usuario'); ?> </p>
                                </div>

                                <div class="col-12">
                                    <label for="constraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="contraseña" id="exampleInputPassword1" placeholder="Password">
                                    <?php echo form_error('contraseña'); ?>
                                </div>

                                <br>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary ">Login</button>
                                </div>
                                <p style="color: red;"><?php echo $this->session->flashdata('login_error'); ?></p>

                                <?php form_close(); ?>
                            </div>

                        </div>
                    </div>

        </section>

    </div>



    <!----->
</main><!-- End #main -->