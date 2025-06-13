<?php
    ob_start();
?>

 
        
        <?php
         error_reporting(E_ALL);
         ini_set('display_errors', 1);
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";
        
        $conexion = new mysqli($servername, $username, $password, $database);
        if($conexion->connect_error){
            die("la conexion fallo" . $conexion->connect_error);
        }
       $sql_edad = "SELECT id, edad FROM edades";
       $result_edad = $conexion->query($sql_edad);

       $sql_colonias = "SELECT id, nombre_colonia FROM colonias";
       $result_colonias= $conexion->query($sql_colonias);

       $sql_especialidad = "SELECT id, nombre_especialidad FROM especialidades";
       $result_especialidad = $conexion->query($sql_especialidad);

       $sql_genero = "SELECT id, nombre_genero FROM generos";
       $result_genero = $conexion->query($sql_genero);
       {
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            var_dump($_POST);
            $numero_control = $conexion->real_escape_string($_POST ["numero_control"]);
            $nombre = $conexion->real_escape_string($_POST ["nombre"]);
            $apellido_paterno = $conexion->real_escape_string($_POST ["apellido_paterno"]);
            $apellido_materno = $conexion->real_escape_string($_POST ["apellido_materno"]);
            $edad = $conexion->real_escape_string($_POST ["edad"]);
            $colonia = $conexion->real_escape_string($_POST ["colonia"]);
            $especialidad = $conexion->real_escape_string($_POST ["especialidad"]);
            $genero = $conexion->real_escape_string($_POST ["genero"]);
            $correo = $conexion->real_escape_string($_POST ["correo"]);
            $telefono = $conexion->real_escape_string($_POST ["telefono"]);
            $fecha_ingreso = $conexion->real_escape_string($_POST ["fecha_ingreso"]);

            $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad,
            id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
            VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia',
             '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso' )";
          
          if($conexion->query($sql) === TRUE){
            echo "<p class='success'> nuevo alumno agregado.</p>";
            header("location: " . $_SERVER['PHP_SELF']);
            exit();
          } else {
            echo "<p class='error'> error al agregar alumnos" . $conexion->error . "</P>";
          }
          }
    }
?>
    <html>
    <head>
     <title>pagina5</title>
    </head>
    
    <body><nav class="navbar navbar-light" style="background:linear-gradient(to right, black, rgb(68, 23, 23), rgb(187, 27, 27))">
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
                          <a class="dropdown-item" href="/nancy1/nancy005.php">Práctica 5</a><br>
                          <a class="dropdown-item" href="/nancy1/nahomy.php">Práctica 5a</a><br>
                          <a class="dropdown-item" href="/nancy1/proyecto.php">Práctica Final</a><br>
                      </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/nancy1/nancy006.html">Práctica 6</a><br>
                        <a class="dropdown-item" href="/nancy1/peliculas.html">Práctica 7</a><br>
                        <a class="dropdown-item" href="/nancy1/personajes.html">Práctica 8</a><br>
                        <a class="dropdown-item" href="/nancy1/hpyrym.html">Práctica 9</a><br>
                    </div>
                </li>
                </ul>
              <img src="shadow.png" width="40x">
            </div>

        </div>
    </nav>
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

<div class="container1" style="display:flex; max-with:600px; margin:auto;">
        <form method="POST" id="formulario" >


            
            <label for="numero_control">numero de control:</label>
            <input type="text" id="numero_control" name="numero_control" required><br>

            <label for="nombre">nombre</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="apellido_paterno">apellido_paterno</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>

            <label for="apellido_materno">apellido_materno</label>
            <input type="text" id="apellido_materno" name="apellido_materno" required><br>
            


            <label for="edad">edad</label>
            <select name="edad" required >
            <option value=""> selecciones una edad</option>
          <?php while($row= $result_edad->fetch_assoc()){
            echo "<option value = '" . $row["id"] . "'>" . $row["edad"]. "</option>";
          }
          ?>
            </select>
           

            <label for="colonia">colonia</label>
            <select name="colonia" required >
            <option value=""> selecciones una colonia</option>
          <?php while($row = $result_colonias->fetch_assoc()){
            echo "<option value = '" . $row["id"] . "'>" . $row["nombre_colonia"]. "</option>";
          }
          ?>
            </select>
           
           
            
            <label for="especialidad">especialidad</label>
            <select name="especialidad" required >
            <option value=""> selecciones una especialidad</option>
          <?php while($row= $result_especialidad->fetch_assoc()){
            echo "<option value = '" . $row["id"] . "'>" . $row["nombre_especialidad"]. "</option>";
          }
          ?>
            </select>
           

            <label for="genero">genero</label>
            <select name="genero" required >
            <option value=""> selecciones un genero</option>
          <?php while($row= $result_genero->fetch_assoc()){
            echo "<option value = '" . $row["id"] . "'>" . $row["nombre_genero"]. "</option>";
          }
          ?>
            </select>
           



            <label for="correo">correo</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="telefono">telefono</label>
            <input type="text" id="telefono" name="telefono" required><br>

            <label for="fecha_ingreso">fecha de ingreso</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>



            <input type="submit" value="agregar registro"></div>
        
        </form>
        </div>
   <h2>lista de alumnos</h2>
   <table border="1">
    <tr>
      <th>numero de control</th>
      <th>nombre</th>
      <th>apellido_paterno</th>
      <th>apellido_materno</th>
      <th>edad</th>
      <th>colonia</th>
      <th>especialidad</th>
      <th>genero</th>
      <th>correo</th>
      <th>telefono</th>
      <th>fecha de ingreso</th>
        </tr>

        <?php
        $sql= "SELECT
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
        JOIN edades e ON a.id_edad = e.id
        JOIN colonias c ON a.id_colonia = c.id
        JOIN especialidades es ON a.id_especialidad = es.id
        JOIN generos g ON a.id_genero = g.id";
        $resultado = $conexion->query($sql);
        if($resultado->num_rows >0){
          while ($row = $resultado -> fetch_assoc()){
            echo "<tr>
            <td>" . $row["numero_control"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido_paterno"] . "</td>
            <td>" . $row["apellido_materno"] . "</td>
            <td>" . $row["edad"] . "</td>
            <td>" . $row["nombre_colonia"] . "</td>
            <td>" . $row["nombre_especialidad"] . "</td>
            <td>" . $row["nombre_genero"] . "</td>
            <td>" . $row["correo"] . "</td>
            <td>" . $row["telefono"] . "</td>
            <td>" . $row["fecha_ingreso"] . "</td>
            
           </tr>";  
          }
        }else{
          echo "<tr><td colspan='11'>no hay alumnos en la base de datos</td></tr>";
        }

        ?>

</body>
</html>