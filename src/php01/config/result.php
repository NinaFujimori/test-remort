<?php

    $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    $something = htmlspecialchars($_POST['something'],ENT_QUOTES);
    $number = htmlspecialchars($_POST['number'],ENT_QUOTES);

    echo "私の名前は、".$name."<br />";
    echo "ご希望の商品は、". $something."<br />";
    print "ご注文数は、". $number;

?>