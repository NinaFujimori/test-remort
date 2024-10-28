<?php
echo "5";
echo "<br />";

$nume = 0;

$i = 1;
$j = 1;


while($i <= 5){
    while($j <= 5){
        echo '●';
        $j+=1;
    }
    echo '<br />';
    $j = 1;
    $i+=1;
}



?>