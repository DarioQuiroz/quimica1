<?php require_once "menu.php"; ?>
    <body>

<div class="container">
      <h1>Nuevo producto</h1>
            <form method="post" action="consultas.php" enctype="multipart/form-data">
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
    <input class="form-control" type="number" name="telefono" id="telefono" required/>
  </div>

  <div class="form-group">
    <label for="provider_rfc">Cantidad total</label>
    <input class="form-control" size="12" maxlength="12" type="text" onKeyUp="this.value=this.value.toUpperCase();" name="rfc" id="rfc" required/>
   
  </div>

  <div class="form-group">
    <label for="provider_email"> Valor unitario</label>
    <input class="form-control" type="text" name="correo" id="correo" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Valor total</label>
    <input class="form-control" type="text" name="sitioweb" id="sitioweb" required/>
  </div>


             <input class="btn btn-primary" type="submit" value="Registrar" name="subir">
<a class="btn btn-primary" href="provedores_public.php">cancelar</a>
            </form>
        </div>
        </div>



        <footer class="footer text-muted bg-light">
            <div class="container">
                <span>© </span>
                <ul class="list-inline mb-0 float-right">
                </ul>
            </div>
        </footer>
    </body>
</html>


