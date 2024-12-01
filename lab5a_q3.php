<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Lab 5a Q3</title>
    </head>
    <body>
        <?php

        $width=5;
        $height=10;
        $area=calcArea($width,$height);
        function calcArea($width,$height)
        {
            $area = $width * $height;
            return $area;
        }

        echo "<strong>The area of a rectangle with a width of 
        $width and $height is $area</strong>";
        ?>
    </body>
</html>
