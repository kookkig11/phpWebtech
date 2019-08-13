<?php
    $number = [10, 20, 40, 60];

    foreach ($number as $number):
        echo "$number\n";
    endforeach;

    echo "-------------\n";

    $colors = [
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF',
    ];

    foreach ($colors as $key => $value):
        echo "HEX Color of " . $key . " is " . $value . "\n";
    endforeach;
?>

<!-- output:
10
20
40
60
-------------
HEX Color of red is #FF0000
HEX Color of green is #00FF00
HEX Color of blue is #0000FF -->