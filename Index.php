<!DOCTYPE html>
<html>
    <?php
        $page = $_SERVER['PHP_SELF'];
        $sec = "";
        $Name = "";
        $Greeting = "Good Morning";
        $City = "Green Bay";
        $number1 = "";
        $number2 = "";
        $Boolean ="";
        $Boolean2 ="";
        if($number1 == $number2){
            $Boolean = "true";
        }
            if($number1 != $number2){
                $Name2 = $Name;
                $Name = "Jonathan";
                $Boolean = "Really? false.  (did you catch it, $Name2 ?)";
                // $Greeting[0] = "K";
                $Greeting = str_replace("Good Morning", "gnirnoM dooG", $Greeting);
               
            }    
    ?>
    <head>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <link rel="stylesheet" type="text/css" href="style.css">
            <meta charset="uft-8">
    </head>
    <body>
        <?php include "table.html" ?>
        <?php
        if($_POST['Name']){
            $Name = $_POST['Name'];
        echo"
        <center id='middle'>$Greeting, $Name!<center>
        ";}
        ?>
        <?php include "banner.html"?>
        <?php
        echo"
        <div id='words'>Lorem ipsum dolor sit amet, <b class='city'>$City</b>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut. Risus ultricies tristique nulla aliquet enim. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper <b class='city'>$City </b> dignissim. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Arcu ac tortor dignissim convallis. <b class='city'>$City </b>. Integer enim neque volutpat ac tincidunt vitae semper quis.</div>
        <div id='numberbox'>
        <form action='' method='POST'>
        <div id='boxwords'>Enter 2 numbers</div>
        <input id='number1' type='text' name='Number1' value=''/>
        <input id='number2' type='text' name='Number2' value=''/>
        <button type='submit' name='Submit' id='justButton'>just a button</button><br/>
        <div id='forNow'>for now</div>
        </form>
        </div>";

        if($_POST['Number2']){
            $number1 = $_POST['Number1'];
            $number2 = $_POST['Number2'];
            $total = $number1+$number2;           
            echo "
    
        <div id='numbertest'>
        <div class='numbers'> $number1 + $number2 = $total</div>
        <div>( ???????????? ?????) </div>
        <br/>
";
            }
        echo "
        </div>
        </div>
        </center>
        </div>";
        ?>
        <?php 
        pre_r($_POST);
        ?>

        <form class="NumberBox2" action="" method="POST">
            <center><label>Welcome Back,</label></center>
            <center><input class="inputfields" type="text" name="Name" value=""/>!</center>
            <p>(Your name here)</p>
            <center><input id="TopJustButton" type="submit" name="submit" value="Submit"></center>
        </form>
        <?php
        function pre_r( $array ){
            echo '<pre>';
                // print_r($array);
            echo '</pre>';
            
        }

        ?>
    </body>
    <?php include "Footer.html" ?>
</html>
