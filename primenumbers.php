<!DOCTYPE html>
<html>
	<head>
		<title>Prime numbers</title>
	</head>
	<body>
		<h1>Prime numbers in an interval</h1>
		<form>
			Lower limit <input type="text" name=lower id="lower" />
			Upper limit <input type="text" name=upper id="upper" />
			<input type="submit" value="Ange intervall" />
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
			
			echo $upper;
			
			for($i=$first;$i<$last;$i++) {
				if(isPrime($i))
					echo($i." ");
			}
		?>
	</body>
</html>
