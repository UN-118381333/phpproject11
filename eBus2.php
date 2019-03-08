<?php
session_start();
$fullNameValue = "" ;
$totalValue2= "" ;
$Email= "" ;
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtEmail'] = $Email;
/**
 * Allocate the mobile number session variable to a text
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    /* styling buttons background and navbars */
        table {
            font-size: 20px;
        }
       .button {
  background-color: white;
  border: 8px #33ffe0;
  color: #33ffe0;
  padding: 8px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  
}
         sl {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

si {
  float: left;
  border-right:1px solid #bbb;
}

si a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

si a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
 
}
                    body {
        background-image: url("images/da-img-1.jpg");
       
        background-color: #cccccc;
         background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  color: white;
  font-size: 18px;
    }
    </style>
    <title> eBusiness 2 </title>
</head>
<body>
    <sl>
  <si><a class="active" href="Menu.html">Home</a></si>
  <si><a href="eBus1.php">< Previous</a></si>
  <si><a href="CV.html">CV</a></si>
    </sl>
  
  
    <div class ="form">
        <form name ="Details" method ="post" action= "eBus3.php">
            <center>
                <table cellspacing ="25">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    
                     <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
       <!-- assigning values and creating validations -->
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required /> </td>
                    </tr>
       
                     <tr>
                         <td> Email </td>
                         <td><input type="Email" id="txtNum" name="txtEmail" value="" required/> </td>
                    </tr>
       
                    <tr>
                         <td> Pin </td>
                         <td><input type="Password" maxlength="4" id="txtPassword" name="txtPassword" value="" required autocomplete="off" class="body"/> </td>
                    </tr>
       
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" class="body"/> </td>
                    </tr>
       
                </table>
        
       
       
             
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" class="button"/>
       
            </center>
    </form>

    </div>
    </body>
    </html>