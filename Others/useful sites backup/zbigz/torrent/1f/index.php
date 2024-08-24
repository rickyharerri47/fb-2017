<?php
error_reporting(7);
@set_magic_quotes_runtime(0);
ob_start();
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
			<link rel="SHORTCUT ICON" href="images/dove.png" type="image/x-icon" />
			<title>&#9734 TotalDebrid Multi Hebergeurs &#9734 - Powered by ..:: TotalDebrid ::.. -</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="keywords" content="<?php printf($obj->lang['version']); ?>, download, get, vinaget, file, generator, premium, link, sharing, bitshare.com, crocko.com, depositfiles.com, extabit.com, filefactory.com, filepost.com, filesmonster.com, freakshare.com, gigasize.com, hotfile.com, jumbofiles.com, letitbit.net, mediafire.com, megashares.com, netload.in, oron.com, rapidgator.net, rapidshare.com, ryushare.com, sendspace.com, share-online.biz, shareflare.net, uploaded.to, uploading.com" />
			<link title="Rapidleech Style" href="images/rl_style_pm.css" rel="stylesheet" type="text/css" />
			<link href='http://fonts.googleapis.com/css?family=Metal+Mania' rel='stylesheet' type='text/css'>
		</head>
		<body>

			<script type="text/javascript" language="javascript" src="images/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="images/ZeroClipboard.js"></script>
			<script type="text/javascript" language="javascript">
				var title = '<?php echo $obj->title; ?>';
				var colorname = '<?php echo $obj->colorfn; ?>';
				var colorfile = '<?php echo $obj->colorfs; ?>';

				var more_acc ='<?php printf($obj->lang["moreacc"]); ?>';
				var less_acc ='<?php printf($obj->lang["lessacc"]); ?>';
				var d_error ='<?php printf($obj->lang["invalid"]); ?>';
				var d_succ1 ='<?php printf($obj->lang["dsuccess"]); ?>';
				var d_succ2 ='<?php printf($obj->lang["success"]); ?>';
				var get_loading ='<?php printf($obj->lang["getloading"]); ?>';
				var notf ='<?php printf($obj->lang["notfound"]); ?>';
			</script> 
			<!--
			<center><img src="images/logo.png" alt="RapidLeech PlugMod" border="0" /></center><br />
			-->
			<div id="showlistlink" class="showlistlink" align="center">
				<div style="border:1px #ffffff solid; width:960px; padding:5px; margin-top:50px;">
					<div id="listlinks"><textarea style='width:950px;height:400px' id="textarea"></textarea></div>
					<table style='width:950px;'><tr>
					<td width="50%" vAlign="left" align="left">	
					<input type='button' value="bbcode" onclick="return bbcode('list');" />
					<input type='button' id ='SelectAll' value="Select All"/>
					<input type='button' id="copytext" value="Copy To Clipboard"/>
					
					</td>
					<td id="report"  width="50%" align="center"></td>
					</tr></table>
				</div>
				<div style="width:120px; padding:5px; margin:2px;border:1px #ffffff solid;">
					<a onclick="return makelist(document.getElementById('showresults').innerHTML);" href="javascript:void(0)" style='TEXT-DECORATION: none'><font color=#FF6600>Click to close</font></a>
				</div>
			</div>
			<table align="center"><tbody>
				<tr>
				<!-- ########################## Begin Plugins ########################## -->
				<td valign="top">
					<table width="100%"  border="0">
						<tr><td valign="top">
							<table border="0" cellpadding="1" cellspacing="1">
								<tr><td width="160" height="100%"><div class="cell-plugin"><em><font face="metal mania" size="4" color="#ADFF2F"><b>Plugins</b></em></div></td></tr>
								<tr><td height="100%" style="padding:3px;">
									<div dir="rtl" align="left" style="overflow-y:scroll; height:255px; padding-left:05px;">
									<?php
										foreach ($host as $file => $site){
											$site = substr($site,0,-4);
											$site = str_replace("_",".",$site) ;
											echo "<span class='plugincollst'>" .$site."</span><br />";
										}
									?>
									</div><br />
									<div class="cell-plugin"><em><font face="metal mania" size="4" color="#ADFF2F"><b>Accounts</b></em></div>
									<table border="0">
										<tr><td height="100%" style="padding:3px;">
											<div dir="rtl" align="left" style="padding-left:5px;">
												<?php $obj->showplugin(); ?>
											</div>
										</td></tr>
									</table><br />
								</td></tr>
							</table>
						</td></tr>
					</table>
				</td>
				<!-- ########################## End Plugins ########################## -->
				<!-- ########################## Begin Main ########################### -->
				<td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="1"><tbody>
						<tr>
							<td class="cell-nav"><a class="ServerFiles" href="./"><em><font face="metal mania" size="4" color="#ADFF2F"><b><?php printf($obj->lang['main']); ?></b></em></a></td>
							<td class="cell-nav"><a class="ServerFiles" href="./?id=donate"><em><font face="metal mania" size="4" color="#ADFF2F"><b><?php printf($obj->lang['donate']); ?></b></em></a></td>
							<td class="cell-nav"><a class="ServerFiles" href="./?id=listfile"><em><font face="metal mania" size="4" color="#ADFF2F"><b><?php printf($obj->lang['listfile']); ?></b></em></a></td>
							<td class="cell-nav"><a class="ServerFiles" href="http://genlink.eu" target="_blank"><em><font face="metal mania" size="4" color="#ADFF2F"><b>TORRENT</b></em></a></td>
							<?php if ($obj->Secure == true) 
							echo '<td class="cell-nav"><a class="ServerFiles" href="./login.php?go=logout"><em><font face="metal mania" size="4" color="#ADFF2F"><b> '.$obj->lang['log'].' </b></em></a></td>'; ?>
						</tr>
					</tbody></table>
					<table id="tb_content"><tbody>
						<tr><td height="5px"></td></tr>
						<tr><td align="center">
