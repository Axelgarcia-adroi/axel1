<!DOCTYPE html>
<html lang="en">
<?php 
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>venta</title>


<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    body {
      background: url("./imagenes2/fondo4.jpg") no-repeat center center fixed;
      background-size: cover;
      color: #333;
      line-height: 1.6; 
  } 
  h2 {
      font-family: Arial, sans-serif;
      padding: 10px;
      color: white;
      font-size: 35px;
  }

  form {
      margin-bottom: 20px;
      background-color: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
  }

  #vendedor{
    padding: 6px;
    margin: 5px 0;
    width: 700px;
    box-sizing: border-box;
    font-size:17px;
}

  #producto {
    padding: 100px;     
    height: 100px;    
    width: 700px;
    margin: 5px;
    box-sizing: border-box;
    font-size:60px;
}

  #cantidad {
    padding: 8px;
    margin: 5px 0;
    width: 700px;
    box-sizing: border-box;
    font-size:15px;
}
  #precio{
      padding: 8px;
      margin: 5px 0;
      width: 700px;
      box-sizing: border-box;
      font-size:15px;
  }

  #lugar{
      padding: 8px;
      margin: 5px 0;
      width: 700px;
      box-sizing: border-box;
      font-size:60px;
  }
  #fecha{
      padding: 8px;
      margin: 5px 0;
      width: 700px;
      box-sizing: border-box;
      font-size:13px;
  }
  #Total{
      border-style: solid;
      height: 10px;
      margin: 10px;
  }
  #agregarventa{
      padding: 8px;
      margin: 5px 0;
      width: 200px;
      box-sizing: border-box;
  } 
  header {
      background: #00b4d8;
      padding: 5px 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
  }
  main{
    background: #00b4d8;
    border:style;
    height: 90px;
  }

  

  
  .img{
        margin-left:50px;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        margin-top: 5px;
        margin-right: 10px;
  }
  .agregar-ventana {
    
      width: 850px;
      height: 650px;
      background-color: #90e0ef;
      text-align: center;

  }
  footer {
      background: #222;
      color: white;
      padding: 20px 10px;
      text-align: center;
     
      
     
    }
    #s{
      font-size: 20px;
    }
   

  #s2{
     background: #222;
      color: white;
      padding: 20px 10px;
      text-align: center;
      font-size: 0.9em;
  }
  #s3{
      margin-right  :70px;
  }
  #s4{
   margin-left:500px;
   margin-top:25px;
  }
  #s5{
    margin-left: 1200px;
    margin-top:25px;

  }
  
  

  nav {
  display: flex;
  gap: 25px;
}

nav a {
  text-decoration: none;
  color: white;
  font-weight: 600;
  font-size: 16px;
  padding: 10px 22px;
  border-radius: 30px;
  background:#0096c7;
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
}

nav a:hover {
  background: white;
  color: #0077b6;
  transform: translateY(-2px);
}

  #t{
    font-size: 30px;
  }
 
  #agregarventa{
    font-size: 25px;
    border-radius: 1.0em;
    background-color:  #00b4d8 ;
  }
  #agregarventa:hover{
    font-size: 25px;
    border-radius: 1.0em;
    background-color:white;
    color:#0077b6;

  }

</style>

<script>
  function actualizarPrecioYTotal() {
    const preciosProductos = {
      "Garrafon": 12,
      "Garrafon Rosa Mediano": 8,
      "Garrafon Azul Mediano": 8,
      "Pipa de Agua": 300,
      "Paquete de 12 Botellas de litro y Medio": 90,
      "Paquete de 24 Botellas de 600 ml": 100,
      "Tambo de Agua Grande": 100,
      "Tambo de Agua Chico": 80
    };

    const producto = document.getElementById("producto").value;
    const cantidad = parseInt(document.getElementById("cantidad").value) || 0;
    const precio = preciosProductos[producto] || 0;
    
    
    document.getElementById("precio").value = precio;

    const total = cantidad * precio;

    document.getElementById("t").innerText = "$" + total;


    document.getElementById("totalInput").value = total;
  }


  window.onload = function() {
    document.getElementById("producto").addEventListener("change", actualizarPrecioYTotal);
    document.getElementById("cantidad").addEventListener("input", actualizarPrecioYTotal);


  let hoy = new Date(); 
  let yyyy = hoy.getFullYear();
  let mm = String(hoy.getMonth() + 1).padStart(2, '0'); 
  let dd = String(hoy.getDate()).padStart(2, '0'); 
  let fechaHoy = yyyy + '-' + mm + '-' + dd; 

  document.getElementById("fecha").value = fechaHoy;
  }
</script>
</head>
<body>
  <header>
    <label>
      <img src="imagenes2/Puri_sandiego.png"  class="img" width="90px" height="90px">
    </label>
    <nav>
      <a id="s3" href="inicio.html">Inicio</a>
      <a id="s3" href="productos.html">Productos</a>
      <a id="s3" href="ventas.php"> Venta</a>
      <a id="s3" href="acceso.html"> Salir</a>

    </nav>
  </header>

   <center><h2>Agregar Venta</h2></center>
  
 <center> <form action="./guarda.php" method="post" class="agregar-ventana">
   <label id="s">Vendedor</label><br>
   <input type="text" name="vendedor" id="vendedor" 
       value="<?php echo $_SESSION['user']; ?>" required> <br>
      <label id="s">Producto:</label><br>
    <select id="producto" name="producto" required>
      <option id="producto" value="">-- Selecciona un producto --</option>
      <option id="producto" value="Garrafon">Garrafon</option>
      <option id="producto" value="Garrafon Rosa Mediano">Garrafon Rosa Mediano</option>
      <option id="producto" value="Garrafon Azul Mediano">Garrafon Azul Mediano</option>
      <option id="producto" value="Pipa de Agua">Pipa de Agua</option>
      <option id="producto" value="Pipa de Agua">Pipa de Agua</option>
      <option id="producto" value="Paquete de 12 Botellas de litro y Medio">Paquete de 12 Botellas de litro y Medio</option>
      <option id="producto" value="Paquete de 24 Botellas de 600 ml">Paquete de 24 Botellas de 600 ml</option>
      <option id="producto" value="Tambo de Agua Grande">Tambo de Agua Grande</option>
      <option id="producto" value="Tambo de Agua Chico">Tambo de Agua Chico</option>
    </select><br>

    <label id="s">Cantidad:</label><br>
    <input type="number" name="cantidad" id="cantidad" required min="1"><br>

    <label id="s">Precio:</label><br>
    <input type="text" name="costo_venta" id="precio" required><br>

    <label id="s">Lugar:</label><br>
    <select id="lugar" name="lugar">
      <option id="lugar" value="">--seleccione un lugar (Opcional)--</option>
      <option  value="Xochihuehuetlan">Xochihuehuetlan</option>
      <option  value="Cacalutla">Cacalutla</option>
      <option  value="Jilotepec">Jilotepec</option>
      <option  value="Tepetlapa">Tepetlapa</option>
    </select><br>

    <label id="s">Fecha:</label><br>
    <input type="date" name="fecha" id="fecha"><br>

   <center> <label id="t" >Total</label> </center> <br>
    <center> <label id="t"></label></center>
      
    
    <input type="hidden" name="total" id="totalInput">
  
<center>
  <input type="submit" id="agregarventa" value="Agregar venta">
</center>
</form></center><br><br>
<main>
<nav>
     <a href="accesoregistros.html" id="s5" class="hero">Registros </a>
    
</nav>
</main>
    
  <footer >
    <p>© 2025 PurificadoraSanDiego. Todos los derechos reservados.</p>
  </footer>
</body>
</html>