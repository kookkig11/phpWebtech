<html>
<body>
<?php
    $text = "Sum is ";

    $sum = function ($a, $b) use ($text){
        return $text . ($a + $b);
    };

    echo $sum(10,20);
    echo "\n";
    $text = "Result is ";
    
?>
<b><?= $sum('30', 20); ?></b>
</body>
</html>

<!-- 
on web:
Sum is 30 Sum is 50

note:
Sum is 50 [font bold]
-->