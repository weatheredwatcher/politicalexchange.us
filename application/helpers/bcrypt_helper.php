<?php
/**
*  
*  @author David Duggins <weatheredwatcher@gmail.com>
*  @package bcrypt 
*  @uses bcrypt('password', md5('password'));
*  @copyright David Duggins 2012
*  @license MIT 
*/
function bcrypt($password, $salt)
{    
    //Checks to see if blowfish is installed on the server
	CRYPT_BLOWFISH or die ('No Blowfish found.');
    $password = $password;
	$salt = $salt;
    //This sets up the Blowfish prefix and end
	$Blowfish_Pre = '$2a$05$';   //this instructs blowfish to encrypt 5 passes
	$Blowfish_End = '$';
    
	$bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;

	$hashed_password = crypt($password, $bcrypt_salt);

	
	
	return $hashed_password;

}

?>                                                                                                                                                                 