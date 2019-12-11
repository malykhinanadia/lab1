<?php 
echo "Hello world!<br>";
$name = [
 'name' => 'Nadia',
 'surname' => 'Malykhina',
 'age' => 21
];

foreach($name as $key=>$value) {
 echo "<p>" . $key . " - " . $value . "</p>";  
}