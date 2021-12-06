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
    <title>Inicio</title>
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
      <a href="#" class="brand-logo"style="font-family: Southmore; margin-left: 25px;">VeLuMi</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#!">Inicio<i class="material-icons right">blur_on</i></a></li>
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
              
              <video  class="responsive-video" src="video/video.mp4" controls></video>
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