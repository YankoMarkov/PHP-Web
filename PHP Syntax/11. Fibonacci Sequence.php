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
    $fibonacci = 1;
    $num1 = 1;
    $num2 = 1;
    for ($i = 0; $i < $num; $i++) {
    	if ($i == 0 || $i == 1) {
    		echo 1 . " ";
    		continue;
	    }
    	$fibonacci = $num1 + $num2;
    	$num1 = $num2;
    	$num2 = $fibonacci;
    	echo $fibonacci . " ";
    }
    ?>
</body>
</html>