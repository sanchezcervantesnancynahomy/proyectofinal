<?php
         error_reporting(E_ALL);
         ini_set('display_errors', 1);
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "honkai";
        
        $conexion = new mysqli($servername, $username, $password, $database);
        if($conexion->connect_error){
            die("la conexion fallo" . $conexion->connect_error);
        }

        $sql_elementos= "SELECT id, elemento FROM elementos";
        $result_elementos = $conexion->query($sql_elementos);
        $sql_estados = "SELECT id, estado FROM estados";
        $result_estados = $conexion->query($sql_estados);
        $sql_modos = "SELECT id, modo FROM modos";    
        $result_modos = $conexion->query($sql_modos);
        $sql_planetas = "SELECT id, planeta FROM planetas";
        $result_planetas = $conexion->query($sql_planetas);
        $sql_vias = "SELECT id, via FROM vias";
$result_vias = $conexion->query($sql_vias);

       
        
    
        

        //insertar alumnos 
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          var_dump($_POST);//linea dedicada para depurar
            $id = $conexion->real_escape_string($_POST ["id"]);
            $nombre_del_personaje = $conexion->real_escape_string($_POST ["nombre_del_personaje"]);
            $id_planeta = $conexion->real_escape_string($_POST ["planeta"]);
            $id_elemento = $conexion->real_escape_string($_POST ["elemento"]);
            $id_via = $conexion->real_escape_string($_POST ["via"]);
            $id_estado = $conexion->real_escape_string($_POST ["estado"]);
            $id_modo = $conexion->real_escape_string($_POST ["modo"]);
            $ocupacion= $conexion->real_escape_string($_POST ["ocupacion"]);
        
            $sql = "INSERT INTO datos (id, nombre_del_personaje, id_planeta, id_elemento,
            id_via, id_estado, id_modo, ocupacion)
            VALUES ('$id', '$nombre_del_personaje', '$id_planeta', '$id_elemento', '$id_via',
             '$id_estado', '$id_modo', '$ocupacion')";
          
          if ($conexion->query($sql) === TRUE){
            echo "<p class='success'> nuevo alumno agregado.</p>";
            header("location: " . $_SERVER['PHP_SELF']);
            exit();
          } else {
            echo "<p class='error'> error al agregar alumnos" . $conexion->error . "</P>";
          }

        }
        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
        
        .shadows-into-light-regular {
  font-family: "Shadows Into Light", serif;
  font-weight: 400;
  font-style: normal;
}

        </style>


    
<style>
@import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');

.rock-salt-regular {
  font-family: "Rock Salt", cursive;
  font-weight: 400;
  font-style: normal;
}

</style>
    
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"></head>-->

  
<body>
    <nav class="navbar navbar-light" style="background:linear-gradient(to right, black, rgb(68, 23, 23), rgb(187, 27, 27))">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color: rgb(155, 17, 17);">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/nancy/nancy01.php">Práctica 1</a><br>
                            <a class="dropdown-item" href="/nancy/nancy02.php">Práctica 2</a><br>
                            <a class="dropdown-item" href="/nancy/nancy03.php">Práctica 3</a><br>
                            <a class="dropdown-item" href="/nancy/nancy04.php">Práctica Final</a><br>
                        </div>
                    </li>

                    
                    
                </ul>
              <img src="shadow.png" width="40x">
            </div>

        </div>
    </nav>

    <div class="jumbotron" style="background-color:#8389ac ;">
        <h1  class="shadows-into-light-regular " style="text-align: center; color: #19277c ;">insertar datos </h1> 
        <style>

          body{
            background-color:#8389ac ;
          }
          h1{
            text-align: center;
            margin-bottom: 20px; 
            color:rgb(96, 97, 117);
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
            background-color:#5984ba ;
            color:black;
          }

          tr:nth-child(odd){
            background-color:rgb(160, 158, 214) ;
          }

        </style>
        <style>
          th{
            background-color:rgb(40, 50, 105);
            color: white;
          }
        </style>
        <style>
          .container1{
            display: flex;
            
            justify-content: center;
            aling-item: center;
            width: 50%;
            bottom:50px;
            background-color:rgb(44, 57, 133);
            paddind: 20px;
           
            border-radius: 18px;
            box-shadow: 0 0 10px rgba(0,0,0,0,0.21);
            color: white;
          }

          h1{
            text-aling: center;
            color:rgb(121, 152, 255);
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
            background-color:rgb(111, 87, 168);
            color: #fff;
          }

          input[type="submit"] {
            paddind: 10px;
            background-color:rgb(78, 142, 238);
            border: none;
            color: #282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            
          }

          input[type="submit"] :hover {
            background-color:rgb(134, 192, 202)
          }

          option{
            background-color:#46409c ;
            color:#b3afeb  ;
          }

        </style> 
        
        <div class="container1" style="display:flex; max-with:600px; margin:auto; ">
        <form method="POST" id="formulario" >

            <label for="nombre_del_personaje"class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;">nombre</label>
            <input type="text" id="nombre_del_personaje" name="nombre_del_personaje" required><br>

            <label for="planeta" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;"> planeta </label>
            <select name="planeta" required>
            <option value = ""> Seleccione un planeta </option>
            <?php while ($row = $result_planetas-> fetch_assoc()){
              echo "<option value = '" . $row["id"] . "'>" . $row["planeta"] . "</option>";
            } ?></select><br>

