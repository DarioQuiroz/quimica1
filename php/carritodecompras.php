<?php
error_reporting(0);
include 'config.php';
include 'carrito.php';
include 'cavecera.php' ?>
<!-- Container -->
<section id="principal"  class="container padding-top-3x padding-bottom">

  <h1 class="space-top-half">Productos por cobrar</h1>
  
  <?php
  if (!empty($_SESSION['carrito'])) {



    ?>
    <div class="row padding-top">

      <!-- Cart -->
      <div class="col-sm-8 padding-bottom-2x">
        <p class="text-sm">
          <span class="text-gray">Agregados</span> <?php
                                                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                                                    ?> productos
          <span class="text-gray"> a la venta</span>
        </p>
        <div class="shopping-cart">
          <?php
      global $total;





          
        


?>
          <?php
          foreach ($_SESSION['carrito'] as $indice => $producto) {
            ?>
            <!-- Item -->
            <div class="item">
             
              <div class="item-details">
                <h3 class="item-title"><a href=""> <?php echo $producto['modelo']; ?> </a></h3>
                <h4 class="item-price">$ <?php echo $producto['PRECIO']; ?></h4>
                <input class="quantity" type="hidden" id="pres" value="<?php echo $producto['PRECIO']; ?>">
                <div class="count-input">
                 </div>
              
              <form action="" method="post">
              <a class="incr-btn" id='aumentar'  onclick="carrito(this)" value="aumentar" data-action="decrease" href="#">–</a>
                  <input class="quantity" onchange="multiplicar();" type="text" id="act" value="<?php echo $producto['CANTIDAD']; ?>">
                  <a class="incr-btn" id='disminuir' onchange="multiplicar();"  onclick="carrito(this)" value="disminuir" data-action="increase" href="#">+</a>
                <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['modelo'], code, key); ?>">
                <button class="btn btn-danger" data-toggle="tooltip" type="submit" data-placement="top" name="btnAccion" value="eliminar" title="Remove">
                  <i class="material-icons remove_shopping_cart"></i>
                </button>
                <input type="submit" name="submit" value="Submit Form"><br>

              </form>
              </div>
          
            </div><!-- .item -->
            <?php
            $total = ($producto['CANTIDAD'] * $producto['PRECIO']);
          }
          ?>

        </div><!-- .shopping-cart -->

        <!-- Coupon -->
        <div class="">

        </div>
      </div><!-- .col-sm-8 -->

      <!-- Sidebar -->
      <div class="col-md-3 col-md-offset-1 col-sm-4 padding-bottom-2x">
        <aside>
          <h3 class="toolbar-title">Subtotal del carrito:</h3>
          <h4 id="totalpay">$ <?php echo number_format($total, 2) ?> </h4>
          <p class="text-sm text-gray">* Nota: Esta cantidad no incluye los gastos de envío internacional. Podrás calcular los gastos de envío en la caja.</p>
       
          <a href="#" class="btn btn-default btn-block waves-effect waves-light">Actualización de la compra</a>
        

<div class="contenedor-modal">
  <button type="button" class="btn btn-primary btn-block waves-effect waves-light space-top-none" data-toggle="modal" data-target="#miModal">Proceder a Pagar</button>
</div>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Forma de pago</h4>
      </div>
      <div class="modal-body">







      <div class="contenedor-modal2">
  <button type="button" class="btn btn-primary btn-block waves-effect waves-light space-top-none" data-toggle="modal" data-target="#miModal2">Venta de credito</button>
</div>
       <a href="checkout.php" class="btn btn-primary btn-block waves-effect waves-light space-top-none">Pagar de contado</a>

      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Clientes</h4>
      </div>
      <div class="modal-body">

        <a href='registro_cliente.php?precio=<?php echo '<script>  document.getElementById("totalpay").value;
   </script>' ?>' class="btn btn-primary btn-block waves-effect waves-light space-top-none">Reistrar cliente </a>
        <a href="clientes.php?precio=<?php echo number_format($total, 2) ?>" class="btn btn-primary btn-block waves-effect waves-light space-top-none">Seleccionar cliente </a>

      </div>
    </div>
  </div>
</div>

          
        </aside>
      </div><!-- .col-md-3.col-sm-4 -->
    </div><!-- .row -->
  </section><!-- .container -->
<?php  } else { ?>
  <div class="alert alert-success">no hay productos en el carro...</div>
<?php
}
?>

<script>

function multiplicar(){

  m1 = document.getElementById("act").value;
  m2 = document.getElementById("pres").value;
  r = m1*m2;

 
  
  document.getElementById("totalpay").innerHTML = r;


}   </script>


<?php include 'footer.php'; ?>
</div><!-- .page-wrapper -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="../js/vendor/jquery-2.1.4.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/smoothscroll.js"></script>
<script src="../js/vendor/velocity.min.js"></script>
<script src="../js/vendor/waves.min.js"></script>
<script src="../js/scripts.js"></script>

<script src="../js/validar.js"></script>
<link rel="stylesheet" href="../css/style.css" />

</body><!-- <body> -->

</html>