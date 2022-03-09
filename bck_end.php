<?php
//Backend for the seat reservation procedure
require "./connection.php";
// User Login
if(isset($_POST['Manage'])){
    $_SESSION['id'] = $_POST['usern'];
       $un = $_POST['usern'];
       $p = $_POST['password'];
       $query = "SELECT id_number, password FROM primary_details where id_number = '$un' AND password = '$p'; ";
       $result = $conn->query($query);
       if($un == ""||$p == ""){
              header("Location: ./login.php?error=true");
       } elseif($result->num_rows > 0){
              header("Location:./managebooking.php?id=$un");
       }
}
//Admin Portal
if(isset($_POST['LoginAdmin'])){
    $un = $_POST['usern'];
    $p = $_POST['password'];
    $query = "SELECT username, password FROM admin where username = '$un' AND password = '$p'; ";
    $result = $conn->query($query);
    if($un == ""||$p == ""){
           header("Location: ./loginadmin.php?error=true");
    } elseif($result->num_rows > 0){
           header("Location:./manageflights.php");
    }
}
//dashboard
if(isset($_POST['dashboard'])){
       $to = $_POST['to'];
$from = $_POST['from'];
$depart = $_POST['depart'];
$return = $_POST['return'];
$type = $_POST['ticket'];

if($to == "" || $from == "" ||$depart == "" ||$return == "" ||$type == "") {
header("Location: ./dashboard.php?error=true");
} else {
    $query = "INSERT INTO primary_details (destination, city_of_depart,
    depart_date, return_date, ticket_type) VALUES ('$to', '$from', '$depart',
    '$return', '$type') ; ";
    if($conn->query($query)){
        echo "Succeeded";
        $query = "SELECT id_number FROM primary_details ORDER BY id_number DESC LIMIT 1 ;";
        $result = $conn->query($query);
        if($result ->num_rows >0){
            while($row = $result->fetch_assoc()) {
               $id = $row['id_number'];
              }
              header("Location: ./avail.php?id=$id&&type=$type");
    }
}
}
}
//Available seats
if(isset($_GET['book'])){
       $id = $_SESSION['id'];
       $date = $_GET['book'];
       $query = "UPDATE primary_details set depart_date = '$date' where id_number = '$id' ;";
       $result = $conn->query($query);
       if($result){
              echo "Updated!";
              header("Location: ./passenger_details.php");
}
}
//Passenger details
if(isset($_POST['pass_details'])){
       $title = $_POST['title'];
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $gender = $_POST['gender'];
       $id = $_SESSION['id'];
       if($title == "Select" ||$fname == "" ||$lname== "" ||$gender== "Select" ){
              header("Location: ./passenger_details.php?error=true");
       }else {
              $query = "UPDATE primary_details set title = '$title', fname = '$fname',
              lname = '$lname', gender = '$gender' where id_number = '$id' ;";
              $result = $conn->query($query);
              header("Location: ./ticket_details.php");
       }
}

?>