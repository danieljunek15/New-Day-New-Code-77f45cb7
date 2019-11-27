<?php
//$argv zorgt er voor dat je dierect in je terminal kan typen en dit dierect opslaat in een array.
$array = $argv[1];
//interval zorgt er voor dat in dit geval aleen de nummers worden opgeslagen en niet wat je daar achter in typed.
$money = intval($array);
//dit is een array met Key => Value.
$valueMoney = array(
    $vijftig = 50,
    $twintig = 20,
    $tien = 10,
    $vijf = 5,
    $twee = 2,
    $een = 1,
);
//dit is een if statement die zecht dat als $money 0 is hij je door stuurd naar exit(Geen wissel geld); 
if(!$money == 0){
//
foreach($valueMoney as $valueMoney2){
// $floorCheck is de variable waar het andwoord wordt opgeslagen floor($money is het afronden naar beneden / $valueMoney2 is de rekensom.
    $floorCheck = floor($money / $valueMoney2);
//deze if statement kijkt of $floorCheck de waarde 0 of hoger heeft heeft ie 0 dan verschijnt ie niet in je echo.
    if(!$floorCheck == 0){
//gwn een echo $floorCheck = aantal $valueMoney2 = het biljet
    echo "$floorCheck x $valueMoney2".PHP_EOL;
//gwn bedrag berekening. 
    $money = $money - ($floorCheck * $valueMoney2);
    }
}
//gwn exit.
    exit;
}
//gwn een else statement.
else {
//gwn nog een exit XD.
    exit ("Geen wissel geld.");
}