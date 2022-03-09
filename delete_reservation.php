<?php 
require "./connection.php";
$query = "DELETE FROM primary_details WHERE id_number = '".$_SESSION['id']."' ; ";
$result = $conn->query($query);
if($result){?>
   <script>alert("Your booking has been deleted successfully!"); </script>
   <?php header("Location:./dashboard.php");?>
   <?php } ?>

