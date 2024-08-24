<?php

if (preg_match('#^http://([a-z0-9]+)\.uplea\.com/#', $url) || preg_match('#^http://uplea\.com/#', $url)){

	$maxacc = count($this->acc['uplea.com']['accounts']);

	if($maxacc > 0){

		for ($k=0; $k < $maxacc; $k++){

			for ($j=0; $j < 2; $j++){

				if(!$cookie) $cookie = $this->get_cookie("uplea.com");

				if(!$cookie){

					$account = trim($this->acc['uplea.com']['accounts'][$k]);

					if (stristr($account,':')) list($user, $pass) = explode(':',$account);

					$data = $this->curl("http://uplea.com/", "", "login={$user}&password={$pass}&remember=1&login-form=");

					$cookie = $this->GetCookies($data);

					$this->save_cookies("uplea.com",$cookie);

				}

				$this->cookie = $cookie;

				$data = $this->curl($url,$cookie,"");

				if (stristr($data,'<h2>File Not Found</h2>')) die(Tools_get::report($Original,"dead"));

				elseif (preg_match('/ocation: *(.*)/i', $data, $redir))

					{

						$link = trim($redir[1]);

					    $size_name = Tools_get::size_name($link, $this->cookie);

						if($size_name[0] > 200 ){

							$filesize =  $size_name[0];

							$filename = $size_name[1];

							break;

						}

						else $link = '';

					}



				if(!$link) {

					$cookie = "";

					$this->save_cookies("uplea.com","");

				}

			}

			if($link) break;

		}

	}

}





// Created by Rajahker for VNG-BOX on 15.12.12

?>