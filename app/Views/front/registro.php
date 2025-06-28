
<div class="d-flex justify-content-center">
    <div class="container-fluid col-md-7 col-lg-6 m-2">
                <div class="card p-4 form-card">
                    <div class="logo mx-auto">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h4 class="mb-3 text-center">Registrar usuario</h4>
                    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="nombre" type="text" class="form-control" value="<?php echo set_value('nombre')?>" placeholder="Nombre...">
                            </div>

                            <div class="col-sm-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" name="apellido" class="form-control" value="<?php echo set_value('apellido')?>" placeholder="Apellido...">
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input name="email" type="email" class="form-control" value="<?php echo set_value('email')?>" placeholder="fulanito@ejemplo.com">
                            </div>
                            
                            <div class="col-sm-6">
                                <label for="usuario" class="form-label">Nombre de usuario</label>
                                <input type="text" name="usuario" value="<?php echo set_value('usuario')?>" class="form-control" placeholder="Nombre de usuario">
                            </div>

                            <div class="col-sm-6">
                                <label for="pass" class="form-label">Contraseña</label>
                                <div class="password-container">
                                    <input name="pass" type="password" class="form-control" placeholder="Contraseña (mínimo 5 caracteres)">
                                    <span class="toggle-password"><i class="fas fa-eye"></i></span>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <label for="confirm-pass" class="form-label">Confirmar contraseña</label>
                                <div class="password-container">
                                    <input name="confirm-pass" type="password" class="form-control" placeholder="Repite tu contraseña">
                                    <span class="toggle-password"><i class="fas fa-eye"></i></span>
                                </div>
                            </div>
                            
                            <div class="col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms">
                                    <label class="form-check-label" for="terms">
                                        Acepto los <a href="<?php echo base_url('/terminos_y_condiciones') ?>">términos y condiciones</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button class="w-25 btn btn-danger btn-sm me-2" type="reset">Cancelar</button>
                            <button class="w-25 btn btn-primary btn-sm" type="submit">Registrar</button>
                        </div>
                        
                        <div class="form-footer text-center">
                            ¿Ya tienes cuenta? <a href="#">Inicia sesión aquí</a>
                        </div>
                    </form>
                </div>
            </div>
            </div>