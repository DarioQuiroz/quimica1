<?php /*
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:loguin_porv.php");
die();
  }*/
?><?php require_once "scripts.php"; ?>


<?php


  $consulta=consultarprod($_GET['id']);

  function consultarprod( $no_prod )
  {

    $conn = new mysqli("localhost", "root", "", "pruebas2");

    if (mysqli_connect_errno()) {
    die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    }else{
    
       
    }



   $sentencia="SELECT * FROM productos WHERE clave='".$no_prod."' ";
   $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['clave'],
    $fila['nombre'],
    $fila['in_act'],
    $fila['presentacion'],
    $fila['cantidad'],
    $fila['cantdad_total'],
    $fila['valor_unitario'],
    $fila['valor_total'],
     ];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Piqueretaro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="emH/NWYpe9Jc4LJ6xsLkXihIfOyySJ0V5xU67cwuxX+SROOfkrq+GBvSzYhF6YQSCOWAgom9M0zH5ZgZEPnFdg==" />
<link rel="stylesheet" media="all" href="../assets/application-6eaf635c425c1686eab15669fd509649ff45060b315fe52358f8f7aef81136c8.css" data-turbolinks-track="reload" />
<script src="../assets/application-c2684059e5b98adb61b71a5d9ac339856999beefb748deb1e974ab2a7c2943d0.js" data-turbolinks-track="reload"></script>

  </head>

  <body>
    

  <?php require_once "menu.php"; ?>

    

    <div class="container">
      <h1>Sumar producto</h1>


      <form  action="modif_prod.php" accept-charset="UTF-8" method="post">
<input name="utf8" type="hidden" value="&#x2713;" />
<input type="hidden" name="authenticity_token" value="wj40OKzZpnUsCBJ/7ILDclQi8Hf+HAp65Qsh3D0G+p5PuiQdKcTLwXYdm1AJmTPfrbwbdu1kCGRFrblg9RImhg==" />
<input type="hidden" class="form-control" name="no"  value="<?php echo $_GET['no']?>">
  <div class="form-group">
    <label for="provider_name">clave</label>
    <label for="provider_name"><?php echo $consulta[0] ?></label>
  </div>

  <div class="form-group">
    <label for="provider_focus">Nombre comercial</label>
    <label for="provider_focus"><?php echo $consulta[1] ?></label>
  </div>

  <div class="form-group">
    <label for="provider_contact">Ingrediente activo</label>
    <label for="provider_contact"><?php echo $consulta[2] ?></label>
  </div>

  <div class="form-group">
    <label for="provider_address">Presentacion</label>
    <label for="provider_address"><?php echo $consulta[3] ?></label>
  </div>

  <div class="form-group">
    <label for="provider_phone">Cantidad</label>
    <input class="form-control" type="text" name="Cantidad" id="Cantidad" value="<?php echo $consulta[4] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_rfc">Cantidad total</label>
    <input class="form-control" type="text"  maxlength="12" type="text" onKeyUp="this.value=this.value.toUpperCase();" name="total" id="total" value="<?php echo $consulta[5] ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_email">Valor unitario</label>
    <label for="provider_rfc"> <?php echo $consulta[6] ?> </label>
  </div>

  <div class="form-group">
    <label for="provider_website">Valor total</label>
    <label for="provider_rfc"><?php echo $consulta[7] ?></label>
  </div>


  


  <div class="form-group">
  <div class="float-right">
  <?php  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='eliminar_prov.php?no=". $_GET['no']."''>"?>Borrar Proveedor</a> </th>
        
      </div>
  <p>    <input type="submit" name="commit" value="Actualizar" class="btn btn-primary" data-disable-with="Actualizar" /></p>

      <a class="btn btn-primary" href="edit_prod.php">Cancelar</a>
  </div>
</form>

    </div>

    <footer class="footer text-muted bg-light">
  <div class="container">
    <span>© 2019 Parque Industrial Queretaro</span>
    <ul class="list-inline mb-0 float-right">
    </ul>
  </div>
</footer>

  </body>
</html>