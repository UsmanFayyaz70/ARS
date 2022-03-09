<?php
require "./connection.php";
$_SESSION['id'] = $_GET['id'];
$query = "SELECT * from avail";
$result = $conn ->query($query);
?>
<h1>Available Flights</h1>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="main" style="margin-left: 12%;">
    <div class = "row">
<?php while($row = $result ->fetch_assoc()){ ?>
    <h2><?php echo $row["destination"]." ".$row["city_of_depart"]. " ". $row["available_dates"]; ?> </h2>
    <a href="./bck_end.php?book=<?php echo $row['available_dates'];?>">Book</a>
    <?php } ?>