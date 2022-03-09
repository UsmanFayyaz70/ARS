<?php 
require "./connection.php";
$gpassword = '';
$id = $_SESSION['id'];
$character = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-+:;";
$max =  strlen($character) - 1;
for ($i = 0; $i < 8; ++$i) {
    $gpassword .= $character[random_int(0, $max)];
}
$query = "UPDATE primary_details set password = '$gpassword' where id_number = '$id'  ; ";
$result = $conn->query($query);

$query = "SELECT * from primary_details where id_number = '$id';";
$result = $conn->query($query);

?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<h1>Ticket Details</h1>
<div class="main" style="margin-left: 12%;">
    <div class = "row">
<?php while($row = $result ->fetch_assoc()){ ?>
    <h2><?php echo "Thank you for booking your flight ".$row["title"]." ".$row["fname"]." ".$row["lname"]; ?></h2>
    <h3>In order to view the ticket, use the id and password given below: <br></h3>
    <h3><?php echo "ID: ".$id; ?></h3>
    <h3><?php echo "Password: ".$gpassword; ?></h3>
    <?php } ?>
    </div>
</div>
<div>
    <a href="./dashboard.php">Wanna book another flight?</a> <br>
    <a href="./delete_reservation.php">Cancel reservation</a>
</div>


