<!-- Session --> <?php require "./inc/session_start.php" ?> <!-- Session -->


<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- head --> <?php include "./inc/head.php" ?> <!-- head -->
  </head>
  <body>

 
<!-- Contenedor principal -->
<div class="container-fluid">
    <?php

      if(!isset($_GET['vista']) || $_GET['vista'] == ""){
        $_GET['vista'] = "login";
      }
      if(is_file("./vistas/".$_GET['vista'].".php") 
        && $_GET['vista'] !="login"
          && $_GET['vista'] !="404" ){

                // Navbar
           include "./inc/navbar.php";  
            // Vista
            include "./vistas/".$_GET['vista'].".php";        
            // Footer
            require_once "./inc/footer.php";  
            // Scripts
            include "./inc/script.php"; 

      }else{

        if($_GET['vista'] == "login"){
          // Aca se puede agregar el buscardor por defecto para los usuarios que no estan registrados.
          include "./vistas/login.php";      
        }else{ 
          include "./vistas/404.php";      
        }
      }    
     ?>
     </div>

     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>








        
  </body>
  

  
</html>
