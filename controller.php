<?php 
        $Name = "Anthony";
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