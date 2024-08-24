<?php
$account = trim($this->get_account("youtube.com"));
if (stristr($account,':')) list($user, $pass) = explode(':',$account);
else $cookie = $account;
if(empty($cookie)==false || ($user && $pass)){
	for ($j=0; $j < 2; $j++){
		$data = $this->curl("https://savedeo.com/download?url=", "secureid=".md5($pass), "urllist=".urlencode($url));
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

* Version 2.6.3
* By FrenchDebrid.eu
*/

?>





























https://savedeo.com/download?url=