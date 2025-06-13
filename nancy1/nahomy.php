<?php  
$username = "root";
$password = "";
$servername = "localhost";
$database = "nnsc";

$conexion = new mysqli($servername, $username, $password, $database);
if($conexion->connect_error){
    die("la conexion fallo" . $conexion->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];
     
    $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES
    ('$nombre', '$precio', '$id_categoria')";
    if($conexion->query($sql)===TRUE){
        echo "<p style='color:green';> producto agregado correctamente </p>";

    }else{
        echo "<p style='color:red'> error: . $conexion->error </p>";
    }
  }
//obtener categorias para sacar la informacion de la base de datos 
$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conexion->query($sql_categorias);
?>
<html>
    <head>
     <title>pagina alterna de prueba</title>
    </head>
    <body>
    <style>
          h1{
            text-align: center;
            margin-bottom: 20px; 
            color: #bb4444;
          }

          table{
            width: 100%;
            border-collapse:collapse;
            margin-top:50px;
            border-radius:50px;
          }

          th, td{
            padding:10px;
            text-align:left;
            border-bottom:1px solid;
          }

          tr:nth-child(even){
            background-color:#bb4444;
            color:black;
          }

          tr:nth-child(odd){
            background-color: #ee6e6e ;
          }

        </style>
        <style>
          .container1{
            display: flex;
            justify-content: center;
            aling-item: center;
            width: 50%;
            background-color: #7e0d0d;
            paddind: 20px;
            border-radius: 18px;
            box-shadow: 0 0 10px rgba(0,0,0,0,0.21);
            color: white;
          }

          h1{
            text-aling: center;
            color: #ff79c6;
            margin-bottom: 15px;

          }

          form{
            display: flex;
            flex-direction: column;
          }

          label{
            font-size: 16px;
            margin-bottom: 5px;
          }

          input[type="text"] {
            paddind: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #400404;
            color: #fff;
          }

          input[type="submit"] {
            paddind: 10px;
            background-color:#532222;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            
          }

          input[type="submit"] :hover {
            background-color: #3ae374
          }
          </style>
        
        <h1>registrar productos</h1>
        <div class="container" style="display:flex; max-with:600px; margin:auto;">
        <form method = "POST">
            <label>nombre del producto </label>
            <input type="text" name="nombre" required><br><br>

            <label>precio </label>
            <input type="number" name="precio" required><br><br>

            <label>categoria </label>
            <select name="categoria" required>
                <option value="">seleccionar una categoria
                <?php 
                if($result_categorias->num_rows > 0){
                    while($row = $result_categorias->fetch_assoc()){
                        echo"<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                }
                ?></option>
            </select><br><br>
            <input type="submit" value="agregar producto">
            </form></div>
            <h2>lista de productos</h2>
            <table>
                <tr>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>categoria</th>
                </tr>
                <?php
                $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS 
                categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";
                $result_productos = $conexion->query($sql_productos);
                if($result_categorias->num_rows>0){
                    while($row = $result_productos -> fetch_assoc()){
                        echo "<tr>
                        <th>{$row['nombre']}</th>
                        <th>{$row['precio']}</th>
                        <th>{$row['categoria']}</th>
                        </tr>";
                    }
                }else{
                    echo "<tr><td>no hay productos registrados</td></tr>";
                }
                ?>
            </table>
</body>
    </html>