<?php 
						#---------------------------- begin list file ----------------------------#
						if ((isset($_GET['id']) && $_GET['id']=='listfile') || isset($_POST['listfile']) || isset($_POST['option']) || isset($_POST['renn']) || isset($_POST['remove']))  {
							if($obj->listfile==true)$obj->fulllist();
							else echo "<BR><BR><font color=red size=2>".$obj->lang['notaccess']."</b></font>";
						}
						#---------------------------- end list file ----------------------------#

						#---------------------------- begin donate  ----------------------------#
						else if (isset($_GET['id']) && $_GET['id']=='donate') { 
?>
							<div align="center">
								<div id="wait"><?php printf($obj->lang['donations']); ?></div><BR>
								<form action="javascript:donate(document.getElementById('donateform'));" name="donateform" id="donateform">
									<table>
										<tr>
											<td>
												<?php printf($obj->lang['acctype']); ?> 
												<select name='type' id='type'>
													<option value="real-debrid">real-debrid.com</option>
													<option value="alldebrid">alldebrid.com</option>
													<option value="fast-debrid">fast-debrid.com</option>
													<option value="rapidshare">rapidshare.com</option>
													<option value="Premiumize">premiumize.me</option>
													<option value="bitshare">bitshare.com</option>
													<option value="hotfile">hotfile.com</option>
													<option value="depositfiles">depositfiles.com</option>
													<option value="fileserve">fileserve.com</option>
													<option value="filesonic">filesonic.com</option>
													<option value="wupload">wupload.com</option>
													<option value="oron">oron.com</option>
													<option value="uploading">uploading.com</option>
													<option value="uploadednet">uploaded.net</option>
													<option value="filefactory">filefactory.com</option>
													<option value="uploadstation">uploadstation.com</option>
													<option value="filejungle">filejungle.com</option>
													<option value="bayfiles">bayfiles.com</option>
													<option value="rapidgator">rapidgator.net</option>
													<option value="filepost">filepost.com</option>
												</select>
											</td>
											<td>
												&nbsp; &nbsp; &nbsp; <input type="text" name="accounts" id="accounts" value="" size="50" maxlength="50"><br />
											</td>
											<td>&nbsp; &nbsp; &nbsp; <input type=submit value="<?php printf($obj->lang['sbdonate']); ?>">
											</td>
										</tr>
									</table>
								</form>
								<div id="check"><font color=#FF6600>user:pass</font> or <font color=#FF6600>cookie</font></div>
							</div>
<?php					
						}
						#---------------------------- end donate  ----------------------------#

						#---------------------------- begin check  ---------------------------#
						else if (isset($_GET['id']) && $_GET['id']=='check'){
							if($obj->checkacc==true) include("checkaccount.php");
							else echo "<BR><BR><font color=red size=2>".$obj->lang['notaccess']."</b></font>";
						}
						#---------------------------- end check  ------------------------------#

						#---------------------------- begin get  ------------------------------#
						else {
?>
							<TotalDebrid><form action="javascript:get(document.getElementById('linkform'));" name="linkform" id="linkform">
							<br><span style="font-family: metal mania;font-size:180%;background-image: url(http://i.imgur.com/lGVURbM.gif)">
							<font size= "5" color="ffffff">TotalDebrid </font></a></span><br>
								<BR><BR>
								<textarea id='links' style='width:550px;height:150px;'name='links' placeholder="Collez votre lien ici. on debrid , 1Fichier, Uplea, Mega, Uptobox (quand happy hours), Mediafire, Zippyshare, Uploaded, Up.4share, Usersfiles, Facebook, Youporn, Youtube, Xvideo, Xhamster, Rapidgator, Datafile, Dailymotion, 2Shared, Uppit, " type="text" ></textarea><BR>
								<?php printf($obj->lang['example']); ?><BR>
								<input type="submit"  class="blkdownbutton"  id ='submit' value='<?php printf($obj->lang['sbdown']); ?>'/>&nbsp;&nbsp;&nbsp;
								<input type="button"  class="blkdownbutton" onclick="reseturl();return false;" value="Reset">&nbsp;&nbsp;&nbsp;
								<input type="checkbox" name="autoreset" id="autoreset" checked>
							</form></TotalDebrid><BR><BR>
							<div id="dlhere" align="left" style="display: none;">
								<BR><hr /><small style="color:#55bbff"><?php printf($obj->lang['dlhere']); ?></small>
								<div align="right"><a onclick="return bbcode('bbcode');" href="javascript:void(0)" style='TEXT-DECORATION: none'><font color=#FF6600>BB code</font></a>&nbsp;&nbsp;&nbsp;
								<a onclick="return makelist(document.getElementById('showresults').innerHTML);" href="javascript:void(0)" style='TEXT-DECORATION: none'><font color=#FF6600>Make List</font></a></div>
							</div>
							<div id="bbcode" align="center" style="display: none;"></div>
							<div id="showresults" align="center"></div>
<?php						
						}
						#---------------------------- end get  ------------------------------#
