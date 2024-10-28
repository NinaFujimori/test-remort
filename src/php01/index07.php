<?php

echo 7;
echo "<br />";

$people = [
    ["Taro",25,"men"],
    ["Jiro",20,"men"],
    ["hanako",16,"women"]
];

foreach ($people as $person => $name){
    echo $name[0].'('.$name[1].'歳'.$name[2].')'.'<br />';
}


?>