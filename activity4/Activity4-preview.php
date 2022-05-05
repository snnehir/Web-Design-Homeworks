<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity4 Preview</title>
</head>

<body>
    <h1>Preview</h1>
    <?php 
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $mail = $_POST['mail'];
        $language = $_POST['language'];
        $about = $_POST['about'];

        /* list data */
        if (empty($name)) {
           ECHO "Name: Not provided <br>";
        }
        else{
            ECHO "$name <br>";
        }

        if (empty($username)) {
           ECHO "Username: Not provided <br>";
        }
        else{
            ECHO "$username <br>";
        }
        
        if (empty($password)) {
           ECHO "Password: Not provided <br>";
        }
        else{
            ECHO "$password <br>";
        }

        if (empty($address)) {
           ECHO "Address: Not provided <br>";
        }
        else{
            ECHO "$address <br>";
        }

        if (empty($country)) {
           ECHO "Country: Not provided <br>";
        }
        else{
            ECHO "$country <br>";
        }
        if (empty($zipcode)) {
           ECHO "Zipcode: Not provided <br>";
        }
        else{
            ECHO "$zipcode <br>";
        }

        if (empty($mail)) {
           ECHO "Mail: Not provided <br>";
        }
        else{
            ECHO "$mail <br>";
        }

        if (empty($language)) {
           ECHO "Language: Not provided <br>";
        }
        else{
            for($i=0; $i<sizeof($language); $i++)
            {
                echo "$language[$i] <br>";
            }
        }

        if (empty($about)) {
           ECHO "About: Not provided <br>";
        }
        else{
            ECHO "$about <br>";
        }



    ?>
   	
    
</body>

</html>


