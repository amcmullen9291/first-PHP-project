<!DOCTYPE html>
<html>
    <?php
        $page = $_SERVER['PHP_SELF'];
        $sec = "";
        // $Name = "Anthony";
        $Greeting = "Good Morning";
        $City = "Green Bay";
        $number1 = 256;
        $number2 = 256;
        if($number1 == $number2){
            $Boolean = "true";
            if($number1 === $number2){
                $Boolean2 = "true";
            }else{
                $Name2 = $Name;
                $Name = "Jonathan";
                $Boolean2 = "BUT, really, false.  (did you catch it, $Name2 ?)";
                // $Greeting[0] = "K";
                $Greeting = str_replace("Good Morning", "gnirnoM dooG", $Greeting);
               
            }    
        }else{
            $Boolean = "false";
            $Boolean2 = "";
        }

    ?>
    <head>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <link rel="stylesheet" type="text/css" href="style.css">
            <meta charset="uft-8">
        <title>PHP Power</title>
    </head>
    <body>
        <?php 
        echo"
        <div class='tophalf'><center><h1>Sporting News</h1></center>
        <center><table>
        <td class='title'></td>
        <td class='title'>Team Stats</center></td>
        <td class='title'></td>
        </th>
        <tr>
        <td class='TitleRow'>Venue</td>
        <td class='TitleRow'>City</td>
        <td class='TitleRow'>Capacity</td>
        </tr>
        <tbody>
        <tr>
        <td class='tableData'>Lambeau Field</td>
        <td class='tableData'>Greenbay</td>
        <td class='tableData'>80,750</td>
        </tr>
        </tbody>
        </table></center>
        </div>";

        echo "<hr/>";
        if($_POST['Name']){
            $Name = $_POST['Name'];
        echo"
        <center id='middle'>$Greeting, $Name!<center>
        ";
    }    
    echo"
        <div id='bottom_background'>
        <center><div id='bottom'>
        <div id='bottomSection'>ｉｎ ｏｔｈｅｒ ｎｅｗｓ</div>
        <span id='line2'>(Strikingly similar to HTML)</span>
        <br/>
        <hr/>
        <div id='words'>Lorem ipsum dolor sit amet, <b class='city'>$City</b>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut. Risus ultricies tristique nulla aliquet enim. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper <b class='city'>$City </b> dignissim. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Arcu ac tortor dignissim convallis. <b class='city'>$City </b>. Integer enim neque volutpat ac tincidunt vitae semper quis.</div>
        <div id='numberbox'>
        <button id='justButton'>just a button</button><br/>
        <div id='forNow'>for now</div>
        </div>
        <div id='numbertest'>
        Does 
        <div class='numbers'> $number1 = $number2 ?</div>
        <div>well...</div>
        <br/>
        $Boolean.";
        if($number1 !== $number2){
        echo "
        <p id='falseEqual'>
        $Boolean2 </p>";  
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
            <label><center>Welcome Back!</center></label>
            <div><label>Your name:</label></div>
            <center><input class="inputfields" type="text" name="Name" value=""/></center><br/>
            <hr/>
            <center><input id="TopJustButton" type="submit" value="Submit"></center>
        </form>
        <?php
        function pre_r( $array ){
            echo '<pre>';
            // print_r($array);
            echo '</pre>';
            // $Name = $_POST['Name'];
        }
        ?>
    </body>
</html>
