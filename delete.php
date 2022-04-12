<?php

include("DB.php");

if (isset($_GET['asesor_id'])) {
  $id = $_GET['asesor_id'];
  $query = "DELETE FROM asesores WHERE asesor_id = $id";
  $result = mysqli_query($conn, $query);
  
  if (!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha eliminado el registro';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>