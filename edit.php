<?php
include("DB.php");


if  (isset($_GET['asesor_id'])) {
  $id = $_GET['asesor_id'];
  $query = "SELECT * FROM asesores WHERE asesor_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['nombre'];
    $Mail = $row['email'];
    $Phone = $row['telefono'];
    
  }
}

if (isset($_POST['Actualizar'])) {
 
 $id = $_GET['asesor_id'];
 $N_nombre= $_POST['N_nombre'];
 $N_Mail = $_POST['N_email'];
 $N_Phone = $_POST['N_telefono'];

 
$query = "UPDATE asesores set nombre = '$N_nombre', email = '$N_Mail', telefono = '$N_Phone' WHERE asesor_id = $id"; 
mysqli_query($conn, $query);
$_SESSION['message'] = 'Se ha actualizado el registro';
$_SESSION['message_type'] = 'success';
header('Location: index.php');
}

?>

<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?asesor_id= <?php echo $_GET['asesor_id']; ?> " method="POST">
        <div class="form-group">
          <input name="N_nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Update Nombre">
        </div>
        <div class="form-group">
          <input name="N_email" type="text" class="form-control" value="<?php echo $Mail; ?>" placeholder="Update Mail">
        </div>
        <div class="form-group">
          <input name="N_telefono" type="text" class="form-control" value="<?php echo $Phone; ?>" placeholder="Update Phone">
        </div>
        <button class="btn-success" name="Actualizar">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>