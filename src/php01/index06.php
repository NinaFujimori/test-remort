<?PHP

echo 6;
echo '<br />';

function area($bottom,$TopSide,$height){
    $Triangle = $bottom*$height/2;
    $Square = $bottom*$height;
    $Trapezoid = ($bottom+$TopSide)*$height/2;
    return $Triangle;
}

$Triangle = area(10,0,5);

echo $Triangle;


?>