<?Php
$servidor = "localhost";
$user = "root"; 
$base = "album";
$pass = "";
try {
    $db = new PDO("mysql:host=$servidor;dbname=$base",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //insertando datos a la base de datos

    $sql = "SELECT nombre FROM fotos";
    
    $sentecia = $db->prepare($sql);
    $sentecia->execute();

    $resultaod =$sentecia->fetchAll();

    foreach($resultaod as $fotos){
        print_r($fotos);
    }
}catch(PDOException $e){
    echo "error de conexion " . $e;
}
?>

