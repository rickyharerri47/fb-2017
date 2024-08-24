<?php
class dl_debriditalia_com extends Download {
   
	public function CheckAcc($cookie){
		$data = $this->lib->curl("http://debriditalia.com/profilo.php", $cookie, "");
		if(stristr($data, 'color=green>active</font>')) return array(true, $this->lib->cut_str($data, '</strong>','<a href="/profilo.php"'));
		else return array(true, "Compte invalide");
	}
   
	public function Login($user, $pass){
        $data = $this->lib->curl("http://debriditalia.com/login.php?u={$user}&p={$pass}&sid=".time(),"","");
        $cookie = $this->lib->GetCookies($data);
        return $cookie;
	}
   
	public function Leech($url) {
		$data = $this->lib->curl("http://www.debriditalia.com/api.php?generate=&link={$url}",$this->lib->cookie,"",0);
		if (stristr($data,"not_available")) $this->error("Lien mort ou invalide", true, false);
		elseif (stristr($data,"not_supported")) $this->error("Lien non supporte", true, false);
		elseif (stristr($data,"http")) return trim($data);
		/* Deuxième méthode de génération (celle de vng263)
		$data = $this->lib->curl("http://debriditalia.com/linkgen2.php", $this->lib->cookie, "xjxfun=convertiLink&xjxr=".time()."&xjxargs[]=S<![CDATA[".urlencode($url)."]]>&xjxargs[]=S&xjxargs[]=Slink0&xjxargs[]=S&xjxargs[]=S");
		if(preg_match('%"(http:\/\/[^\r\n\"]+)"%U', $data, $linkpre)) {return trim($linkpre[1]);}
		else {	$data = $this->lib->curl($link, $this->lib->cookie, "");
				if(preg_match('/ocation: (.*)/i', $data, $linkpre)) {return trim($linkpre[1]);}}*/
		return false;
	}
}
/*
* Open Source Project
* Vinaget by ..::[H]::..
* Version: 2.7.0
* Debriditalia Download Plugin
* Downloader Class By Billalmess
* Forum Tout-gratuit
*/
?>