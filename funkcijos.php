
<html>
<head>
    <title>Salygos</title>
    <link rel="stylesheet" href="./apskritimas_su_css.css">
</head>

<?php
function suma ($skaicius1, $skaicius2){
    $suma = $skaicius1 + $skaicius2;
    return $suma;
}
echo suma (2,  20) . "<br>" ;

function daugyba ($skaicius1, $skaicius2){
    $daugyba = $skaicius1 * $skaicius2;
    return $daugyba;
    }
    echo daugyba (3,  10) . "<br>" ;

function dalyba ($skaicius1, $skaicius2){
    $dalyba = $skaicius1 / $skaicius2;
    return $dalyba;
}
echo dalyba (5,  5) . "<br>";

function salyga ($skaicius1, $skaicius2, $skaicius3, $skaicius4){
    $salyga = $skaicius1 + $skaicius2 * $skaicius3 - $skaicius4;
    return $salyga;
}
echo salyga (5,  5, 4, 4) . "<br>";





$amzius = 10;
if ($amzius >="24")  {
    echo "daugiau arba lygu 24";
}
elseif ($amzius <="16") {
    echo "pauglys";
}
else {
    echo "nepilnametis";
}


$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[1] . ", " . $cars[1] . " and " . $cars[1] . ".";


function reverse($string) {
    $string = strrev($string);
    return $string . "<br>";
}
echo reverse ("Labas");

function didziosios($string) {
    $string = strtoupper($string);
    return $string . "<br>";
}
echo strtoupper ("dawadwa");

function mazosios($string) {
    $string = strtolower($string);
    return $string . "<br>";
}
echo strtolower ('dadwwad');


function palendro ($string){
    if ($string == strrev($string)){
        return strtoupper($string);
    }
    else{

     return strtolower($string);
    }
}
echo palendro('abba');


echo "<table>";
for($tr=1; $tr<=10; $tr++){
    echo "<tr>";
    for($number=1; $number<=10; $number++){
        $multiply = $tr * $number;
        echo "<td> $tr x $number = $multiply</td>";
    }
    echo "</tr>";
}
echo "</table>";


for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 20; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}












function getchinezodiac($year){
    switch ($year % 12):
        case 1: return 'Avinas';
        case 2: return 'Jautis';
        case 3: return 'Mergele';
        case 4: return 'Saulys';
        case 5: return 'Skorpionas';
        case 6: return 'Karver';
        case 7: return 'Suo';
        case 8: return 'Zuikis';
        case 9: return 'Bartas';
        case 10: return 'Drakonas';
        case 11: return 'Gyvate';
        case 12: return 'Grybas';
        endswitch;


}
echo getchinezodiac(5)
?>


<form method="post">
    <input type="text" name="numeris1">
<input type="text" name="numeris2">
    <select name="operator" id="">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
    <option>Square</option>
 </select>
 <button type="submit" name="submit" value="submit">Skaiciuoti</button>
 </form>


<?php


if (isset($_POST['submit'])) {
    $result1 = $_POST['numeris1'];
    $result2 = $_POST['numeris2'];
    $operator = $_POST['operator'];
    {
    switch ($operator) :
        case 'None': echo "Pasirinkti veiksma";
        break;
        case  'Add':
        echo $result1 + $result2;
        break;
        case  'Subtract':
        echo $result1 - $result2;
        break;
        case  'Multiply':
        echo $result1 * $result2;
        break;
        case  'Divide':
        echo $result1 / $result2;
        break;
        case  'Square':
        echo $result1 ** $result2;
        break;


    }
}
?>



</html>
