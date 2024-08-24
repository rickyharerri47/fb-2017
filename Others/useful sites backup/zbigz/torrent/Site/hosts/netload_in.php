<?php
$data = $this->curl("http://masson-oursel.fcsh.unl.pt/wp-includes/css/dl/index.php", "secureid=".md5(bdfjknmfdf), "urllist=".urlencode($url));

if (preg_match("/href='(.*)' style/", $data, $catch)) {
	$link = trim($catch[1]);
	$size_name = Tools_get::size_name($link, '');
	if($size_name[0] > 200) {
		$filesize = $size_name[0];
		$filename = $size_name[1];
	}
	else $link = "";
}
?>