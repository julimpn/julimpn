
<div class="container p-4">

<div class="row">
<div class="col-md-4">

<?php if (isset($_SESSION['message'])) { ?> 
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
   <?php session_unset();} ?>  


<div class="car car-body"></div>
<form action="Save.php" method="POST"> 

<div class="form-group">
    <input type="text" name="N_Asesor" class="form-control" placeholder="Nombre" autofocus>
</div>
<div class="form-group">
    <input type="text" name="E_Asesor" class="form-control" placeholder="Email" autofocus>
</div>
<div class="form-group">
    <input type="text" name="P_Asesor" class="form-control" placeholder="Teléfono" autofocus>
</div>

<input type="submit" class="btn btn-success btn btn-block" name="Guardar_registro" value="Guardar">

</form>
</div>

<div class="col-md-8">

<table class="table table-bordered">
<thead>
    <tr>
        <th>Id Asesor</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Acciones</th>

    </tr>
</thead>
<tbody>
<?php

$query = "SELECT * FROM asesores";
$result_datos = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result_datos)){ ?>

<tr>
    <td><?php echo $row['asesor_id']?></td>
    <td><?php echo $row['nombre']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['telefono']?></td>
    <td>
              <a href="edit.php?asesor_id=<?php echo $row['asesor_id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?asesor_id=<?php echo $row['asesor_id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
</tr>

<?php }; ?>


</tbody>
</table>

</div>

</div>


</div>