
<?php $message="
<html>
    <head>
        <style type=`\"text/css\">
        @import url(https://trend.mathieuandry.fr/inscription/styleMail.css);
        </style>
    </head>
    <body>
        <main class='content'>
            <h1>Hello $pseudo !<br></h1>
            <h3>To confirm your registration to Trend click on this button:<br></h3>
            <a href='trend.mathieuandry.fr/verification?key=$db_key&pseudo=$pseudo'>Check your email<a>
        </main>
    </body>
</html>"
?>