<!DOCTYPE html>
<html>
	<head>
		<title>Prime numbers</title>
	</head>
	<body>
		<h1>Prime numbers in an interval</h1>
		<?php
			function isPrime($tal) {
				$isPrime=true;
				for($i=2;$i<$tal;$i++) {
					if($tal%$i==0)
						$isPrime=false;
				}
				return ($isPrime);
			}
			
			for($i=2;$i<100;$i++) {
				if(isPrime($i))
					echo($i." ");
			}
		
			
		?>
	</body>
</html>