<label for="elemento" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;"> elemento </label>
            <select name="elemento" required>
            <option value = ""> Seleccione un elemento </option>
            <?php while ($row = $result_elementos-> fetch_assoc()){
              echo "<option value = '" . $row["id"] . "'>" . $row["elemento"] . "</option>";
            } ?></select><br>

            <label for="via" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;"> vias </label>
            <select name="via" required>
            <option value="">seleccione una via</option>
            <?php while ($row = $result_vias-> fetch_assoc()){
              echo"<option value = '" . $row["id"] . "'>" . $row["via"] . "</option>";
            } ?>
            </select><br>

            <label for="estado" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;"> estado </label>
            <select name="estado" required>
            <option value="">seleccione un estado</option>
            <?php while ($row = $result_estados-> fetch_assoc()){
              echo"<option value = '" . $row["id"] . "'>" . $row["estado"] . "</option>";
            } ?>
            </select><br>

            <label for="modo" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;"> modo </label>
            <select name="modo" required>
            <option value="">seleccione un modo</option>
            <?php while ($row = $result_modos-> fetch_assoc()){
              echo"<option value = '" . $row["id"] . "'>" . $row["modo"] . "</option>";
            } ?>
            </select><br>

            




            <label for="ocupacion" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;">ocupacion</label>
            <input type="text" id="ocupacion" name="ocupacion" required><br>

            <input type="submit" value="agregar registro" class="rock-salt-regular " style="text-align: center; color:rgb(4, 6, 14) ;">
        
        </form>

        </div><br>
        <h2 class="shadows-into-light-regular " style="text-align: center; color: #19277c ;">lista de personajes</h2>
        <table border="1">
            <tr>

                <th>nombre del personaje</th>
                <th>planeta</th>
                <th>elemento</th>
                <th>via</th>
                <th>estado</th>
                <th>modo</th>
                <th>ocupacion</th>
            </tr>
            <?php
            $sql= "SELECT
            
            datos.nombre_del_personaje,
            planetas.planeta,
            elementos.elemento,
            vias.via,
            estados.estado,
            modos.modo,
            datos.ocupacion
            FROM datos
            JOIN planetas ON datos.id_planeta = planetas.id
            JOIN elementos ON datos.id_elemento = elementos.id
            JOIN vias ON datos.id_via = vias.id
            JOIN estados ON datos.id_estado = estados.id
            JOIN modos ON datos.id_modo = modos.id";
            $resultado = $conexion->query($sql);
            if($resultado->num_rows > 0){
            while ($row = $resultado-> fetch_assoc()){
              echo "<tr>
              <td>{$row['nombre_del_personaje']}</td>
              <td>{$row['planeta']}</td>
              <td>{$row['elemento']}</td>
              <td>{$row['via']}</td>
              <td>{$row['estado']}</td>
              <td>{$row['modo']}</td>
              <td>{$row['ocupacion']}</td>
              </tr>";
            }
          } else {
            echo "<tr><td colspan='11'>no hay alumnos registrados</td></tr>";
          }
            
            ?>
        </table>

        </body>

        </html>