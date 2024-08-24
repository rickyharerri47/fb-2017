<?php
$Secure = false;                        #true : private host - false : public host
$password= array(
"update",	
);

$homepage = "";
$fileinfo_dir = 'data';	
$fileinfo_ext = "dat";
$filecookie ="cookie.php";

$download_prefix = "";
$limitMBIP = 10*1024;
$ttl = 60*24;
$limitPERIP = 5000;
$ttl_ip = 1;
$max_jobs_per_ip = 100000;
$max_jobs = 1000000;
$max_load = 75;

$title = "[color=red]..::] DOWNLOAD [::..[/color]";
$colorfilename = "black";
$colorfilesize = "darkblue";

$ziplink = true;
$apia = "http://genlink.eu/pub/api.php?create=";
$directttlink = true;

$listfile = true;
$privatefile = false;
$privateip = false;
$checkacc = false;
$checklinksex = true;

$action = array(
'rename' => false,
'delete' => false,
);

$debrid = false;	
$plugin = 'premiumize_me.php';

$badword = array(""); 


require_once ('languages.php');
?>
