<?php

            function controlHTML($string){
                htmlspecialchars($string);//injection script
                return $string;
            }
            function controlSQL($string){
                $forb=["DELETE","UPDATE","SELECT","<script>"];
                $string=str_replace($forb,"**",$string);//injection sql
                return $string;
            }
            
            function mailverification($email,$pseudo,$link){
                $subject="Confirmation of your account";
                $sql_grapTheKey="SELECT verificationKey from utilisateurs WHERE pseudo='$pseudo'";
                $db_key=$link->query($sql_grapTheKey);
                $db_key=$db_key->fetch(PDO::FETCH_ASSOC);
                $db_key=$db_key["verificationKey"];
                $db_key=password_hash($db_key,PASSWORD_DEFAULT);
                require 'mail.php';
                // Remplacement de certains caractères spéciaux
                $message = str_replace("&#039;","'",$message);
                $message = str_replace("&#8217;","'",$message);
                $message = str_replace("&quot;",'"',$message);
                $message = str_replace('<br>','',$message);
                $message = str_replace('<br />','',$message);
                $message = str_replace("&lt;","<",$message);
                $message = str_replace("&gt;",">",$message);
                $message = str_replace("&amp;","&",$message);
                $text = str_replace("\n.", "\n..", $text);
                $emailFrom="hello@trend.fr";
                $nom="Trend team";
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'From:'.$nom.' <'.$emailFrom.'>' . "\r\n" .
                    'Reply-To:'.$emailFrom. "\r\n" .
                    'Content-Type: text/html; charset="utf-8"; '."\r\n" .
                    'Content-Disposition: inline'. "\r\n";
                mail($email,$subject,$message,$headers);

            }

            
            function createKey(){
                $origin=1;
                $key=password_hash($origin,PASSWORD_DEFAULT);
                $origin++;
                return $key;
            }
        ?>