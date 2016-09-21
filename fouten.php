<?php
error_reporting(0);
    
$naam= $_GET['naam'];
$fouten= $_GET['fouten'];
$link = '<a href="1e.html">Terug naar formulier</a>';
$naam = ucwords(strtolower($naam));
$norm = $_GET['norm'];
$cijfer = 10 - $fouten/$norm;

if($naam == ""){
    echo"Je moet je naam invullen<br>";
    echo $link; 
}
elseif($fouten == ""){
    echo"Je moet je fouten invullen<br>";
    echo $link; 
}
elseif($norm == ""){
    echo"Je moet de norm invullen<br>";
    echo $link; 

}
elseif($naam == "" && $fouten == ""){
    echo"Je moet je naam en fouten invullen";
    echo $link; 
}

else if(!is_numeric($fouten)) {
    echo "Je moet een getal invoeren bij fouten";
    echo $link;
}
else if($fouten > 100){
    echo "Je kunt geen 3 cijfers invoeren";
    echo $link;
}
else{
    echo $naam . "<br>" . $fouten . "<br>";
    echo "Je cijfer is " . $cijfer . "<br>";
    echo $link; 

}

?>