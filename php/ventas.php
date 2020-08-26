



<?php
include "conexion.php";
include 'config.php';
include 'carrito.php';



if (empty($_POST['feinf']) && empty($_POST['fesu']))
  $files = get_venta();

 else
 

	

 $files=get_todo_fecha($_POST['feinf'], $_POST['fesu']);




  require_once "cavecera.php";
?>



<div class="col-4" style="margin-bottom: 15%;"></div>
  <section class="container">
    <div class="col-4 "></div>
    <h1>Resumen de Ventas</h1>

  </section>


  <section class="container">
    
    
    
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <?php
  
 
    if (count($files) > 0) : ?>
     <div class="container"> 
     <form method="post" class="form-signin col-6">
    
                    <input type="date" name="feinf" class="form-control "min="2017-04-01"  placeholder="Fecha inferior" required>
                    <input type="date" name="fesu" class="form-control "  max="" placeholder="Fecha superior" required>

                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
                  </div>
   
                  <div class="col-4" style="margin-bottom: 3%;"></div>

      <div class="container">
        <div class="table-responsive">               
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col-4">
                
                <h2>id</h2>
                  </th>
                <th scope="col">
                <h2>Fecha</h2>
                </th>
            
                <th scope="col">
                <h2>Nombre</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Total</h2>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Clave</h2>
             
               
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <h2>Forma</h2>
             
               
                </th>
               
            
              </tr>
            </thead>
            <?php
            $total=0;
             foreach ($files as $f) : ?>
              <tr>

              <?php  echo "<td > <a href='detalledeventa.php?no=".$f->id."''>"?><?php echo $f->id ?></a> </td>           
                <td><?php echo $f->fecha; ?></td>

                <td> <?php echo $f->nombre; ?></td>
                <td> $  <?php echo $f->total; ?></td>
             
                <td><?php echo $f->clave; ?></td>
                <td>     <?php if ($f->forma==1) {
echo '<h1 style="
background-color: red;
font-size: medium;
color: black;
color: black;
">Venta de credito</h1>';
         } else {
          echo '<h1 style="
          background-color: green;
          font-size: medium;
          color: black;
          color: black;
      ">Venta de contado</h1>';
         }
         ?></td>

              
              </tr>
              <?php
              $total=$total+$f->total;
               endforeach; ?>
                </tr>
        <tr><td></td>
        <td></td>
    
        <td> <h1>Total=</h1></td>
        <td> <h1>$ <?php echo $total; ?></h1> </td>
</tr>
          </table>
        </div>
      </div>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>

   

    <div class="col-4" style="margin-bottom: 3%;"></div>

    <?php require_once "footer.php"; ?>

  
