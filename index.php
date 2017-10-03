<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<hr>";

echo "Step 2 : Replace '-' with '/'";
echo "<br>";
$date = str_replace('-','/',$date);
echo $date; 

echo "<hr>";

echo "Step 3 : Past or Present <br>";

$date1=date_create("$date");
$date2=date_create("$tar");
$diff=date_diff($date1,$date2);

if ($diff >  0  ) {
    echo "the future!";
} elseif ($diff <  0 ) {
    echo "the past!";
} else {
    echo "oopsss!";
}
echo "<hr>";

echo "Step 4 : Search for '/' and Print all positions<br>";

$arr = str_split($date);
for ($i=0; $i < sizeof($arr); $i++) {
   if($arr[$i] == '/') {
      echo $i. " "; 
   }
}

echo "<hr>";
echo "Step 5 : Word count<br> ";
$words = explode("/",$date);
echo "No of words " . sizeof($words);
echo "<br>";
echo "List of words:";
echo "<br>";
foreach ($words as $word){
   echo $word . "<br>";
}
echo "<hr>";

echo "Step 6 : Length of a string (My first pet.)<br> ";
$stri = "My first pet.";
echo "String length - " . strlen($stri);
echo "<hr>";


echo "Step 7 : ASCII value of the first character (My first pet.)<br>";
$stri = "My first pet.";
echo ord($stri)."<hr>";

echo "Step 8 : Return last two characters of $date <br>";
echo substr($date,-2);
// echo "the characters are:". $strin;
echo "<hr>";

echo "Step 9 : Change string into an array<br>";
echo "String is $date<br>";
$a= explode('/',$date);

foreach($a as $elem){
   echo $elem;
   echo " ";
}

echo "<hr>";
echo "Step 10 : Leap Year (foreach loop)";
echo "<br>";

foreach ($year as $y ){
    switch((($y % 4) == 0) && ((($y % 100) != 0) || (($y % 400) == 0))){
        case True:
        echo $y . " - True";
        break;
        default:
        echo $y . " - False";
    }
    echo "<br>";
}

echo "<br>";
echo "Leap Year (for loop)";
echo "<br>";

for($i=0; $i< sizeof($year); $i++){
    switch((($year[$i] % 4) == 0) && ((($year[$i] % 100) != 0) || (($year[$i] % 400) == 0))){
        case True:
        echo $year[$i] . " - True";
        break;
        default:
        echo $year[$i] . " - False";
    }
    echo "<br>";
}


echo "<hr>";

?>
