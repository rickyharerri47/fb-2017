<?php

if (preg_match('#^http://([a-z0-9]+)\.uptobox\.com/#', $url) || preg_match('#^http://uptobox\.com/#', $url)){

	$maxacc = count($this->acc['uptobox.com']['accounts']);

	if($maxacc > 0){

		for ($k=0; $k < $maxacc; $k++){

			for ($j=0; $j < 2; $j++){

				if(!$cookie) $cookie = $this->get_cookie("uptobox.com");

				if(!$cookie){

					$account = trim($this->acc['uptobox.com']['accounts'][$k]);

					if (stristr($account,':')) list($user, $pass) = explode(':',$account);

					$data = $this->curl("127.0.0.1", "lang=english", "op=login&login={$user}&password={$pass}&redirect=http://uptobox.com/");


					$cookie = $this->GetCookies($data);

					$this->save_cookies("uptobox.com",$cookie);

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

					$this->save_cookies("uptobox.com","");

				}

			}

			if($link) break;

		}

	}

}





// Created by Rajahker for VNG-BOX on 15.12.12

?>