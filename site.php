<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="uft-8">
    <title>My Page</title>
    </head>
    <body>
        <?php 
        $Name = "Anthony";
        $Greeting = "Good Morning";
        $City = "Green Bay";
        $number1 = 20;
        $number2 = "20.00";
        if($number1 == $number2){
            $Boolean = "true";
        }else{
            $Boolean = "false";
        }
        if($number1 === $number2){
            $Boolean2 = "true";
        }else{
            $Boolean2 = "false";
        }


        echo"
        <div class='tophalf'><center><h1>Sporting News</h1></center>
        <center><table>
        <td class='title'></td>
        <td class='title'>Team Stats</center></td>
        <td class='title'></td>
        </th>
        <tr>
        <td>Venue</td>
        <td>City</td>
        <td>Capacity</td>
        </tr>
        <tbody>
        <tr>
        <td>Lambeau</td>
        <td>Greenbay</td>
        <td>80,750</td>
        </tr>
        </tbody>
        </table></center>
        </div>";

        echo "<hr/>";
        echo"
        <center id='middle'>$Greeting, $Name!<center>
        <div id='bottom_background'>
        <center><div id='bottom'>
        <div>Bottom Section</div>
        <span id='line2'>(Strikingly similar to HTML)</span>
        <br/>
        <hr/>
        <div id='words'>Lorem ipsum dolor sit amet, <b class='city'>$City</b>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut. Risus ultricies tristique nulla aliquet enim. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper <b class='city'>$City </b> dignissim. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Arcu ac tortor dignissim convallis. <b class='city'>$City </b>. Integer enim neque volutpat ac tincidunt vitae semper quis.</div>
        <div id='numbertest'>
        <div class='numbers'> $number1  = $number2 ?</div>
        <div>well...</div>
        <br/>
        $Boolean.";
        if($number1 !== $number2){
        echo "
        <p id='falseEqual'> but, really
        $Boolean2 </p>";  
        // </div>";
        }
        echo "
        </div>
        </div>
        </center>
        </div>";
        ?>
    </body>
</html>