<div class="container-fluid d-flex justify-content-center">
  <!--recuperamos datos con la función Flashdata para mostrarlos-->
  <?php if (session()->getFlashdata('success')) : ?>
    <div class='text-center w-50 alert alert-success alert-dismissible fade show' role='alert'>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      <?= session()->getFlashdata('success') ?>
  </div>
  <?php endif ?>
  
</div>
<?php $validation = \Config\Services::validation(); ?>
 <div class="container-fluid login-container m-2">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card p-4 form-card">
                        <h4 class="mb-3">Ingresar usuario</h4>
                        <p>Perfil de admin: correo: admin@admin.com password: 12345</p>
                        <p>Perfil de cliente: correo: noadmin@gamil.com password: 12345</p>
                        <?php if(session()->getFlashdata('msg')): ?>
                            <div class="alert alert-warning"><?= session()->getFlashdata('msg'); ?></div>
                        <?php endif; ?>
                        <form method="post" action="<?php echo base_url('/enviar-form-login') ?>">
                            <div class="row g-3 p-4">
                                <div class="col-12">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input name="email" type="email" class="form-control" placeholder="fulanito@ejemplo.com">
                                    <?php if ($validation->getError('email')) { ?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError('email'); ?>
                                    </div>
                                    <?php } ?>
                                </div>

                                <div class="col-12">
                                    <label for="pass" class="form-label">Contraseña</label>
                                    <input name="pass" type="password" class="form-control" placeholder="Contraseña (mínimo 5 caracteres)">
                                    <?php if ($validation->getError('pass')) { ?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError('pass'); ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <div class="text-center mt-3">
                                <button class="w-25 btn btn-danger btn-sm me-2" type="reset">Cancelar</button>
                                <button class="w-25 btn btn-primary btn-sm" type="submit">Ingresar</button>
                            </div>
                            <div class="form-footer text-center">
                            ¿Aún no se registró? <a href="<?php echo base_url('/registro') ?>">Registrarse aquí</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>