<?php
require "./connection.php";
$query = "SELECT * from avail";
$result = $conn ->query($query);
?>

    <h1>Flight Manage Flights</h1>
    <form action="./management_backend.php" method="POST">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="main" style="margin-left: 12%;">
    <div class = "row">
<?php while($row = $result ->fetch_assoc()){ ?>
    <h2><?php echo $row["destination"]." ".$row["city_of_depart"]. " ". $row["available_dates"]; ?> </h2>
    <a href="./mfback.php?id=<?php echo $row['id'];?> ">Delete</a>
    <?php } ?>
    <div align = "center">
    <table>
        <tr>
            <th>
                <label>To: </label>
            </th>
            <th>
                <input type = "text" name="destination" id = "destination"> 
            </th>
        </tr>
        
        <tr>
            <th>
                <label>From: </label>
            </th>
            <th>
                <input type = "text" name="city_of_depart" id = "city_of_depart"> 
            </th>
        </tr>
        <tr>
            <th>
                <label>Date: </label>
            </th>
            <th>
                <input type = "date" name="date" id = "date"> 
            </th>
        </tr>
        <tr>
            <th>
                <input type = "submit" name = "manage_flight" id = "manage_flight">
            </th>
            <th>
                <a href="./logout.php">Log out</a>
            </th>
        </tr>
    </table>
    </form>
</div>
<?php if(isset($_GET['success']) && $_GET['success']){?>
    <script> alert("Successfully Added") </script>
    <?php } ?>
    <?php if(isset($_GET['error']) && $_GET['error']){?>
    <script> alert("Please fill out the form.") </script>
    <?php } ?>
    <?php if(isset($_GET['delete']) && $_GET['delete']){?>
    <script> alert("Successfully Deleted.") </script>
    <?php } ?>


