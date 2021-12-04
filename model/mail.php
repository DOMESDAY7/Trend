<?php
$message="
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <!-- montserrat -->
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap\" rel=\"stylesheet\">
   <!-- overpass -->
   <link href=\"https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap\" rel=\"stylesheet\">
</head>

<body>
    <table style=\"margin:auto; text-align:center; margin:auto; background-color:#111111; border-radius: 20px; height:200px; width:300px; padding: 20px; \">
        <tbody>
            <tr style=\"text-align:center; font-family:'Overpass';color:white; font-size:1.5rem; border:none;\"><td style=\"font-family:'Overpass',sans-serif;\">Hello $pseudo 🖖!</td></tr><br>
            <tr style=\"text-align:center;color:white; border:none;\"><td style=\"font-family:'Montserrat',sans-serif;\">To confirm your registration to Trend click on this button:</td></tr><br><br>
            <tr><td ><a href='https://trend.mathieuandry.fr/verification?key=$db_key&pseudo=$pseudo' style=\" color:black !important; border:white solid 1px; border-radius:10px; margin:auto; padding: 10px;text-decoration:none; color:white; background-color:white; font-family:'Montserrat',sans-serif;\">Check your email<a></td></tr>
        </tbody>
    </table>
</body>
</html>"; 
?>
