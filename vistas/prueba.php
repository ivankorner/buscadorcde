



<div class="container-lg p-5 my-5">
    <div class="row justify-content-center">

    <div class="form-rest mb-6 mt-6"></div>

        <div class="col-lg-9">
            <h1 class="mb-3">Nuevo Usuario</h1>

            

            <form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >

                <div class="row g-3">
                    <div class="col-md-4"><label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="usuario_nombre" pattern="[aáéíóöúüñ-zA-ZÁÉÍÓÖÚÜÑ]{3,40}" title="Caracter no permitido" maxlength="40" required id="" class="form-control">
                    </div>
                    <div class="col-md-4"><label for="apellido" class="form-label">Apellido</label>
                        <input type="text" name="usuario_apellido" pattern="[aáéíóöúüñ-zA-ZÁÉÍÓÖÚÜÑ]{3,40}" title="Caracter no permitido" maxlength="40" required id="" class="form-control">
                    </div>
                    <div class="col-md-4"><label for="usuario" class="form-label">Usuario</label>
                        <input type="text" name="usuario_usurio" maxlength="70" required id="" class="form-control">
                    </div>
                    <div class="col-md-4"><label for="email" class="form-label">Email</label>
                        <input type="email" name="usuario_email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,40}$" maxlength="40"  id="" class="form-control">
                    </div>
                    <div class="col-md-4"><label for="clave1" class="form-label">Clave</label>
                        <input type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required id="" class="form-control">
                    </div>
                    <div class="col-md-4"><label for="clave2" class="form-label">Repetir Clave</label>
                        <input type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required id="" class="form-control">
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-dark w-100 fw-bold">Guardar</button>
                            </div>
                        </div>
                    </div>






                </div>
                
            </form>
        </div>
    </div>
   
    

</div>



