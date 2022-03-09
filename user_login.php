<style>
div{
    margin:0 auto;
    display: flex;
    justify-content: center;

}
form{
    margin:0 auto;
    display: flex;
    justify-content: center;
width: 50%;
height: 50%;    border: dotted;
}
</style>
<div>
<form action="./bck_end.php" method="POST">
<h1>LOGIN PAGE</h1><br>
<table align="center">
        <tr>
            <td>
                <label>Enter your name: </label>
            </td>
            <td>
             <input type="text" name="usern" id="usern">
            </td>
        </tr>
        <tr>
                <td>
                    <label>Enter your password: </label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
        </tr>
        <tr>
                <td>
                <input type="submit" name ="Manage" id="Manage" value="Manage">
               </td>
        </tr>
    </table>
    </form>
    <td>
                <?php if(isset($_GET['error']) && $_GET['error']){
                  echo "Wrong password or user name";
                }?>
            </td>
    </div>