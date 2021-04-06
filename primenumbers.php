<!DOCTYPE html>
<html>
	<head>
		<title>Prime numbers</title>
	</head>
	<body>
		<h1>Prime numbers in an interval</h1>
		<form>
			Upper limit <input id="upper" />
			Lower limit <input id="lower" />
		</form>
		<h2>Result</h2>
		<?php
			function isPrime($tal) {
				$isPrime=true;
				for($i=2;$i<sqrt($tal);$i++) {
					if($tal%$i==0)
						$isPrime=false;
				}
				return ($isPrime);
			}
			
			$first=1000;
			$last=1100;
			
			for($i=$first;$i<$last;$i++) {
				if(isPrime($i))
					echo($i." ");
			}
		?>
	</body>
</html>
