<?php  
include 'carrito.php';
require_once "cavecera.php";
 ?>
 

 <div class="container" style="margin: 15%">
      <h1>Nuevo producto</h1>
            <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
    <label for="provider_name">clave</label>
    <input class="form-control" type="text" name="nombre" id="nombre" required/>
  </div>

  <div class="form-group">
    <label for="provider_focus">Nombre comercial</label>
    <input class="form-control" type="text" name="giro" id="giro" required/>
  </div>

  <div class="form-group">
    <label for="provider_contact">Ingrediente activo</label>
    <input class="form-control" type="text" name="contacto" id="contacto" required/>
  </div>

  <div class="form-group">
    <label for="provider_address">Presentacion</label>
    <input class="form-control" type="text" name="direccion" id="direccion" required/>
  </div>

  <div class="form-group">
    <label for="provider_phone">Cantidad</label>
    <input class="form-control" value="" onchange="multiplicar();" type="number" step="0.001" name="telefono" id="telefono" required/>
  </div>

  <div class="form-group">
    <label for="provider_rfc">Cantidad total</label>
    <input class="form-control" size="12" maxlength="12" type="number" step="0.001"  name="rfc" id="rfc" required/>
   
  </div>

  <div class="form-group">
    <label for="provider_email"> Valor unitario de compra</label>
    <input value="" onchange="multiplicar();"  class="form-control" type="number" step="0.001" name="correo" id="correo" required/>
  </div>


  <div class="form-group">
    <label for="provider_email"> Valor unitario de venta</label>
    <input value="" onchange="multiplicar();"  class="form-control" type="number" step="0.001" name="precioventa" id="precioventa" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Valor total</label>
    <input class="form-control" type="text" name="sitioweb"  value="" id="sitioweb" required/>
  </div>


  <div class="form-group">
    <label for="provider_website">Linea</label>
    <input class="form-control" type="text" name="Linea" id="Linea" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Folio de compra</label>
    <input class="form-control" type="text" name="folio" value="<?php echo $_GET ['folio']; ?>" id="folio" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Clave proveedor</label>
    <input class="form-control" type="text" name="claprov" id="claprov" value="<?php echo $_GET ['clave']; ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Razon social</label>
    <input class="form-control" type="text" name="razo" id="razo" value="<?php echo $_GET ['rs']; ?>" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Opcion</label>
    <input class="form-control" type="text" name="razo" id="razo" value="<?php echo $_GET ['opc']; ?>" required/>
  </div>

             <input class="btn btn-primary" type="submit" name="btnAccion" value="Agregrar">
<a class="btn btn-primary" href="principal.php">cancelar</a>
            </form>

            
        </div>
        </div>


        <script>

function multiplicar(){
  m1 = document.getElementById("telefono").value;
  m2 = document.getElementById("correo").value;
  r = m1*m2;
  document.getElementById("sitioweb").value = r;
}   </script>



        <?php require_once "footer.php"; ?>
