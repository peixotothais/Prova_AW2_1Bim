<?php


$numero =  $_GET["numero"];

if($numero % 2 == 0)
{
    echo "O numero $numero é par!";
}
else{
    echo "O numero $numero é ímpar!";
}

if($numero >= 0)
{
    echo "<br/> O numero $numero é positivo!";
}
else{
    echo "<br/> O numero $numero é negativo!";
}
   
?>