?>



															<!-- Copyright please don't remove-->
							
						<br><br><br><SPAN style="FONT-FAMILY: Arial; FONT-SIZE: 16px; color:#FFFFFF">Copyright 2015 by <a href='http://TotalDebrid.org/' target='_blank' > TotalDebrid.org</a>. All rights reserved. </SPAN><br>

															<!-- Copyright please don't remove-->	

						</td></tr>
					</tbody></table>
				</td></tr>
				<!-- ########################## End Main ########################### -->

			<table width="60%" align="center" cellpadding="0" cellspacing="0">
				<tr><td>
					<div align="center" style="color:#ccc">
						<!-- Start Server Info -->
							<hr />
						<div id="server_stats">
							<?php echo $obj->notice();?>
						</div>
						<!-- End Server Info -->
						<hr />
			<center><script id="cid0020000143760416114" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 550px;height: 282px;">{"handle":"admin-totaldebrid","arch":"js","styles":{"a":"000000","b":100,"c":"ffffff","d":"ffffff","e":"ffffff","h":"ffffff","k":"000000","l":"000000","m":"000000","n":"ffffff","q":"000000","r":100,"sbc":"bbbbbb","fwtickm":1}}</script></center>
			<script type="text/javascript" language="javascript" src="images/tables.js"></script> 
			
<center>
<h1>Partenaires<h1>
<a href="http://www.lafouinedunet.com/" target="_blank"> <img src="http://www.lafouinedunet.com/images/logo-fouine-site.gif" title="Lafouinedunet.com" class=" DrteTexte" style="margin: 0px; border: #000 0px solid;" height="15" width="77" /></a>
<a href="http://www.directstream.ws/" target="_blank"> <img src="http://i.imgur.com/gz0DadU.png" title="directstream Films et Séries en Streaming" class=" DrteTexte" style="margin: 0px; border: #000 0px solid;" height="15" width="77" /></a> 
<!-- http://www.uhit.eu - Annuaire pour webmaster -->
<a href="http://www.uhit.eu/"><img src="http://www.uhit.eu/button7.php?u=totaldebrid" alt="Annuaire sites Francais"/></a>
<!-- Fin de http://www.uhit.eu -->
<A HREF=http://www.hit-parade.com/hp.asp?site=a634082 TARGET=_top><IMG SRC=http://loga.hit-parade.com/logohp1.gif?site=a634082 TITLE="Hit-Parade" WIDTH=77 HEIGHT=15 BORDER=0></A> <br> <br>
<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,2827618,4,502,95,18,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?2827618&101" alt="frontpage hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
</center><br/>

		</body>
	</html>
		
			
<?php
	} #(!$_POST['urllist'])
} 
############################################### End Secure ###############################################
else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<link rel="SHORTCUT ICON" href="images/dove.png" type="image/x-icon" />
<title>> VIP Access ! - totaldebrid -</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keyw;ords" content="VIP Access !" />
<link title="VinaGetPro Style" href="images/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <hgroup align="center">

</hgroup>
<hr />
<div class='body'>
<br /><center>
<form class="form" action="login.php" method="post" />
<b>Please Put Username And Password To Login</b><br /><br />
<input type="text" placeholder="Username" name="secure" size="30"/><br /><br />
<input type="password" placeholder="Password" name="secure" size="30"/><br />
Remember Me : <input type="checkbox" name="remember_me" />
<br/><br /><input class="button" type="submit" value="Login" />
<br />
<br />
</form>
</center>
</div>
<hr />
<br />
<center>   <p>
            Copyright &copy; 2015 <a href="http://TotalDebrid.org/">TOTALDEBRID</a></p></center>
        </body>
<?php
}
ob_end_flush();
?>