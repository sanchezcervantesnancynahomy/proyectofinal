<?php
    ob_start();
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
                            <a class="dropdown-item" href="/nancy1/nancy01.php">Práctica 1</a><br>
                            <a class="dropdown-item" href="/nancy1/nancy2.php">Práctica 2</a><br>
                            <a class="dropdown-item" href="/nancy1/nancy03.php">Práctica 3</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="/nancy1/nancy04.php">Práctica 4</a><br>
                          <a class="dropdown-item" href="/nancy1/nancya.php">Práctica 5</a><br>
                          <a class="dropdown-item" href="/nancy1/nahomy.php">Práctica 5a</a><br>
                          <a class="dropdown-item" href="/nancy1/nancya.php">Práctica 5b</a><br>
                          <a class="dropdown-item" href="/nancy1/p1.php">Práctica Final</a><br>
                      </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/nancy1/nancy04.php">Práctica 6</a><br>
                        <a class="dropdown-item" href="/nancy1/nancya.php">Práctica 7</a><br>
                        <a class="dropdown-item" href="/nancy1/nahomy.php">Práctica 8</a><br>
                        <a class="dropdown-item" href="/nancy1/nancya.php">Práctica 9</a><br>
                    </div>
                </li>
                </ul>
              <img src="shadow.png" width="40x">
            </div>

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="shadows-into-light-regular " style="text-align: center; color: brown;">mostrar datos </h1> 
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
          th{
            background-color: #c52184;
            color: white;
          }
        </style>
        <style>
          .container1{
            display: flex;
            justify-content: center;
            aling-item: center;
            width: 50%;
            background-color: #282a36;
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
            background-color: #44675a;
            color: #fff;
          }

          input[type="submit"] {
            paddind: 10px;
            background-color: #50fa7b;
            border: none;
            color: #282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            
          }

          input[type="submit"] :hover {
            background-color: #3ae374
          }
        </style>
         </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Numero de Control</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Colonia</th>
                    <th>Especialidad</th>
                    <th>Genero</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Fecha de Ingreso</th>
                </tr>
            </thead>
            <tbody> 
        
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT
                a.numero_control,
                a.nombre,
                a.apellido_paterno,
                a.apellido_materno,
                e.edad,
                c.nombre_colonia,
                es.nombre_especialidad,
                g.nombre_genero,
                a.correo,
                a.telefono,
                a.fecha_ingreso
                FROM alumnos a
                LEFT JOIN edades e ON a.id_edad = e.id
                LEFT JOIN colonias c ON a.id_colonia = c.id
                LEFT JOIN especialidades es ON a.id_especialidad = es.id
                LEFT JOIN generos g ON a.id_genero = g.id";
        $resultado = $conexion->query($sql);


        if ($resultado->num_rows > 0) {
            
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                <td>{$row['numero_control']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['apellido_paterno']}</td>
                <td>{$row['apellido_materno']}</td>
                <td>{$row['edad']}</td>
                <td>{$row['nombre_colonia']}</td>
                <td>{$row['nombre_especialidad']}</td>
                <td>{$row['nombre_genero']}</td>
                <td>{$row['correo']}</td>
                <td>{$row['telefono']}</td>
                <td>{$row['fecha_ingreso']}</td>
                </tr>";
            }
        }   else {
            echo "<p>No se encontraron registros en la base de datos</p>";
        }
        $conexion->close();
    
        ?>
        </tbody>
    </table>

</div>

</body>
</html>