<!DOCTYPE html>
<html>
<head>
     <tittle>Pattern</tittle>
</head>
<body>
<?php

    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo"*";
        }
        echo"<br />";
    }

    echo"\n\n";

    for($i=0;$i<3;$i++)
    {
        for($j=2;$j>=$i;$j--)
        {
            echo 3-$j." ";
        }
        echo"\n";
    }

    echo"\n\n";

    $chr="X";
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo $chr." ";
            $chr++;
        }
        echo "</br>";
    }

?>