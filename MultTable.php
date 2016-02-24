<html>
	<head>
		<title>100X100</title>
		<meta content="">
		<style></style>
		<link href="448.css"
			rel="stylesheet"
			type="text/css"/>
	</head>
	<body>
		<a href="http://people.eecs.ku.edu/~mneises/448">Home</a>
		<?php
		echo '<table><tr>';
		for($x=1;$x<101;$x++){
			echo '<tr>';
			for($y=1;$y<101;$y++){
				echo '<td>', $x*$y, '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
		?>
	</body>
</html>
