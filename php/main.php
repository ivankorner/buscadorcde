<?php
# Conexion a la Base de Datos #    
function conexion()
{
    $pdo = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
    return $pdo;
}

#Verificar Datos#
function verificar_datos($filtro, $texto)
{
    if (preg_match("/^" . $filtro . "$/", $texto)) {
        return false;
    } else {
        return true;
    }
}

#Filtro para evitar inyeccion SQL#

function limpar_textos($texto)
{
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = str_ireplace("<script>", "", $texto);
    $texto = str_ireplace("</script>", "", $texto);
    $texto = str_ireplace("<script>", "", $texto);
    $texto = str_ireplace("<script src", "", $texto);
    $texto = str_ireplace("<script type=", "", $texto);
    $texto = str_ireplace("SELECT * FROM", "", $texto);
    $texto = str_ireplace("DELETE FROM", "", $texto);
    $texto = str_ireplace("INSERT INTO", "", $texto);
    $texto = str_ireplace("DROP TABLE", "", $texto);
    $texto = str_ireplace("DROP DATABASE", "", $texto);
    $texto = str_ireplace("TRUNCATE TABLE", "", $texto);
    $texto = str_ireplace("SHOW TABLES;", "", $texto);
    $texto = str_ireplace("SHOW DATABASES;", "", $texto);
    $texto = str_ireplace("<?php", "", $texto);
    $texto = str_ireplace("?>", "", $texto);
    $texto = str_ireplace("--", "", $texto);
    $texto = str_ireplace("^", "", $texto);
    $texto = str_ireplace("<", "", $texto);
    $texto = str_ireplace("[", "", $texto);
    $texto = str_ireplace("]", "", $texto);
    $texto = str_ireplace("==", "", $texto);
    $texto = str_ireplace(";", "", $texto);
    $texto = str_ireplace("::", "", $texto);
    $texto = trim($texto);
    $texto = stripslashes($texto);
    return $texto;
}

# Funcion renombrar fotos o archivos#
function renombrar_fotos($nombre)
{
    $nombre = str_ireplace(" ", "_", $nombre);
    $nombre = str_ireplace("/", "_", $nombre);
    $nombre = str_ireplace("#", "_", $nombre);
    $nombre = str_ireplace("-", "_", $nombre);
    $nombre = str_ireplace("$", "_", $nombre);
    $nombre = str_ireplace(".", "_", $nombre);
    $nombre = str_ireplace(",", "_", $nombre);
    $nombre = $nombre . "_" . rand(0, 100);
    return $nombre;
}


# Funcion paginador de tablas (Verificar, cambiar por codigo de Bootstrap) #
function paginador_tablas($pagina, $Npaginas, $url, $botones)
{
    $tabla = '<nav aria-label="Page navigation example">';

    if ($pagina <= 1) {
        $tabla .= '
        <ul class="pagination justify-content-center"> 
         <li class="page-item disabled">
            <a class="page-link">Anterior</a>
         </li>';
    } else {
        $tabla .= '

        <ul class="pagination justify-content-center">
         <li class="page-item"><a class="page-link" href="' . $url . ($pagina - 1) . '">Anterior</a></li>
         <li class="page-item"><a class="page-link" href="' . $url . '">1</a></li>
        ';
    }

    $ci = 0;
    for ($i = $pagina; $i <= $Npaginas; $i++) {
        if ($ci >= $botones) {
            break;
        }
        if ($pagina == $i) {
            $tabla .= '<li class="page-item active" aria-current="page"><a class="page-link" href="'.$url.$i.'">'.$i.'</a></li>';
        } else {
            $tabla .= '<li class="page-item"><a class="page-link" href="'.$url.$i.'">'.$i.'</a></li>';
        }
        $ci++;
    }

    if ($pagina == $Npaginas) {
        $tabla .= '
        </ul>
         <li class="page-item disabled">
            <a class="page-link">Siguiente</a>
         ';
    } else {
        $tabla .= '

         
         <li class="page-item"><a class="page-link" href="' . $url . $Npaginas . '">' . $Npaginas . '</a></li>
        </ul>
         <li class="page-item"><a class="page-link" href="' . $url . ($pagina + 1) . '">Siguiente</a></li>
         
        ';
    }

    $tabla .= '</nav>';
    return $tabla;
}
