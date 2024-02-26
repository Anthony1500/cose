<?php 
$serverName = "localhost";
$username = "root";
$password = "";
$db = "cosecha";
$con = mysqli_connect($serverName, $username, $password, $db);  

if ($con == false) {
    echo "Conexión fallida con la base de datos";
    exit;
} else {
  
  // Suponiendo que tienes el ID del usuario almacenado en una variable llamada $userID
$userID = 1; // Esto es solo un ejemplo, debes obtener el ID del usuario de alguna manera

// Consulta SQL para obtener el nombre y el apellido del usuario según su ID
$sql = "SELECT nombre, apellido FROM usuario WHERE id = $userID";

// Ejecutar la consulta
$resultado = mysqli_query($con, $sql);

// Verificar si se encontraron resultados
if (mysqli_num_rows($resultado) > 0) {
    // Obtener los datos del usuario
    $fila = mysqli_fetch_assoc($resultado);
    $nombre = $fila['nombre'];
    $apellido = $fila['apellido'];

   
   
} else {
    echo "No se encontraron resultados para el ID de usuario proporcionado";
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
   
}


?>
