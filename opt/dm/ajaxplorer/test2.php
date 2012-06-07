<?php
	// Necessary to make "connection" with the glueCode
	define("AJXP_EXEC", true);
	$glueCode = "./plugins/auth.remote/glueCode.php";
	$secret = "123456";

	// Initialize the "parameters holder"
	global $AJXP_GLUE_GLOBALS;
	$AJXP_GLUE_GLOBALS = array();
	$AJXP_GLUE_GLOBALS["secret"] = $secret;
	$AJXP_GLUE_GLOBALS["plugInAction"] = "logout";
	
	// NOW call glueCode!
   	include($glueCode);
//}

?>
