<div class="container-lg p-5 my-5">
    <div class="row justify-content-center">

    <div class="form-rest mb-6 mt-6"></div>

        <div class="col-lg-9">
            <h1 class="mb-3">Nuevo Instrumento</h1>

            <?php if (!empty($message)): ?>
            <div class="alert alert-info"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>


        <!-- Formulario para cargar un nuevo instrumento -->

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Número:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese el número del instrumento" required>
            </div>
            <div class="mb-3">
                <label for="instrumento" class="form-label">Instrumento:</label>
                <select name="instrumento" id="instrumento" class="form-select" required>
                    <option value="">Seleccione un instrumento</option>
                    <option value="Ordenanza">Ordenanza</option>
                    <option value="Resolucion">Resolución</option>
                    <option value="Declaracion">Declaración</option>
                    <option value="Comunicacion">Comunicación</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Año:</label>
                <input type="text" name="year" id="year" class="form-control" placeholder="Ingrese el año" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese una descripción (máximo 140 caracteres)" maxlength="140" required></textarea>
            </div>
            <div class="mb-3">
                <label for="pdf_file" class="form-label">Archivo PDF:</label>
                <input type="file" name="pdf_file" id="pdf_file" class="form-control" accept="application/pdf" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" name="hasAnexos" id="hasAnexos" onclick="toggleAnexos()">
                <label for="hasAnexos" class="form-label">¿El expediente tiene anexos?</label>
            </div>
            <div id="anexosSection" style="display: none;">
                <div class="mb-3">
                    <label for="anexos" class="form-label">Cargar Anexos (puede seleccionar varios archivos):</label>
                    <input type="file" name="anexos[]" id="anexos" class="form-control" accept="application/pdf" multiple>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cargar Datos</button>
        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Volver</a>

            

            
        </div>
    </div>
   
    

</div>

