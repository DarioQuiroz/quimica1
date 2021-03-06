<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Agroseader</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--SEO Meta Tags-->
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Material Icons -->
  <link href="../css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  <!-- Brand Icons -->
  <link href="../css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  <!-- Bootstrap -->
  <link href="../css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Theme Styles -->
  <link href="../css/theme.min.css" rel="stylesheet" media="screen">
  <link href="../css/theme.css" rel="stylesheet" media="screen">

  <!-- Page Preloading -->
  <script src="../js/vendor/page-preloading.js"></script>

  <!-- Modernizr -->
  <script src="../js/vendor/modernizr.custom.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->

<body class="page-preloading">

  <!-- Page Pre-Loader 
  <div class="page-preloader">
    <div class="preloader">
      <img src="img/preloader.gif" alt="Preloader">
    </div>
  </div> .page-preloader -->

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->
    <header class="navbar navbar-sticky">



      <!-- Site Logo -->
      <a href="principal.php" class="site-logo visible-desktop">
   <img id="logo" src="../img/image.png" style="width:150%;     margin-left: 5%;" alt="logo">
      </a><!-- site-logo.visible-desktop -->
      <!-- site-logo.visible-mobile -->

      <!-- Language Switcher -->
      <!-- .lang-switcher -->

      <!-- Main Navigation -->
      <!-- Control the position of navigation via modifier classes: "text-left, text-center, text-right" -->
      <nav class="main-navigation text-center">
      <?php
        
            ?>

        <ul class="menu">

          <li class="menu-item-has-children">
            <a href="principal.php">Vender</a>
            

          </li>
          <li class="menu-item-has-children">
            <a href="#">Producto</a>
            <ul class="sub-menu">

            <li class="menu-item-has-children"><a >Registrar nuevo producto </a>
            <ul class="sub-menu">
            <li><a href="proveedores.php?ver=1&&opc=1">Agregar producto a credito</a></li>
          <li><a   href="proveedores.php?ver=1&&opc=2">Agregar producto de contado </a></li>

            </li>
            </ul>
        
          <li><a  href="edit_prod.php">Agregar a producto existetnte</a></li>
          <li><a  href="edit_prod.php">Editar producto</a></li>

            </ul>
          </li>
         

          <li class="menu-item-has-children">
            <a href="#">Ventas</a>
            <ul class="sub-menu" id="sub1">
              <li><a href="inventario.php">Inventario</a></li>
              <li><a href="ventas.php?opc=1">Resumen de ventas</a></li>
              <li><a href="ventas.php?opc=2">Resumen de Días</a></li>

            </ul>
          </li>

       


          <li class="menu-item-has-children">
            <a href="">clientes</a>
            <ul class="sub-menu" id="sub1">
            <li><a href="registro_cliente.php">Registrar clientes</a></li>
              <li><a href="clientes.php?editar=1">Editar clientes</a></li>
              <li><a href="clientes.php?ver=2">Ver clientes</a></li>
              <li><a href="clientes.php?adeudo=3">Adeudo de clientes</a></li>
             
            </ul>
          </li>


          <li class="menu-item-has-children">
            <a href="#">Proveedores</a>
            <ul class="sub-menu">
            <li><a  href="nuevoproveedor.php">Registrar nuevo proveedor </a></li>
          <li><a  href="proveedores.php?ver=2">Ver provedores registrados</a></li>
          <li><a  href="proveedores.php?adeudo=3">ver adeudo a proveedores</a></li>
          <li><a  href="edit_prov.php">Editar Proveedores</a></li>

            </ul>
          </li>


          <li class="menu-item-has-children">
            <a href="#">Otros</a>


            <ul class="sub-menu">
            <li><a  href="capturargasto.php">Registrar gasto   </a></li>
            <li><a  href="gastos.php?ver=3">Ver gastos</a></li>
            <li><a  href="gastos.php?ver=2">Modificar gasto </a></li>
            <li><a  href="../../index.php">Cerrar sesion   </a></li>


            <li class="menu-item-has-children"><a >Usuarios </a>
            <ul class="sub-menu">
            <li><a href="reus.php?ver=1&&opc=1">Agregar </a></li>
          <li><a   href="editar_usuarios.php?ver=1&&opc=2">Modificar </a></li>

            </li>
            
            </ul>
        




            </ul>
          </li>




        
        </ul><!-- .menu -->
      </nav><!-- .main-navigation -->

      <!-- Toolbar -->
      <div class="toolbar">
        <div class="inner">
          <a href="#" class="mobile-menu-toggle"><i class="material-icons menu"></i></a>
          <!--   <a href="account.html"><i class="material-icons person"></i></a>-->
          <div class="cart-btn">
            <a href="carritodecompras.php?">
              <i>
                <span class="material-icons shopping_basket"></span>
                <span class="count"><?php error_reporting(0);
                                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                                    ?></span>
              </i>
            </a>
            <!-- Cart Dropdown -->
            <?php
            $total = 0;
            ?>
            <?php
            foreach ($_SESSION['carrito'] as $indice => $producto) {
              ?>
        
              <div class="cart-dropdown">
                <div class="cart-item">
                  <a href="carritodecompras.php" class="item-thumb">
                    
                  </a>
                  <div class="item-details">
                    <h3 class="item-title"><a href=""> <?php echo $producto['modelo']; ?></a></h3>
                    <h4 class="item-price"> PRECIO $<?php echo $producto['PRECIO']; ?></h4>
                    <h4 class="item-price"> CANTIDAD =<?php echo $producto['CANTIDAD']; ?></h4>

                  </div>


                  <form action="" method="post">
                  <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['modelo'], code, key); ?>">       
                   <button class="btn btn-danger close-btn material-icons close" data-toggle="tooltip" type="submit" data-placement="top" name="btnAccion" value="eliminar" title="Remove">
                    </button>
                  </form>


                </div>
                <?php
                $total = $total + ($producto['CANTIDAD'] * $producto['PRECIO']);
              }
              ?>
             
              <!-- .cart-item -->


              <!-- .cart-item -->
            
            </div><!-- .cart-dropdown -->
          </div><!-- .cart-btn -->
        </div><!-- .inner -->
      </div><!-- .toolbar -->
    </header><!-- .navbar.navbar-sticky -->

            


