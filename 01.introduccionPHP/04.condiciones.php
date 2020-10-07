<?php

#Condiciones con IF

$a = 5;
$b = 10;

if($a > $b){
    echo("A es mayor que B");
}
else if($a == $b){
    echo("A es igual que B");
}
else{
    echo("A es menor que B");
}

echo("<br><br>");

#Condiciones con SWITCH

$dia = "domingo";

switch($dia){
    
    case 'sabado': echo("Voy a estudiar PHP");
    break;

    case 'viernes': echo("Voy a la fiesta");
    break; 

    case 'domingo': echo("Voy a descansar");
    break;

    default: echo("Voy a la Universidad");

}

echo("<br><br>");

#Ciclo con WHILE

$n = 1;

while($n <= 5){
    echo $n;
    $n++;
}

echo("<br><br>");

#Ciclo con DO-WHILE

$p = 1;

do{
    echo $p;
    $p++;
}
while($p <= 5);

echo("<br><br>");

#Ciclo con FOR

for($i = 1; $i <= 5; $i++){
    echo $i;
}

?>