<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box.
 *  */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name ="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in Your Details Below</b></td>
                          
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                           
                        </tr>
                         <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                           
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value="" autocomplete="off"/></td>
                           
                        </tr>
                        <tr>
                          <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/>
                        </tr>
                        </table>
                        
                </center>
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="continue"/>
                    
</center>
</div>
</form>
    </body>
            
</html>
