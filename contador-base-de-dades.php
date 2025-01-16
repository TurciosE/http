<? php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "estadistics";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_errno) {
echo "Error en conectar a MySQL: " . $conn->connect_error;
exit();
}
$ip = $_SERVER["REMOTE_ADDR"];
$sql = "INSERT INTO registre (ip) VALUES ('$ip')";
$conn->query($sql);

// Obtener el contador de registros
$resultat = $conn->query("SELECT COUNT(*) FROM registre");
$row = mysqli_fetch_array($resultat);

// Mostrar el numero de registros
echo $row[0];

// Cerrar la conexión
$conn->close();
?>
