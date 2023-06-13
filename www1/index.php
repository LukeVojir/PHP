<?php
// externí odkaz 
$link_text = "https://www.youtube.com/";
echo "<a href=\"https://www.youtube.com/\">$link_text</a>";
echo "<br>";
//---

// interní odkaz
echo '<a href="./stranky/kontakty.php">Kontaktujte nás</a>';
echo "<br>";
//---

// prazdna promenna - bude naplněna pozdeji
$kolej = null;
echo $kolej;
//---

echo "<br>";

//zakladní matematické operace 
$a = 120;
$b = 150;

$result1 = $a + $b;
$result2 = $a - $b;
$result3 = $a * $b;
$result4 = $a / $b;

echo "Výsledek: $result1";
echo "<br>";
echo "Výsledek: $result2";
echo "<br>";
echo "Výsledek: $result3";
echo "<br>";
echo "Výsledek: $result4";
echo "<br>";
//---

// Spojovaní promenných
$first_name = "Harry";
$last_name = "Potter";
$friend_first_name = "Ron";

echo "<br>";
echo $first_name . " " . $last_name;
echo "<br>";
echo $first_name. " " .$last_name;
echo "<br>";
echo $first_name." ".$last_name;
echo "<br>";
echo "<br>";
echo $first_name." a ".$friend_first_name;
echo "<br>";
echo "<br>";
//---

// konverze typu
$year_price = "1500";
$year_count = "7";

$result_price = $year_price * $year_count;

echo $result_price;
echo "<br>";
var_dump($result_price);
echo "<br>";
var_dump($year_price);
echo "<br>";
var_dump($year_count);
echo "<br>";
//---


// negace - !
echo "<br>";
$database_connection =true;

var_dump(!$database_connection);
echo "<br>";
echo "<br>";
//---



// výpis textu a proměnné
echo "Ahoj ". $first_name;
echo "<br>";
echo "Ahoj $first_name";
echo "<br>";
echo "Ahoj {$first_name}";
echo "<br>";
//---

// datové typy
$main_name = "Bradavice"; // text = string
$student_count = 780; // celé číslo = integer
$grade_point_average = 3.4; // desetinne cislo = float
$adult = true; // pravdivostni hodnota = boolen
//---

// pole (array)

$student_1 = "Harry";
$student_2 = "Hermiona";
$student_3 = "Ron";

$students = ["Harry", "Ron", "Hermiona"];
$students = [1=>"Harry", 4=>"Ron", "Hermiona"];
echo "<br>";
var_dump($students);
echo "<br>";
echo "<br>";
echo $students[1];
echo "<br>";
echo $students[4];
echo "<br>";
echo $students[5];
echo "<br>";
//---

// datum
echo "<br>";
$mesice = array('leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec');
$den = date('j');
$mesic = date('m');
$mesicSlovy = $mesice[$mesic - 1];
$rok = date('Y');
echo("Ahoj, dnes je $den. $mesicSlovy $rok");
//---









echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$school_name = "Bradavice";
echo ($school_name);
echo "<br>";

echo ($school_name);
echo "<br>";

echo ($school_name);
echo "<br>";






?>