<!DOCTYPE html>
<html>
<body>
<?php
$names = array("Shana", "Siji", "Shalima");
sort($names);
$clength = count($names);
for($x = 0; $x < $clength; $x++) {
 echo $names[$x];
 echo "<br>";
}
 echo "sorted using values";
 echo "<br>";
 $age = array("Shana"=>"20", "Siji"=>"21", "Shalima"=>"22");
asort($age);
foreach($age as $x => $x_value) {
 echo "Key=" . $x ;
 echo "<br>";
}
 echo "<br>";
 echo "sorted using values and in descending order";
 echo "<br>";
 $age = array("Shana"=>"49", "Siji"=>"37", "shalima"=>"43");
arsort($age);
foreach($age as $x => $x_value) {
 echo "Key=" . $x . ", Value=" . $x_value;
 echo "<br>";
}
?>
</body>
</html>