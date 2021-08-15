<!DOCTYPE html>
<html>
    <?php
        $page = $_SERVER['PHP_SELF'];
        $sec = "30";
    ?>
    <head>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <link rel="stylesheet" type="text/css" href="style.css">
            <meta charset="uft-8">
        <title>PHP Power</title>
    </head>
    <body>
        <?php 
        $Name = "Anthony";
        $Greeting = "Good Morning";
        $City = "Green Bay";
        $number1 = "30.0";
        $number2 = 30;
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
        echo"
        <center id='middle'>$Greeting, $Name!<center>
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
        <div class='numbers'> $number1  = $number2 ?</div>
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
        <form class="NumberBox2" action="site.php" method="get">
            <label><center>Try it out!</center></label>
            <label>First Number:</label>
            <input class="inputfields" type="text" name="number"/>
            <label>Second Number:</label>
            <input class="inputfields" type="text" name="number2"/><br/>
            <input id="TopJustButton" type="submit" value="Click Here">

        </form>
    </body>
</html>