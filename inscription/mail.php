
<?php 
$message=
"
<html lang=\"en\">
<body style=\"background-color: black;
    display: grid;\">
    <main style=\" background-color: #111;
    color: white;
    text-align: center;
    padding: 30px 20px 30px 20px;
    border-radius: 10px;
    justify-self: center;
    align-self: center;\">
        <h1 style=\" font-family: 'Overpass', sans-serif;\">Hello $pseudo !</h1><br>
        <p style=\"font-family: 'Montserrat', sans-serif;\">we are pleased to have you as a member of trend 😊</p>
        <h3 style=\"font-family: 'Montserrat', sans-serif;\">To confirm your registration to Trend click on this button:</h3><br>
        <a href='trend.mathieuandry.fr/verification?key=$db_key&pseudo=$pseudo' style=\"text-decoration: none;
    color:white;
    border: white solid 1px;
    background-color: black;
    font-family: 'Montserrat', sans-serif;
    padding: 10px;
    border-radius: 10px;
    transition: 0.8s ease;\"> Verify your email </a>
    </main>
</body>

</html>
";
?>
