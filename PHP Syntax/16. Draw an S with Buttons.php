<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
for ($row = 0; $row < 9; $row++) {
	for ($col = 0; $col < 5; $col++)  {
		$button = 0;
		if ($row == 0 || $row == 4 || $row == 8) {
			$button = 1;
		}
		if ($col == 0 && ($row > 0 && $row < 4)) {
			$button = 1;
		}
		if ($col == 4 && ($row > 4 && $row < 9)) {
			$button = 1;
		}
		if ($button == 1) {
			echo "<button style='background-color: blue'>$button</button>";
		} else {
			echo "<button>$button</button>";
		}
	}
	echo "<br>";
}
?>
</body>
</html>