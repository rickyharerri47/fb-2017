<?php
$account = trim($this->get_account("yuvutu.com"));
if (stristr($account,':')) list($user, $pass) = explode(':',$account);
else $cookie = $account;
if(empty($cookie)==false || ($user && $pass)){
	for ($j=0; $j < 2; $j++){
		$data = $this->curl("http://aeroclubdemimizan.com/wordpress/wp-includes/Text/ReDiff/vng270/index.php", "secureid=".md5($pass), "urllist=".urlencode($url));
		if (preg_match("/href='(.*)' style/", $data, $catch)) {
			$link = trim($catch[1]);
			$size_name = Tools_get::size_name($link, '');
			if($size_name[0] > 200) {
				$filesize = $size_name[0];
				$filename = $size_name[1];
				break;
			}
			else $link = "";
		}
	}
}
/*
* Create : 15.12.2014
* Version : 2.6.3
* How To Use : Replace "http://linkgenerator/index.php" to your vinaget URL
* Powered For FrenchDebrid.eu
*/
?>