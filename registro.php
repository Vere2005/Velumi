<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style type="text/css">
      @font-face{
           font-family: 'Southmore';
           src: url(Southmore.ttf); 
      }
    </style>
</head>
<body>
 
     <nav>
    <div class="nav-wrapper pink lighten-4">
      <a href="#" class="brand-logo" style="font-family: Southmore; margin-left: 25px;">VeLuMi</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio<i class="material-icons right">blur_on</i></a></li>
        <li><a href="registro.php">Registro<i class="material-icons right">supervisor_account</i></a></li>
        <li><a href="carrito.php">Carrito<i class="material-icons right">local_grocery_store</i></a></li>
      </ul>
    </div>
  </nav><br>
      <div class="row">
    <div class="col s3 ">
      <div class="card pink lighten-4">
        <div class="card-content black-text">
          <span class="card-title center">Categorias</span>
          <div class="card-action">
            <a class="white-text" href="categoria.php?cat=rop_mujer"><i class="material-icons left">loyalty</i>Ropa Mujer</a>
            <br>
            <br>
            <a class="white-text" href="categoria.php?cat=zap_mujer"><i class="material-icons left">loyalty</i>Zapatos Mujer</a>
            <br>
            <br>
            <a class="white-text" href="categoria.php?cat=acc_mujer"><i class="material-icons left">loyalty</i>Accesorios Mujer</a>
            <br>
            <br>
            <a class="white-text" href="categoria.php?cat=rop_hombre"><i class="material-icons left">loyalty</i>Ropa Hombre</a>
            <br>
            <br>
            <a class="white-text" href="categoria.php?cat=zap_hombre"><i class="material-icons left">loyalty</i>Zapatos Hombre</a>
            <br>
            <br>
            <a class="white-text" href="categoria.php?cat=acc_hombre"><i class="material-icons left">loyalty</i>Accesorios Hombre</a>
            <br>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="col s8">
      <div class="card pink lighten-5" >
          <div class="card-content">
            <div class="row"><!--inicio de formulario-->
                <form method="POST" class="col s12">
                  <div class="row"><!--nombre-->
                    <div class="input-field col s6">
                      <input required placeholder="Nombre" name="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field col s6"><!--apellido-->
                      <input required placeholder="Apellido" name="last_name" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input required placeholder="Dirección" name="adress" type="text" class="validate">
                    </div>
                    <div class="input-field col s6">
                      <input required placeholder="Teléfono" name="phone" type="text" class="validate">
                    </div>
                  </div>
                 <!--correo-->
                  <div class="row">
                    <div class="input-field col s12">
                      <input required placeholder="Correo Electrónico" name="email" type="email" class="validate">
                    </div>
                  </div>
                  <!--contraseña-->
                  <div class="row">
                    <div class="input-field col s12">
                      <input required placeholder="Contraseña" name="password" type="password" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input required placeholder="Repite Contraseña" name="rpassword" type="password" class="validate">
                    </div>
                  </div>
                <button class="btn waves-effect waves-light pink lighten-5 black-text" type="submit" name="registrar">REGISTRAR
                    <i class="material-icons right">send</i>
                  </button> 
                  </form>  
                  <?php
          $conexion = mysqli_connect('localhost','root','','velumi');
          if(mysqli_connect_errno()){
            echo "<h4 style=\"color: red\">Fallo la conexion a la base de datos</h4>".mysqli_connect_error();
          }else{
            if(isset($_POST['registrar'])){
              $first_name = ucwords($_POST['first_name']);
              $last_name = ucwords($_POST['last_name']);
              $adress = $_POST['adress'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $contrasenia = ($_POST['password']);
              if($contrasenia != $_POST['rpassword']){
                echo "<p style=\"color: red\">La contraseña no coincide. Intentalo nuevamente.</p>";
              }else{                
                $query = "INSERT INTO `usuario`(`id`, `nombre`, `apellido`, `direccion`, `telefono`, `email`,
                `contrasenia`) VALUES ('','$first_name','$last_name','$adress','$phone','$email','$contrasenia')";
                mysqli_query($conexion, $query);

                $registro_login = "INSERT INTO `login`(`id`, `usuario`, `contrasenia`) VALUES ('','$email','$contrasenia')";
                mysqli_query($conexion, $registro_login);

                echo "<p etyle=\"color:blue\">Tu registro fue exitoso</p>";
                echo "<a href=\"login.php\">Ingresa al sistema</a>";
                mysqli_close($conexion);
              }
            }
          }
    ?>                     
              </div>  <!--fin de formulario-->
          </div>
      </div>
  </div>
  </div>
   
   <footer class="page-footer pink lighten-4">
          
          <div class="footer-copyright">
            <div class="container">
              <div class="col s12 l12 m12">
                 © 2021 VELUMI
            <p class="grey-text text-lighten-4 right" href="#!">TEL. 55-99-88-77</p>
              </div>
           
            </div>
          </div><br>
        </footer>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>