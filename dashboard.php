<style>
    #welcome{
        font-size: 48px;
        font-family: 'Times New Roman', Times, serif;
    }
</style>

    <body>
    <div>
        <form action="./bck_end.php" method="POST">
        <h1 id="Welcome">Welcome to USBT Airlines!</h1>
            <table align="center">
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
                        <input type="submit" value="Go" name="dashboard" id="dashboard"> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php if(isset($_GET['error']) && $_GET['error']){?>
        <script> alert("Enter all of the details!");</script>
    <?php } ?>
</body>

<script>
    var ticket_type = document.getElementById("one_way").value;
    if(ticket_type.equals("one_way")){
        //hide kro return_date

    }
        </script>

