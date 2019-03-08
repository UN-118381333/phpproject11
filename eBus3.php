<!DOCTYPE html>
<html>
    <head>
        <style>
             body {
        background-image: url("images/da-img-2.jpg");
       
        background-color: #28AD98;
         background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  color: white;
  font-size: 18px;
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
    </head>
    <center><body>
            <br>
            <br>
                  <br>
                        <br>
                              <br>
                                    <br>
            <h1>Success</h1>
        
        <!-- //Starting the session to get the session variable from last page-->
   
        <br>
        <?php
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $Email = $_POST['txtEmail'];
        
        echo "The name is : ".$fullNameValue.".";
        
        echo "<br><br>";
        
        echo "the Total value is : " .$totalValue2.".";
        
        echo "<br><br>";
        
        echo "Email is : " .$Email.".";
      
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="Index.php" class="button">Return to Menu</a>
        
    </body>
    </center>
</html>
