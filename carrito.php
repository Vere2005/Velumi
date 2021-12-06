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
    <title>Carrito</title>
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
        <li><a href="index.php">Inicio<i class="material-icons right">blur_on</i></a></li>
        <li><a href="registro.php">Registro<i class="material-icons right">supervisor_account</i></a></li>
        <li><a href="login.php">Ingresar<i class="material-icons right">supervisor_account</i></a></li>
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

    <div class="col s9">
      <div class="card pink lighten-5" >
          <div class="card-content">
              <div class="row">
                <div class="col s12 m12 l12">
                   <table>
                      <thead>
                        <tr>
                            <th>Nombre de Producto</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                          $conexion = mysqli_connect('localhost','root','','velumi');
                          $query_carrito = "SELECT * FROM `carrito`";

                          $id_producto = mysqli_query($conexion,$query_carrito);
                          $total = 0;
                          while($row = mysqli_fetch_array($id_producto)){

                            $query_productos = "SELECT * FROM `productos` WHERE id = '".$row['id_producto']."';";
                            $producto = mysqli_query($conexion,$query_productos);

                            while($row_p = mysqli_fetch_array($producto)){ ?>
                                 <tr>
                                  <td><?php echo $row_p['nombre']; ?></td>
                                  <td><?php echo $row_p['descripcion']; ?></td>
                                  <td><?php echo $row_p['precio']; ?></td>
                                  <td><form method="POST"><button type="submit" name="producto<?php echo $row_p['id']; ?>" class="waves-effect waves-light btn-small red lighten-1"><i class="material-icons right">delete</i>Eliminar</button></form></td>
                                </tr>
                             <?php 

                              $precio = str_replace("$","", $row_p['precio']);
                              $total += $precio;
                              if(mysqli_connect_errno()){
                                echo "<h4 style=\"color: red\">Fallo la conexion a la base de datos</h4>".mysqli_connect_error();
                              }else{

                                if(isset($_POST['producto'.$row_p['id']])){
                                  $id_producto = $row_p['id'];
                                  $query_insert = "DELETE FROM `carrito` WHERE id_producto = '".$id_producto."'"; 
                                  mysqli_query($conexion, $query_insert);
                                  echo "<script>location.reload();</script>";
                                }
                              }

                           }                            
                          } 
                        ?>
                         <tr>
                            <td></td>
                            <td></td>
                            <td><h5><b>Total: $ <?php echo $total?></b> <a href="#!" class="waves-effect waves-light btn-small green lighten-1"><i class="material-icons right">shopping_basket</i>Pagar</a href="#!"></h5></td>
                          </tr>
                       

                      </tbody>
                    </table>
                </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                
</body>
</html>