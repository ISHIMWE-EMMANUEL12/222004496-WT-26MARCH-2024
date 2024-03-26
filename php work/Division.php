<!DOCTYPE html>
   <html>
       <header>
         <body bg color="indigo">
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Result</title>
       </header>
       <body style="text-align: center;">
          <h1 style="font-size: 70px;color: violet;">Welcome our division is:</h1>
          <img src="./ishemmy.png" alt="pictures"width="150" height="100"><br>
          <?php
             if($_SERVER["REQUEST_METHOD"]=="POST") {
                 $fname = $_POST['fname'];
                 $lname = $_POST['lname'];
                 $num1 = $_POST['num1'];
                 $num2 = $_POST['num2'];
                 $div = $num1 / $num2;
                 $fullname =$fname." ".$lname;
                 echo "<h1> Hello $fullname </h1>";
                 echo "<marquee><p><h1> The Division is equal to : $div </h1></p></marquee>";
              }
          ?>
       </body>
   </html>