<?php
include 'includes/autoloader.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Autoload</title>
</head>
<body>
<?php
$person = new Person("Min Thu Zaw", 22);
echo $person->getPerson();

echo "</br>";

$address = new House("Yaw Gi Kyaung Street", 25);
echo $address->getAddress();
?>
</body>
</html>
