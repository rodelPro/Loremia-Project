<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
</head>
<body>

	<h1>Multiplication Table</h1>

	<?php

	$number = 5; // set the number to generate the table for

	echo "Multiplication Table for $number:"; // display table heading

	echo "<table>"; // start HTML table

	for ($i = 1; $i <= 10; $i++) { // loop through each row

	    $result = $number * $i; // calculate the result

	    echo "<tr>"; // start HTML row

	    echo "<td>$number x $i =</td>"; // display the equation

	    echo "<td>$result</td>"; // display the result

	    echo "</tr>"; // end HTML row

	}

	echo "</table>"; // end HTML table

	?>

</body>
</html>
