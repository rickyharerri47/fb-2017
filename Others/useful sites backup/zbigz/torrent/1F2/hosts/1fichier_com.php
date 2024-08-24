<?php

class dl_1fichier_com extends Download {
	
	public function CheckAcc($cookie) {
		$data = $this->lib->curl("https://1fichier.com/console/abo.pl", $cookie, "");
		if (stristr($data, 'Your account is Premium until')) return array(true, "Premium Until: ".$this->lib->cut_str($data, "until ","</span>"));
		elseif (stristr($data, 'Your account have')) return array(true, "Premium Until1: ".$this->lib->cut_str($data, "Your account have ","</span>"));
		elseif (stristr($data, 'Your Premium')) return array(true, "Premium Until: ".$this->lib->cut_str($data, "until ","</span>"));
		
		//if (stristr($data, 'Your Premium')) return array(true, "Premium Until: ".$this->lib->cut_str($data, "until ","</span>"));
		//elseif (stristr($data, 'After test for FREE our services, choose your Offer')) return array(false, "accfree");
		else return array(true, "accinvalid");
	}
	
	public function Login($user, $pass){
		$data = $this->lib->curl("https://1fichier.com/en/login.pl", "", "mail={$user}&pass={$pass}&lt=on&&valider=Send");
		$cookie = $this->lib->GetCookies($data);
			return $cookie;
	}
	
	public function Leech($url) {
				$url = str_replace(array("http://"), "https://", $url);
		$data = $this->lib->curl($url, $this->lib->cookie, "");
		if(stristr($data, "The requested file could not be found")) $this->error("dead", true, false, 2);
				elseif ($this->isredirect($data)) {
			$link = str_replace('https', 'http', $this->redirect);
			$filename = explode(';', $this->lib->getname($link, $this->lib->cookie));
			$this->lib->reserved['filename'] = $filename[0];
			return $link;
		}
		return false;
	}

}

/*
* Open Source Project
* Vinaget by ..::[H]::..
* Version: 2.7.0
* 1fichier Download Plugin 
* Downloader Class By [FZ]
*/
?>