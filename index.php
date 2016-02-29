<?php
	define('SWIFT_INTERFACE', 'client');
	define('SWIFT_INTERFACEFILE', __FILE__);

	if (defined("SWIFT_CUSTOMPATH")) {
		chdir(SWIFT_CUSTOMPATH);
	} else {
		chdir('./__swift/');
	}

	require_once ('./swift.php');