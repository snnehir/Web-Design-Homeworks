<!-- Sumeyye Nur Nehir 18050111058 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
    <h1>Registration Form</h1>
    <form action="Activity4-preview.php" method="post">
    	<div class="row">
    		
	    	<label class="main-label">Name:</label>
	    	<input type="text" name="name">
    	</div>
    	
    	<div class="row">
    		<label class="main-label">Username:</label>
    		<input type="text" name="username">
    	</div>
		
    	<div class="row">
    		<label class="main-label">Password:</label>
    		<input type="password" name="password">
    	</div>
    	
    	<div class="row">
    		<label class="main-label">Address:</label>
    		<input type="text" name="address">
    	</div>

    	<div class="row">
    		<label class="main-label">Country:</label>
	    	<select name="country">
	    		<option value="" >(Please select a country)</option>
	    		<option value="Turkey" >Turkey</option>

	    	</select>
    	</div>
    	
    	<div class="row">
    		<label class="main-label">Zipcode:</label>
    		<input type="text" name="zipcode">
    	</div>

    	<div class="row">
    		<label class="main-label">Email:</label>
    		<input type="email" name="mail">
    	</div>

    	<div class="row">
    		<label class="main-label">Sex:</label>

	    	<input type="radio" name="male">
	    	<label>Male</label>

	    	<input  type="radio" name="female">
	    	<label>Female</label>
    	</div>

    	<div class="row">
    		<label class="main-label">Language:</label>
	    	
	    	<label class="language-label">English</label>
	    	<input type="checkbox" name="language[]" value="English">
	    	
	    	<label class="language-label">French</label>
	    	<input type="checkbox" name="language[]" value="French">
	    	

	    	<label class="language-label">Germany</label>
	    	<input type="checkbox" name="language[]" value="Germany
	    	">
    	</div>
    	
    	<div class="row">
    		<label class="main-label">About: </label>
    		<textarea name="about"></textarea>
    	</div>
    	
    	<div class="row">
    		<label class="main-label"></label>
    		<input type="submit" name="submit-btn" value="submit">
    	</div>

    </form>
</body>

</html>
