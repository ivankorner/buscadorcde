<div class="container my-5 py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card rounded-3 text-black shadow-lg">
                <div class="row g-0">
                    <div class="col">
                        <div class="card-body p-4 p-md-5 mx-md-4">
                            <div class="text-center mb-4">
                                <!-- Imagen con tamaño responsivo -->
                                <img src="./img/logo.png" class="img-fluid" style="max-width: 185px;" alt="Logo de la aplicación">
                                <h4 class="mt-3">Bienvenido</h4>
                            </div>
                            <form action="" method="POST" autocomplete="off">
                                <p class="text-center">Ingrese sus credenciales de acceso</p>
                                <!-- Usuario -->
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="bi bi-person-fill-check" aria-label="Icono de usuario"></i>
                                    </span>
                                    <input type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required class="form-control" placeholder="Usuario" aria-describedby="basic-addon1">
                                </div>
                                <!-- Contraseña -->
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="bi bi-key-fill" aria-label="Icono de contraseña"></i>
                                    </span>
                                    <input type="password" name="login_clave" pattern="[a-zA-Z0-9$@]{7,100}" maxlength="100" required class="form-control" placeholder="Password" aria-describedby="basic-addon2">
                                </div>
                                <!-- Botón e hipervínculo -->
                                <div class="text-center mb-4">
                                    <button class="btn btn-primary w-100" type="submit">Ingresar</button>
                                    <a class="text-muted d-block mt-3" href="#!">¿Olvidó su Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
