
<?php
// estos son los datos para conectarte a la base de datos de tu computadora
$servername = "localhost";
$database = "minecraft registration"; //nombre base de datos
$username = "root"; 
$password = "";
// aqui se crea la conexion a mysql 
$conn = mysqli_connect($servername, $username, $password, $database);
// si no se conecta manda este mensaje de error
if (!$conn) {
      
    die("Fallo la conexion: " . mysqli_connect_error());
}
 
//mensaje si se conecto correctamente
//echo "Conexion exitosa";
//aqui vamos a obtener los datos de los inputs que recibimos del formulario

$email=$_POST["correo_electronico"];
$pass=$_POST["pasword"];
$mat=$_POST["no_matricula"];
$name=$_POST["nombre_completo"];
$group=$_POST["grupo"];
$comment=$_POST["comentario"];

// esto se le llama query que es la parte donde guardas los datos en determinada tabla
$sql = "INSERT INTO idusuario ( no_matricula, nombre_completo, grupo, correo_electronico, pasword, comentario) VALUES ('$mat', '$name', '$group','$email','$pass', '$comment' )";
if (mysqli_query($conn, $sql)) {
     
      echo " <a href='paginaultimaa.html'>Volver a Pagina Principal</a>";
     
} else {
      echo "Error de conexion, algo salio mal" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


