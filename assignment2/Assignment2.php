<!-- Sumeyye Nur Nehir 18050111058 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Assignment 2</title>
	<link rel="stylesheet" type="text/css" href="Assignment2.css">
</head>
<body>
	<form action="Assignment2.php" method="post">
		<div>
			<div class="number_part">
				<label>From: </label>

				<!-- after submitting we want to display entered. when the page is reloaded, all of the data will be gone -->
				<input type="number" name="from_val" value="<?php echo isset($_POST['from_val']) ? htmlspecialchars($_POST['from_val'], ENT_QUOTES) : 0; ?>">	
			</div>
			

			<label>Currency: </label>
			<select name="currency_from">
				<!-- add "selected" attribute to display selected option after submitting the form-->
				<option value="usd">US Dollar</option>
				<option value="cad" <?php if($_POST['currency_from'] == "cad") echo 'selected="selected"'; ?> >Canadian Dollar</option>
				<option value="eur" <?php if($_POST['currency_from'] == "eur") echo 'selected="selected"'; ?> >Euro</option>
			</select>	
		</div>
		<div>
			<div class="number_part">
				<label>To: </label>
		
				<span> 
					<?php 
						$submit = $_POST["convert"];

						if(isset($submit)){
							$from_val = $_POST["from_val"];
							// associative array for storing currency rates
							$currency_arr = array("usd-cad"=>1.25, "usd-eur"=>0.91, 
												  "cad-usd"=>0.80, "cad-eur"=>0.72, 
												  "eur-usd"=>1.10, "eur-cad"=>1.38
												 );

							$currency_from = $_POST["currency_from"];
							$currency_to = $_POST["currency_to"];

							// concat "from" and "to" for getting entered conversion 
							$conversion = $currency_from."-".$currency_to;
							// get selected currency rate
							$currency_rate = ($currency_to == $currency_from) ? 1 : $currency_arr[$conversion];
							$result = $currency_rate * $from_val;
							ECHO $result;
						}

						else
							ECHO 0;
						
					?>
				</span>
			</div>
			

			<label>Currency: </label>
			<select name="currency_to">
				<option value="usd">US Dollar</option>
				<!-- add "selected" attribute to display selected option after submitting the form-->
				<option value="cad" <?php if($_POST['currency_to'] == "cad") echo 'selected="selected"'; ?> >Canadian Dollar</option>
				<option value="eur" <?php if($_POST['currency_to'] == "eur") echo 'selected="selected"'; ?> >Euro</option>
			</select>
		</div>

		<input type="submit" name="convert" value="convert">
	</form>

</body>
</html>