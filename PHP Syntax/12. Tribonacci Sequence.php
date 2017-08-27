<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if (!isset($_GET['num'])) {
	    exit(1);
    }
    $num = intval($_GET['num']);
    $tribonacci = 1;
    $num1 = 1;
    $num2 = 1;
    $num3 = 2;
    for ($i = 0; $i < $num; $i++) {
	    if ($i == 0 || $i == 1) {
		    echo 1 . " ";
		    continue;
	    }
	    if ($i == 2) {
		    echo 2 . " ";
		    continue;
	    }
	    $tribonacci = $num1 + $num2 + $num3;
	    $num1 = $num2;
	    $num2 = $num3;
	    $num3 = $tribonacci;
	    echo $tribonacci . " ";
    }
    ?>
</body>
</html>