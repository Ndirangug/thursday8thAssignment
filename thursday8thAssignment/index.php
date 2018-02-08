<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Thursday 8th Assignment</title>
    </head>

    <body>
        
        <?php

        $number = 8;
        echo $number."<br/>";

        //add 2
        echo $number." + 2 = ".($number += 2)."<br/>";

        //subtract 4
        echo $number." - 4 = ".($number -= 4)."<br/>";

        //multiply by 5
        echo $number." * 5 = ".($number *= 5)."<br/>";

        //divide by 3
        echo $number." / 3 = ".($number /= 3)."<br/>";

        //inceament by 1
        echo $number." inceamented by 1 = ".(++$number)."<br/>";

        //decreament by 1
        echo $number." decreamented by 1 = ".(--$number)."<br/>";

        echo "<h3>---------------------------</h3>";
        echo "<pre><h3>   THE END     </h3></pre>";
        echo "<h3>--------------------------</h3>";


        ?>
    </body>
</html>
