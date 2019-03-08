<!--Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="https.//www.w3.org/1999/xhtml"
    <head>
        <style>
           
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
    head {
        font-size: 15px;
            color: white;
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
        </style>
          <meta charset="utf-8" />
          <title> Ebusiness 1</title>
          <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
   
    <body>
        <sl>
  <si><a class="active" href="Menu.html">Home</a></si>
  <si><a href="ConsultingServices.html">< Previous</a></si>
  <si><a href="CV.html">CV</a></si>

</sl>
    
   
        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <br>
            
               
                <center>
                    
                    
                    
                    <table cellspacing="20">
                        <tr>
                          <td><b><h1 style="background-color:"#28AD98">Select a Consulting Service:</b></td>
                        </tr>
                        
                        
                        
                         <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        
                        
                        
                        <tr>
                            <td>Autonomous Things (Robots) @ $2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" /></td>
                        </tr>
                        <br>
                           <br>
                              <br>
                                 <br>
                                 
                        
                        
                         <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
               
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                              <td><b>Amount</b></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" required onkeydown="return false;"/></td>
                        </tr>
                        <tr>
                            <td>Discount @ 10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" required onkeydown="return false;"/></td>
                        </tr>
                        <tr>
                            <td>+VAT @ 20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" required onkeydown="return false;"/></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" required onkeydown="return false;"/></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center>
                    <!-- assigning values and creating validations -->
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" class="button" />
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear Choice" class="button"/>
                    <input type="submit" name="btnAdd" id="btnAdd" onclick="" value="Add to Shopping Cart" class="button" />
                </center>
            </form>
        </div>
       
        <script type="text/javascript">
            function calcSub() {
                //Assigning variables to the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                var Immersive = parseFloat(document.getElementById('Immersive').value);
                
                
               
                //When radio buttons are clicked, values are assigned to the radio buttons
                if (document.getElementById('Blockchain').checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                
                
                else if (document.getElementById('Autonomous').checked) {
                    document.intCalc.txtSubTot.value = Autonomous;
                    subAmount = Autonomous;
                    calculation(subAmount);
            }
            
            
            else if (document.getElementById('Immersive').checked) {
                    document.intCalc.txtSubTot.value = Immersive;
                    subAmount = Immersive;
                    calculation(subAmount);
                }
            }
           
           
           
            //Function for calculating  the final values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);
               
                //Inserting them into the correct fiel boxes
                
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
           
           
           
            function AmountClear() {
                document.getElementById('txtSubTot').value ="";
                document.getElementById('txtDisc').value ="";
                document.getElementById('txtVat').value ="";
                document.getElementById('txtTotal').value ="";
            }
            
            
           
        </script>
    </body>
</html>