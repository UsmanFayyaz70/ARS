<h1>Passenger Details!</h1>
<form action="./bck_end.php" method="POST">
    <div align = "center">
        <table>
            <tr>
                <td>
                <label>Title: </label>
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
                    <option value="Female">Female.</option>
                    <option value="Transgender">Transgender</option>
                    <option value="Prefer Not to Say">Prefer Not to Say</option> 
                    </select><br>   
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Go!" name="pass_details" id="pass_details"> 
                </td>
            </tr>
        </table>
    </div>
</form>
<?php if(isset($_GET['error']) && $_GET['error']){?>
    <script> alert("Please fill out the form.") </script>
    <?php } ?>

