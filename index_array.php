<?php
// Indexing Array (Manually Call from Array)

$Persons = array("Mamun Bhai","Emon Bhai","Tarek Bhai");


echo "Persons 1: $Persons[0] <br>";
echo "Persons 2: $Persons[1] <br>";
echo "Persons 3: $Persons[2] <br>";

echo "<br><br><br>";

//Array (Automated Call from Array with for loop)

$Persons = array("Mamun Bhai", "Emon Bhai", "Tarek Bhai");
$totalPerson = count($Persons); //Count Array property/data. 

echo "Total Persons are: $totalPerson.<br><br>";
for ($i = 0; $i < $totalPerson; $i++) {
    echo "Person ". "$i $Persons[$i],<br>";
}

?>