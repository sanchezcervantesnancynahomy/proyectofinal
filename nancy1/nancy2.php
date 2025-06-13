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
        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "persona5";
        
        $conexion = new mysqli($servername, $username, $password,  $database);
        if ($conexion->connect_error){
          die("conexion fallida: " . $conexion->connect_error);
        }
        function insertarPersonaje($conexion){
          if($_SERVER["REQUEST_METHOD"]=="POST"){
            var_dump($_POST);
            $nombre = $conexion->real_escape_string($_POST["nombre"]);
            $apellidos = $conexion->real_escape_string($_POST["apellidos"]);
            $añodenacimiento = $conexion->real_escape_string($_POST["añodenacimiento"]);
            $edad = $conexion->real_escape_string($_POST["edad"]);
            $estado = $conexion->real_escape_string($_POST["estado"]);
            $altura = $conexion->real_escape_string($_POST["altura"]);
            $peso = $conexion->real_escape_string($_POST["peso"]);
            $estadocivil = $conexion->real_escape_string($_POST["estadocivil"]);
            $universidadTerminada = $conexion->real_escape_string($_POST["universidadTerminada"]);
            
            $sql = "INSERT INTO tabla (nombre, apellidos, añodenacimiento, edad, estado, altura, peso, estadocivil, universidadTerminada)
            VALUES ('$nombre', '$apellidos', '$añodenacimiento', '$edad', '$estado', '$altura', '$peso', '$estadocivil', '$universidadTerminada')";
            if($conexion->query($sql)==TRUE){
              echo "<p class='success'>nuevo nombre agregado. </p>";
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }else{
              echo "<p class='error'>error al agregar:" . $conexion->error . "</p>";
            }
          }
        } insertarPersonaje($conexion);

        $sql = "SELECT * FROM tabla";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows >0) {
          echo "<table class= 'table table-bordered'>";
          echo "<tr><th>id</th><th>nombre</th><th>apellidos</th><th>añodenacimiento</th><th>edad</th><th>estado</th><th>altura</th><th>peso</th><th>estadocivil</th><th>universidadTerminada</th></tr>";
          while($row = $resultado->fetch_assoc()){
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellidos"] . "</td><td>" . $row["añodenacimiento"] . "</td><td>" . $row["edad"] 
            . "</td><td>" . $row["estado"] . "</td><td>" . $row["altura"] . "</td><td>" . $row["peso"] . "</td><td>" . $row["estadocivil"] . "</td><td>" . $row["universidadTerminada"] . "</td></tr>";

          }
          echo "</table>";
        } else{
          echo "<p>no se encontraron registros en la base de datos</p>";
        }
        $conexion->close();
        ?>
      </div>    
    </div>

    

        

</body>
</html>