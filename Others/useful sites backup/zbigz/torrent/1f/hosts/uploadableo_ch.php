<?php
if (preg_match('#^(http|https)://(www\.)?uploadable\.ch/#', $url)){
	$account = trim($this->get_account('uploadable.ch'));
	if (stristr($account,':')) list($user, $pass) = explode(':',$account);
	else $cookie = $account;
	$password = "";
	if(strpos($url,"|")) {
		$linkpass = explode('|', $url); 
		$url = $linkpass[0]; $password = $linkpass[1];
	}
	if (isset($_POST['password'])) $password = $_POST['password'];
	if($password) $post = "userPass2=".$password;
	else $post = "";

	if(empty($cookie)==false || ($user && $pass)){
		for ($j=0; $j < 2; $j++){
			if(!$cookie) $cookie = $this->get_cookie("uploadable.ch");
			if(!$cookie){
				$url = str_replace("uploadable.ch/get", "uploadable.ch/file", $url);
				$data = $this->curl("http://www.uploadable.ch/login.php", "lang=en", "userName={$user}&userPassword={$pass}&autoLogin=true&action__login=normalLogin");
				$cookie = $this->GetCookies($data);
				$this->save_cookies("uploadable.ch",$cookie);
			}
			$data = $this->curl($url,$cookie.';4langcookie=en;',$post);
			//echo "<textarea>$data</textarea>";exit;
			$cookie = $cookie.";".$this->GetCookies($data);
			$this->cookie = $cookie;	
			if (stristr($data,'The file link that you requested is not valid')) die(Tools_get::report($Original,"dead"));
			elseif(strpos($data,'TYPE="PASSWORD"')) {
				die($this->lang['reportpass']);
			}
			elseif(preg_match ( '/href="(.*)"   class="dbtn gaClick"/i', $data, $linkpre)){
				$link = trim ($linkpre[1]);
				$size_name = Tools_get::size_name($link, $this->cookie);
				$filesize = $size_name[0];
				$filename = $size_name[1];
				$filename=str_replace("/(;?=|;?)/","",$filename);
				break;
			}
			elseif(preg_match ( '/ocation: (.*)/', $data, $linkpre)){
				$link = trim ($linkpre[1]);
				$size_name = Tools_get::size_name($link, $this->cookie);
				$filesize = $size_name[0];
				$filename = $size_name[1];
				$filename=str_replace("/(;?=|;?)/","",$filename);
				break;
			}
			else {
				$cookie = ""; 
				$this->save_cookies("uploadable.ch","");
			}
		}
	}
}


/*
* Home page: http://vinaget.us
* Blog:	http://blog.vinaget.us
* Script Name: Vinaget 
* Version: 2.6.3
* Created: ..:: [H] ::..
*/
?>