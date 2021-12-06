<!DOCTYPE html>
<html lang="en">
<?php 
  $conexion = mysqli_connect('localhost','root','','velumi');
  $categoria = $_GET['cat']; 
?>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velumi</title>
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
        <li><a  href="index.php">Inicio<i class="material-icons right">blur_on</i></a></li>
        <li><a href="registro.php">Registro<i class="material-icons right">supervisor_account</i></a></li>
        <li><a href="carrito.php">Carrito<i class="material-icons right">local_grocery_store</i></a></li>
      </ul>
    </div>
  </nav><br>

    
      <div class="row"><!--CATEGORIAS  -->
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

    <div class="col s9">
        <div class="card pink lighten-5" >
            <div class="card-content">
                <div class="row">
                  <!--PRIMERA  -->

          <?php 
      
          if(mysqli_connect_errno()){
            echo "<h4 style=\"color: red\">Fallo la conexion a la base de datos</h4>".mysqli_connect_error();
          }else{ 
            $query = "SELECT * FROM `productos` WHERE categoria = '$categoria' ORDER BY id ASC";
            $retorno = mysqli_query($conexion,$query);

            while($row = mysqli_fetch_array($retorno)){ ?>

                    <div class="col s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img height="350px" width="200px" class=" activator" src="<?php echo $row['foto'];  ?> ">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4"><?php echo $row['nombre']; ?><i class="material-icons right">more_vert</i></span>
                              <a class="waves-effect waves-light btn modal-trigger" href="#modal<?php echo $row['id'];?>">Agregar<i class="material-icons right">local_grocery_store</i></a>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Descripción del producto<i class="material-icons right">close</i></span>
                              <p><?php echo $row['descripcion']; ?><br>Precio: <?php echo $row['precio'];  ?></p>
                            </div>
                          </div>
                    </div>

                    <div id="modal<?php echo $row['id']; ?>" class="modal modal-fixed-footer">
                      <div class="modal-content">
                        <h4><?php echo $row['nombre'];?></h4>
                        <div class="row">
                          <div class="col s4">
                            <img class="responsive-img" src="<?php echo $row['foto'];  ?> ">
                          </div>
                          <div class="col s8">
                             <p><?php echo $row['descripcion'];?><br><br>Precio: <?php echo $row['precio'];?></p>
                          </div>
                        </div>                       
                       
                      </div>
                      <div class="modal-footer">
                        <form method="POST">
                        <a href="#!" class="modal-close waves-effect red btn">CANCELAR</a>
                        
                        <button type="submit" name="producto<?php echo $row['id']; ?>" class="waves-effect waves-green btn" >AGREGAR</button>
                        </form>
                      
                      </div>
                    </div>


                    <?php
                     if(mysqli_connect_errno()){
                        echo "<h4 style=\"color: red\">Fallo la conexion a la base de datos</h4>".mysqli_connect_error();
                      }else{

                        if(isset($_POST['producto'.$row['id']])){
                          $id_producto = $row['id'];
                          $query_insert = "INSERT INTO `carrito`(`id`, `id_producto`) VALUES ('',$id_producto)"; 
                          mysqli_query($conexion, $query_insert);
                        }
                      }
                     }
                    } ?>
                </div> 

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
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <script type="text/javascript" src="material.js"></script>
  
                
</body>
</html>