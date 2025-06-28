 <div class="container-fluid login-container m-2">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card p-4 form-card">
                        <h4 class="mb-3">Ingresar usuario</h4>
                        <form method="post" action="#">
                            <div class="row g-3 p-4">
                                <div class="col-12">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input name="email" type="email" class="form-control" placeholder="fulanito@ejemplo.com">
                                </div>

                                <div class="col-12">
                                    <label for="pass" class="form-label">Contraseña</label>
                                    <input name="pass" type="password" class="form-control" placeholder="Contraseña (mínimo 5 caracteres)">
                                </div>
                            </div>
                            
                            <div class="text-center mt-3">
                                <button class="w-25 btn btn-danger btn-sm me-2" type="reset">Cancelar</button>
                                <button class="w-25 btn btn-primary btn-sm" type="submit">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>