<?php
function printArray($students) {
    foreach ($students as $key => $value) {
        echo "Key = $key, Value = $value <br>";
    }
}

$students = [
    "1" => "bor",
    "2" => "yor",
    "3" => "jro",
    "4" => "Dcc",
    "5" => "Ecd",
    "6" => "Fdsssfhtf",
    "7" => "Gfdfdfraceede",
    "8" => "Hansdsdtt",
    "9" => "Idffton",
    "10" => "Jadfdfdss"
];

echo "<h3>Original Array:</h3>";
printArray($students);

echo "<h3>Sorted Ascending by Key:</h3>";
ksort($students);
printArray($students);

echo "<h3>Sorted Ascending by Value:</h3>";
asort($students);
printArray($students);

echo "<h3>Sorted Descending by Key:</h3>";
krsort($students);
printArray($students);

echo "<h3>Sorted Descending by Value:</h3>";
arsort($students); 
printArray($students);
?>
