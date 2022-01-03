<?php
include_once 'db_connect.php';
if(isset($_POST['hantar']))
{    
     $cID = $_POST['cID'];
     $cManifesto = $_POST['cManifesto'];
     $sql = "INSERT INTO manifesto (cID,cManifesto) VALUES ('$cID','$cManifesto')";
     $message = "Manifesto inserted successfully!";
     if (mysqli_query($conn, $sql)) {
         echo "<script type='text/javascript'>alert('$message');
         window.location = 'cHomepage.php?page=cManifesto';</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
