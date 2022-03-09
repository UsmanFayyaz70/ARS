<?php 
require "./connection.php";
$id = $_SESSION['id'];
$query = "SELECT * from primary_details where id_number = '$id';";
$result = $conn->query($query);
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<h1>Manage Booking</h1>
<form action="./management_backend.php" method="POST">
<div class="main" style="margin-left: 12%;">
    <div class = "row">
<?php while($row = $result ->fetch_assoc()){ ?>
    <table>
            <tr>
                <td>
                <h2><?php echo "Manage Booking for ".$row["title"]." ".$row["fname"]." ".$row["lname"]; ?></h2>
                <label> Title: </label>
                    <select name = "title" id="title">
                    <option value="Select"> ---Select the Title---</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Miss.">Miss.</option> 
                    </select><br>   
                </td>
            </tr>
            <tr>
                <td>
                <label>Enter your First name: </label>
                <input type="text" name="fname" id="fname">
                </td>
            </tr>
            <tr>
                <td>
                <label>Enter your Last name: </label>
                <input type="text" name="lname" id="lname">
                </td>
            </tr>
            <tr>
                <td>
                <label>Gender: </label>
                    <select name = "gender" id="gender">
                    <option value="Select"> ---Select your gender---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer Not to Say">Prefer Not to Say</option> 
                    </select><br>   
                </td>
            </tr>
            <tr>
                    <td>
                        <label>To: </label>
                    </td>
                    <td>
                        <input type="text" name="to" id="to">
                    </td>
                    <td>
                        <label>Departure: </label>
                    </td>
                    <td>
                        <input type="date" name="depart" id="depart">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>From: </label>
                    </td>
                    <td>
                    <input type="text" name="from" id="from">
                    </td>
                    <td>
                        <label>Return: </label>
                    </td>
                    <td>
                        <input type="date" name="return" id="return">
                    </td>
                </tr>
                <tr align="right">
                    <td>
                        <input type="radio" name="ticket" id="one_way" value="one_way" >
                        <label for="one_way">One way</label>
                        <input type="radio" name="ticket" id="return_ticket" value="return_ticket">
                        <label for="return_ticket">Return Ticket</label>
                    </td>
                </tr>
                <tr>
                    <td>
                
            <tr>
                <td>
                    <input type="submit" name="manage_booking" id = "manage_booking">
                </td>
            </tr>
        <?php } ?>

    </div>
</div>
</form>