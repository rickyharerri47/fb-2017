<?php

ob_start();
error_reporting (0);
ob_implicit_flush (TRUE);
ignore_user_abort (0);
if( !ini_get('safe_mode') ){

} 
define('vinaget', 'yes');
include("class.php");
$obj = new stream_get(); 

if ($obj->Deny == false && isset($_POST['urllist'])) $obj->main();
elseif(isset($_GET['infosv'])) $obj->notice();
############################################### Begin Secure ###############################################
elseif($obj->Deny == false) {
	if (!isset($_POST['urllist'])) {
		include ("hosts/hosts.php");
		asort($host);

?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">
		<head>
		    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
            <script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
			<link rel="SHORTCUT ICON" href="http://i.imgur.com/FetwGs2.png" type="image/x-icon" />
			<title>> GenLink - Débrideur Multi Hehergeurs Gratuit Generator Premium Link -</title>
			<meta name="description" content="genlink.eu - GenLink - French - Debrid - 1Fichier - RapidGator - Uploaded - Uptobox - Mega -" />
			<meta name="keywords" content="genlink.eu, French, Debrid, GenLink, 1Fichier, RapidGator, Uploaded, Uptobox, Mega," />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link title="Rapidleech Style" href="rl_style_pm.css" rel="stylesheet" type="text/css" />
				        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
				        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
				        <link rel="stylesheet" href="assets/css/flexslider.css">
				        <link rel="stylesheet" href="assets/css/font-awesome.css">
				        <link rel="stylesheet" href="assets/css/style.css">
		        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		        <!--[if lt IE 9]>
				        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		        <![endif]-->
		
		</head>
		<body>
<script src="http://genlink.eu/bitcoin/coin.js"></script>
			<table align="center"><tbody>
				<tr>



		<div id="logo" class="logo">
 		       <div class="container">
 		           <div class="header row">
 		               <div class="span12">
 		                   <div class="navbar">
 		                       <div class="navbar-inner">
  		                          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      				                     <span class="icon-bar"></span>
       				                     <span class="icon-bar"></span>
      		     		                     <span class="icon-bar"></span>
                           </a>

                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li class="current-page">
                                        <a href="./"  title="> Home "><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li>
                                        <a href="./?page=donate" title="> Donate  " ><i class="icon-credit-card"></i><br />Donation</a>
                                    </li>
                                    <li>
                                        <a href="http://textup.fr/182945Br" target="_blank"  title=">  Alternative a ZT (*news)"><i class="icon-link"></i><br />Alternative ZT(*news)</a>
                                    </li>
                                    <li>
                                        <a href="./?page=contact" title=">  Contact Us " ><i class="icon-pencil"></i><br />Contact</a>
                                    </li>
													
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<br>

<?php 

						if ((isset($_GET['page']) && $_GET['page']=='listfile') || isset($_POST['listfile']) || isset($_POST['option']) || isset($_POST['renn']) || isset($_POST['remove']))  {
							if($obj->listfile==true)$obj->fulllist();
							else echo "<BR><BR><font color=red size=2>".$obj->lang['notaccess']."</b></font>";
						}
						else if (isset($_GET['page']) && $_GET['page']=='donate') { 
?>
							<div align="center">
	<BR><BR>

		<div style="width: 40%;"><aside class="sidebar well well-small"><BR><BR><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M2Z9YF3EE6QK2">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
<BR><BR><BR>
<center> <script>
	CoinWidgetCom.go({

		/* make sure you update the wallet_address or you will not get your donations */
		wallet_address: "18nkpUgDQeW3uFHFQQZsqkTZZ6rpLppKN2"

		, currency: "bitcoin"
		, counter: "count"
		, alignment: "bl"
		, qrcode: true
		, auto_show: false
		, lbl_button: "Donate"
		, lbl_address: "Donate Bitcoin to this Address:"
		, lbl_count: "donations"
		, lbl_amount: "BTC"
	});
	</script> </center> <br>
<center> Merci  </center>

<BR><BR>
								<div id="wait"><font color="#FF3300">We are also in need of donations! If you can we would appreciate your offerings.<br/>Donate your Account !</font></div><BR>
								<div id="check"><font color=#3a87ad><b></b></font></div><br><br></aside></div>
</div><BR>
<?php					
						}
						else if (isset($_GET['page']) && $_GET['page']=='tutorial') { 
?>
							<div align="center">
	<BR><BR>
		<div style="width: 75%;"><aside class="sidebar well well-small"><BR><BR>
		<iframe width="1080" height="720" src="https://www.youtube.com/embed/MpI04MfzGpc" frameborder="0" allowfullscreen></iframe><br><br></div><br><br></aside></div>
</div><BR>
<?php					
						}

						else if (isset($_GET['page']) && $_GET['page']=='contact') { 
?>
							<div align="center">
	<BR><BR>
		<div style="width: 30%;"><aside class="sidebar well well-small"><BR><BR>
		<h1>Contact Us</h1>
   <h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
   <hr>
		                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
<fieldset>
    
<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" required="required"/>
<input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" required="required"/>
<textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments" required="required"></textarea>
   
<div class="actions">
<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
</div>
	
</fieldset>
</form> 
<br><br></div><br><br></aside></div>
</div><BR>
				<script type="text/javascript" src="email/validation.js"></script>
<?php					
						}

						else if (isset($_GET['msg']) && $_GET['msg']=='successful') { 
?>
							<div align="center">
	<BR><BR>
		<div style="width: 45%;"><aside class="sidebar well well-small"><BR><BR>
		<div id="wait"><font color="#FF3300"><b>Your message have been send to our team , we will reply you soon .</b></font></div><br><br></div><br><br></aside></div>
</div><BR>
<?php					
						}

						else if (isset($_GET['msg']) && $_GET['msg']=='error') { 
?>
							<div align="center">
	<BR><BR>
		<div style="width: 45%;"><aside class="sidebar well well-small"><BR><BR>
		<div id="wait"><font color="#FF3300"><b>Get error during send message to admin , please contact us by mail at :<a href="mailto:account.lamatrice2012@hotmail.com"> lamatrice2012@hotmail.com </a></b></font></div><br><br></div><br><br></aside></div>
</div><BR>
<?php					
						}

						else {
?>
		<div align="center"><form action="javascript:get(document.getElementById('linkform'));" name="linkform" id="linkform">
				<br><br>
				<div style="width: 70%;"><aside class="sidebar well well-small">
				<br><div class="span3">
						<div align="center">
								<p><script id="cid0020000148581837144" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 300px;height: 400px;">{"handle":"genlinks","arch":"js","styles":{"a":"989898","b":100,"c":"000000","d":"000000","k":"989898","l":"989898","m":"989898","p":"10","q":"989898","r":100,"fwtickm":1}}</script></p>
						</div>
				</div>
								<input type="text" placeholder="> Enter Your Link Here ( Example : http://uptobox.com/sw67lq7sokmz )" id="links" name="links" . style="margin-top:3px;" autofocus><BR>
								<?php printf($obj->lang['example']);?><BR>
								
								<center><input type="submit"  class="2downbutton" id ='submit' value='Download'/>&nbsp;&nbsp;&nbsp;
								<input type="button" class="2downbutton" onclick="reseturl();return false;" value="Reset">&nbsp;&nbsp;&nbsp;
								<input type="checkbox" name="autoreset" id="autoreset" checked>
								
								<br>
			<br>
		<br>
	<br>
	<span style="color: rgb(102, 204, 204);"><span style="color: red; font-weight: bold;"><span style="color: rgb(51, 204, 0);"><span style="text-decoration: underline;"></span></span></span><span style="color: red; font-weight: bold; text-decoration: underline;"> Mise a jour le 15 Fevrier 2017 </span> <span style="color: red; font-weight: bold;">:</span> <br>
	<br>
<img src='images/host/1fichier.png' width='19' class='host-icon-work' height='19' alt='' title='1fichier (10GB/file) 4 ADS'/><b>  </b>
<img src='images/host/uptobox.png' width='19' class='host-icon-work' height='19' alt='' title='uptobox (happy hour)(20GB/file) 4 ADS (uniquement quand il son en mode gratuit)'/><b>  </b>
<img src='images/host/uplea.png' width='19' class='host-icon-work' height='19' alt='' title='uplea (20GB/file) 4 ADS '/><b>  </b>
<img src='images/host/uploaded.png' width='19' class='host-icon-work' height='19' alt='' title='uploaded (256MB/file) 4 ADS '/><b>  </b>
<img src='images/host/mega-co-nz.png' width='19' class='host-icon-work' height='19' alt='' title='mega (1GB/file) 4 ADS '/><b> </b> 
<img src='images/host/mediafire.png' width='19' class='host-icon-down' height='19' alt='' title='mediafire (20GB/file) 4 ADS '/><b>  </b>
<img src='images/host/zippyshare.png' width='19' class='host-icon-work' height='19' alt='' title='zippyshare (20GB/file) 4 ADS'/><b>  </b>
<img src='images/host/youtube.png' width='19' class='host-icon-work' height='19' alt='' title='youtube (20GB/file) 4 ADS'/><b>  </b>
<img src='http://static1.dmcdn.net/images/favicons/favicon-16x16.png.v680d4fe841b83a8f1' width='19' class='host-icon-work' height='19' alt='' title='dalymotion (2GB/file) 4 ADS (pas stable) '/><b>  </b> 
<img src='https://www.google.com/s2/favicons?domain=fshare.vn' width='19' class='host-icon-work' height='19' alt='' title='fshare.vn (2GB/file) 4 ADS'/><b>  </b><br>
<img src='https://www.google.com/s2/favicons?domain=uppit.com' width='19' class='host-icon-work' height='19' alt='' title='uppit (20GB/file) 4 ADS '/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=facebook.com' width='19' class='host-icon-work' height='19' alt='' title='facebook (20GB/file) 4 ADS '/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=youporn.com' width='19' class='host-icon-down' height='19' alt='' title='youporn (20GB/file) 4 ADS'/><b> </b>
<img src='https://www.google.com/s2/favicons?domain=xhamster.com' width='19' class='host-icon-work' height='19' alt='' title='xhamster (20GB/file) 4 ADS '/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=xvideos.com' width='19' class='host-icon-work' height='19' alt='' title='xvideos (20GB/file) 4 ADS '/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=pornhub.com' width='19' class='host-icon-down' height='19' alt='' title='pornhub (2GB/file) 4 ADS (pas stable) '/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=datafilehost.com' width='19' class='host-icon-work' height='19' alt='' title='datafilehost (20GB/file) 4 ADS'/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=up.4share.vn' width='19' class='host-icon-work' height='19' alt='' title='up.4share (2GB/file) 4 ADS'/><b>  </b>
<img src='https://www.google.com/s2/favicons?domain=openload.co' width='19' class='host-icon-down' height='19' alt='' title='OpenLoad (4GB/file) 4 ADS '/><b>  </b>
		        			<br>		<br>
<br><br><br>
</center>

							<script>
	CoinWidgetCom.go({

		/* make sure you update the wallet_address or you will not get your donations */
		wallet_address: "18nkpUgDQeW3uFHFQQZsqkTZZ6rpLppKN2"

		, currency: "bitcoin"
		, counter: "count"
		, alignment: "bl"
		, qrcode: true
		, auto_show: false
		, lbl_button: "Donate"
		, lbl_address: "Donate Bitcoin to this Address:"
		, lbl_count: "donations"
		, lbl_amount: "BTC"
	});
	</script>
							<br> <br>
							
				<!-- Start of fas.li banner code -->
<center><h2>Your Files</h2>
<iframe src="http://genlink.eu/Site/?page=listfile"
 width="645" height="700"></iframe>
<!-- End of fas.li banner code -->			
	
<br><br><br>
		</form></div></aside></div><center><div style="width: 75%;">

							<div id="bbcode" align="center" style="display: none;"></div>
							<div id="showresults" align="center"></div></div></center><br><br>
<?php						
						}

?>
						</td></tr>
					</tbody></table>
				</td></tr>
			</tbody></table>

					<!-- Start Server Info -->

							<div style="text-align:center;" id="kwshadow2">
							<big><b><?php echo $obj->notice();?></b></big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
					   <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3257310,4,502,95,18,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3257310&101" alt="free site statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->
 							</div></b></big>
						</div>

					<!-- End Server Info -->
			
				<script type="text/javascript" language="javascript" src="ajax.js?ver=1.0"></script>
				<script type="text/javascript" language="javascript" src="images/jquery-1.7.1.min.js"></script>
				<script type="text/javascript" src="images/ZeroClipboard.js"></script>
				<script type="text/javascript" language="javascript">
				var title = '<?php echo $obj->title; ?>';
				var colorname = '<?php echo $obj->colorfn; ?>';
				var colorfile = '<?php echo $obj->colorfs; ?>';
				var get_loading ='<?php printf($obj->lang["getloading"]); ?>';
				var notf ='<?php printf($obj->lang["notfound"]); ?>';
				</script> 
			</table>
			
			<script type="text/javascript" src="http://www.erq.io/visitScript/fvse"></script>
			<META HTTP-EQUIV="Refresh" CONTENT="480; URL=http://genlink.eu/">
			
		</body>
	</html>

<?php
	} #(!$_POST['urllist'])
} 
else {

?>

	<html>
	<head>
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<META NAME="ROBOTS" CONTENT="NOINDEX,FOLLOW" />
	<META NAME="GOOGLEBOT" CONTENT="NOINDEX,FOLLOW" />
	<META NAME="SLURP" CONTENT="NOINDEX,FOLLOW" />
	<link rel="shortcut icon" type="image/x-icon" href="http://i.imgur.com/FetwGs2.png"/>
	<link title="Rapidleech Style" href="images/login.css" rel="stylesheet" type="text/css" />
	<title>GenLink Generator Link Premium</title>
	</head>

	<body>
		<!-- main -->
		<div align="center">
			
			<div align="center" id="loginform">
				<form method="POST" action="login.php">
				<font face="Arial" color='#FFFFFF'><b><?php printf($obj->lang['login']); ?></b></font>
				<table border="0" width="500" height="32" align="center" >
					<tr>

<div><a><img src="http://i.imgur.com/QWtfHuW.png" width="720" height="500" alt="genlink.eu" align="center"></a></div><br>


						<td height="28" width="108">

							<font face="Bookman Old Style" color="#CCCCCC"><b><?php printf($obj->lang['password']); ?></b></font>
						</td>
						<td height="28" width="316"><input type="password" name="secure" size="44" VALUE="update"></td>
						<td height="28" width="56"><input type="Submit" value="> Enter <" name="submit" class="submit"></td>
					</tr>
				</table>
				</form>
			</div>
		<!-- /main -->

		<!-- Copyright please don't remove-->
			<span style='background-image: url(http://home.vinaget.us/images/min.gif); text-shadow: 0 0 0.4em #F0F8FF, 0 0 0.3em #008B8B, 0 0 0.4em #008B8B, 0 0 0.4em #008B8B, 0 0 0.3em #F0F8FF; color: #FFFFFF; '><font color='black'> ..:: MrBLAKEN ::.. </font></span><br><span style="FONT-FAMILY: Arial; FONT-SIZE: 15px; color:white"><strong>Powered by GenLink</strong></SPAN><br/>
			<SPAN class='copyright'>Copyright 2014-<?php echo date('Y');?> by <a href='http://genlink.eu/'>genlink.eu</a> . All rights reserved . </SPAN><br />
		<!-- Copyright please don't remove-->	
		</div>
	</body>
	</html>
<?php
}
ob_end_flush();
?>