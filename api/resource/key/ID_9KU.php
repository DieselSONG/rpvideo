<?php
/*
 * [KW.G] (C)2014-2112 kw.G Sdo	.
 * This is NOT a freeware, use is subject to license terms
 */

// Function and Version Definitions
define('EVarsion', '1.0');
define('EWebsite', '9ku.com');
define('ECode', 'MD5 CODE');
define('TARCHAR', 'UTF-8');
// --END-- Function and Version Definitions

function GetUrls($key){

	if(empty($key))return false;
	
	$url = 'http://www.9ku.com/play/'.$key.'.htm';
	
	return $url;	
}

function GetVid($url){

	if(empty($url))return false;
	
	preg_match('#play\/([0-9]+).htm#is', $url, $ketStr);
	
	if(!empty($ketStr[1]))$key = $ketStr[1];
	
	if(!empty($key))return false;
	
	return $key;
}
?>