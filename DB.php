<?php
$conn = mysqli_connect( 
    'localhost',
    'root',
    '11221405',
    'Bandacol',
);

if (isset($conn)) {
    echo 'DB is connected';
}

?>
