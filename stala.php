<?php
//define('imie',"Kamil "); define('kierunek', 'Programista');define('wiek','18'); echo "Mam na imie ".imie; echo' jeste uczniem o kierunku '.kierunek; echo'mam '.wiek.' lat'; 
 

$min=0;$max=999;$liczba= random_int($min, $max);if($liczba==0){echo'nie mozna wyciagnoc piergwiastka z 0';}else{$liczba.sqrt(3);echo'wynik potegi to '.$liczba;}
echo'<br>';
$a=random_int(0,999); $b=random_int(0,99);if($a>$b){echo'a jest wieksze';}else if($b>$a){echo'b jest wieksze';}else{echo'sa rowne';}
echo'<br>';
$p=random_int(0,6);switch($p){case 1:echo'brak promocji'; break; case 2:echo'promocja do nastepnej klasy'; break; case 3:echo'promocja do nastepnej klasy'; break; case 4:echo'promocja do nastepnej klasy'; break; case 5:echo'promocja do nastepnej klasy'; break;case 6:echo'promocja z ocena celujaca';break;}

?>


