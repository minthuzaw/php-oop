<?php

declare(strict_types=1);
include 'includes/autoloader.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
</head>
<body>

<form action="includes/calculate.inc.php" method="post">
    <p>Calculator</p>
    <input type="number" name="num1" placeholder="First number">
    <select name="operator" id="">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="div">/</option>
        <option value="mul">*</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">=</button>
</form>

</body>
</html>
