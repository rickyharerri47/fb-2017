<?php
class dl_zz extends Download {
   
		public function CheckAcc($cookie) {
		$user = $this->reserved['user'];
		$pass = $this->reserved['pass'];
        $data = $this->lib->curl("http://api.zevera.com/jDownloader.ashx?cmd=accountinfo&login={$user}&pass={$pass}", "otmData=languagePref=US;".$cookie, "");
		if (stristr($data, 'DayTrafficLimit:')) return array(true, "DayTrafficLimit:".$this->lib->cut_str($data, "DayTrafficLimit:","</body>"));
	//	if (stristr($data, 'You spent daily limit on ')) return array(true, "Quota utiliser : ".$this->lib->cut_str($data, "You spent daily limit on ","</p>"));
		else return array(true, "accinvalid");
    }
	
	
    public function Login($user, $pass){
				$this->reserved['user'] = $user;
		$this->reserved['pass'] = $pass;
        $data = $this->lib->curl("http://api.zevera.com/OfferLogin.aspx?login={$user}&pass={$pass}", "otmData=languagePref=US", "");
        return "otmData=languagePref=US;".$this->lib->GetCookies($data);
    }
    
    public function Leech($url) {	 //http://zevera.com/Member/download.ashx?&ourl=
		list($url, $pass) = $this->linkpassword($url);
		$data = $this->lib->curl("http://api.zevera.com/Member/download.ashx?ourl=".urlencode($url)."&FilePass={$pass}", $this->lib->cookie, "");
		if($this->isredirect($data)) $redir = trim($this->redirect); 
						elseif (stristr($data,"Error Starting Download")) {//$this->error("LimitAcc"); CAS DE QUOTA ATTEINT
			require_once ('hosts/zz1.php');
			$download = new dl_zz1($this->lib, "zz1");
			$link = $download->General($url);
			return $link;
		}
 //	if(stristr($redir, '/member/systemmessage.aspx?hoster')) $this->error("unavailable", true, false);
		if(stristr($redir, '/member/systemmessage.aspx?hoster')) {//$this->error("LimitAcc"); CAS DE QUOTA ATTEINT
			require_once ('hosts/zz1.php');
			$download = new dl_zz1($this->lib, "zz1");
			$link = $download->General($url);
			return $link;
		}
		else return trim($redir); 
		return false;
    }
	
}

/*

*/
?>