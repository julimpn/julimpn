<?php
include("DB.php");

if (isset($_POST['Guardar_registro'])){
    $Nombre = $_POST['N_Asesor'];
    $Email = $_POST['E_Asesor'];
    $Phone = $_POST['P_Asesor'];

    $query = "INSERT INTO asesores (nombre, email, telefono) VALUES ('$Nombre', '$Email', '$Phone')";
    $result = mysqli_query($conn, $query);
    if (!$result){
      die("Registro no guardado");
    }
    

    $_SESSION['message'] = 'Guardado con exito!';
    $_SESSION['message_type'] = 'success';
    header("location: index.php");
}  

?>