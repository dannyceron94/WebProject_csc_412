<html>
    <head>
    <title>Submit</title>
       <link rel ="stylesheet" type = "text/css" href="site.css">
    </head>
    <body>
              <div class="whitetxt">
     
        <ul class = "nav">

            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="current.html">Current</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About this site</a></li>
        </ul>
       <div class="background"> 
      <div class ="centerTxt">
          <!--setting up a form-->
        <form  action="newEmptyPHP.php" method="get">
    <!--now we can put text boxes for input-->
            Name: <input type="text" name="Name">
            <input type="submit">
        </form>
        <br>
        <?php 
        $welcome = "Welcome ";
        $input = $_GET["Name"];

        if($input == "")
        {
            echo "Enter your name";   
        }else
        {
            $welcome.= $_GET["Name"];
            echo $welcome;
        }
        ?>
        <?php
        /*
        function printHellowWorld($num)
        {
            $a = 10;
            if($num)
            {
                echo str_repeat("hey<br>",$num);
            }
            else
            {
                echo str_repeat("hey",$a);
            }
        }
        printHellowWorld(12);
         */
        ?>
      </div>
       </div>
       </div>
        

    </body>
</html>
<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

