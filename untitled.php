<?php

CRYPT_BLOWFISH or die ('No Blowfish found.');
$password = "m0rpheus";

$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';

$Allowed_Chars =
'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
$Chars_Len = 63;

// 18 would be secure as well.
$Salt_Length = 21;

$mysql_date = date( 'Y-m-d' );
$salt = "";

for($i=0; $i<$Salt_Length; $i++)
{
    $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
}
$bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;

$hashed_password = crypt($password, $bcrypt_salt);


echo("hashed password: ". $hashed_password."<br />");
echo("SALT: ".$salt);

?>                                                                                                                                                                 