<?php error_reporting(0); ?>
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
    <title>Login</title>
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
                <form method="POST">
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
                
                <button class="btn waves-effect waves-light pink lighten-5 black-text" type="submit" name="login">Ingresar
                    <i class="material-icons right">send</i>
                  </button>
                </form>       
                  <?php      
                      $conexion = mysqli_connect('localhost','root','','velumi');      
                      if (isset($_POST['login'])){

                          $usuario = $_POST['email'];
                          $contrasenia = $_POST['password'];

                          if (mysqli_connect_errno()) {
                                echo "<center><p style=\"color:#b40000\"><strong>Falló la conexion a la Base de Datos.</strong></p></center>";
                                              
                            }else{

                              $sql = "SELECT * FROM `login` WHERE `usuario`='$usuario';";
                                    $result = mysqli_query($conexion,$sql);

                                     while($row = mysqli_fetch_array($result)){ 

                                          $usuario_login = $row['usuario'];
                                          $contrasenia_login = $row['contrasenia'];                
                                     }
                            } 
                        if ($usuario_login === $usuario and $contrasenia_login === $contrasenia){            
                          
                          if (mysqli_connect_errno()) {
                                echo "<center><p style=\"color:#b40000\"><strong>Falló la conexion a la Base de Datos.</strong></p></center>";
                                              
                            }else{
                                header("Location: carrito.php");                
                            }                            
                      }else{
                        echo "<text style=\"color:red;\">Usuario o contraseña incorrectos. Intentalo nuevamente.</text>";
                      }
                  }?>
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