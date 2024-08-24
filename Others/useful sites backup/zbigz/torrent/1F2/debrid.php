<?php
	ob_start();
	error_reporting(0);
	
	define("info",3);//infoda kac sn beklemcek
	define("site","http://genlink.eu/1F2/debrid.php");
	define("api_sayisi",4);
	
	function curl($url,$post = false,$cookie = false,$header = false){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, $header);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if($cookie)	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		if($post) curl_setopt($ch, CURLOPT_POST, true);
		if($post) curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_URL, $url);
		$icerik = curl_exec($ch);
		return $icerik;
		curl_close($ch);	
	}
	
	function create($link,$sayi){
		$link = api(urldecode($link),$sayi);
		return site."?go=".base64_encode($link); 
	}
	
	function open($link,$sure = 0){
		$link = base64_decode($link);
		//echo '<meta http-equiv="refresh" content="'.$sure.';URL='.base64_decode($link).'>';
		header("Refresh:".$sure.";URL=".$link);
	}
	
	function api($link,$int){
		switch($int){

			
			case 1:
			return curl("http://bc.vc/api.php?key=f27c4d807f4115f1bb42705c76bae468&uid=43867&url=".urlencode($link));			
			break;
			case 2:
            return curl("http://api.adf.ly/api.php?key=a7aafad7d7e27335fb94999ecea9db82&uid=5359976&advert_type=int&domain=adf.ly&url=".urlencode($link));			
			break;
                        case 3:
			return curl("http://ouo.io/api/Jnu0Hs4g?s=".urlencode($link));			
			break;
                        case 4:
			return curl("https://linkshrink.net/api.php?key=e0f&url=".urlencode($link));			
			break;
			
			
			
			
			
		
		}
	}
	$sayi = api_sayisi-1;
	if($_GET["create"]){
		$url = $_GET["create"];
		for($i=0;$i<api_sayisi-1;$i++){
			$url = create($url,$sayi);
			$sayi -= 1; 
		}
		echo site."?info=".base64_encode(api($url,api_sayisi));
	}elseif($_GET["go"]){
		echo "<title>TotalDebrid - Pub</title>";
		open($_GET["go"],1);
	}elseif($_GET['info']){ 
	//open($_GET['info'],info);
	?>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>TotalDebrid | ADS</title>  
<link rel="SHORTCUT ICON" href="http://genlink.eu/1F2/images/dw.png" type="image/x-icon" />
<link rel="stylesheet" href="http://genlink.eu/1F2/images/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/4cc41b2dab.js"></script>
</head>
<body>

<style>
.container{
	margin-top: 60px;
	width: 720px;
}
</style>

<div class="container">
<div class="panel panel-danger">
    <div class="panel-heading" align="center">
        <h1 class="panel-title">►- TotalDebrid.org - Ads -◄</h1>
    </div>
    <div class="panel-body" align="center">
        <img src="http://i.imgur.com/eXdHOWS.png" width="330" height="65" alt="TotalDebrid" class="img-responsive" title="TotalDebrid - ADS System"><br>
        <strong class="text-danger">Attention! Cette page sera automatiquement redirigé dans 5 secondes. S'il vous plaît patienter... <br> This page will be automatically redirected. Please wait ...</strong><br><br>
        <strong class="text-primary">Seulement 4 annonces, en cliquant sur les annonces qui signifie que vous nous aidez pour maintenir le service.</strong><br><strong class="text-warning">Only 4 ads, clicking on ads that means you help us to maintain the service.</strong><br><br>
	<p class="text-muted"><strong>Si vous obtenez une erreur, S'il vous plaît hésiter pas à nous contacter. .</strong></p>
    <hr>           
    <p>
    <strong class="text-danger">Merci de nous avoir choisi. <br>Thank you for choosing us.</strong>
    </p>
    </div>
</div>
<center><small><p style="color:gray">Powered by <b class="text-danger">TotalDebrid.org</b>  &copy; All rights reserved 2017 - 2017.</p></small></center>
</div>
</head>
<body>
<script type="text/javascript">

$(function(){

	var sure = <?php echo info; ?>; //infoya yazılan değer
	$('.sayim span').text(sure);
	$.gerisay = function(){
		if(sure > 1){
			sure--;
			$('.sayim span').text(sure);	
		}else{
			location.href = "<?php echo base64_decode($_GET['info']); ?>";
		}
	}
	setInterval('$.gerisay();',3000);
});

</script>

</body> 
</html>
		
	<?php } ?>