<?php 
    require_once "./connection.php";
//User Booking Management Portal
    if(isset($_POST['manage_booking'])){
        $id = $_SESSION['id'];
        $to = $_POST['to'];
        $from = $_POST['from'];
        $depart = $_POST['depart'];
        $return = $_POST['return'];
        $type = $_POST['ticket'];
        $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $query = "UPDATE primary_details set title = '$title', fname = '$fname',
        lname = '$lname', gender = '$gender', destination = '$to', city_of_depart = '$from', depart_date = '$depart',
        return_date = '$return', ticket_type = '$type'
        where id_number = '$id' ;";
        $result = $conn->query($query); ?>
        <script> alert("Updated Successfully"); </script>
        <?php 
        header("Location: ./dashboard.php");
    }
//Admin Flight Management Portal
    if(isset($_POST['manage_flight'])){
        $destination = $_POST['destination'];
        $city_of_depart = $_POST['city_of_depart'];
        $date = $_POST['date'];
        $query = "DELETE from avail where id = '".$_GET['id']."' ;";    
        $result = $conn->query($query);
        header("Location: ./manageflights.php?deleted=true");
        if($destination == "" ||$city_of_depart == "" ||$date == "" ){
            header("Location: ./manageflights.php?error=true");
        }else{
        $query = "INSERT INTO avail (destination, city_of_depart, available_dates)
        values ('$destination','$city_of_depart','$date') ;";
        $result = $conn->query($query);
        if($result){
            header("Location: ./manageflights.php?success=true");
        } else {
            header("Location: ./manageflights.php?success=false");
        }
        }
    }
?>