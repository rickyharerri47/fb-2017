<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="nojs">
<head>
{headers}
    <link rel="stylesheet" type="text/css" href="{THEME}/css/style.css" />
	<link rel="stylesheet" type="text/css" href="{THEME}/css/engine.css" />
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="{THEME}/css/style-ie.css"/>
    <![endif]-->
	<link rel="shortcut icon" href="{THEME}/images/favicon.ico" /> <!-- Åñëè favicon íå îòîáðàæàåòñÿ, ïèøåì àäðåñ ÷åðåç www -->
	<script type="text/javascript" src="{THEME}/js/libs.js"></script>

<script>
$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(500);	
		$('#mask').fadeTo("slow",0.3);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>

<link rel="stylesheet" type="text/css" href="{THEME}/css/jqueryslidemenu.css" />

<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<script type="text/javascript" src="{THEME}/js/jqueryslidemenu.js"></script>


</head>
<body>
{AJAX}
	<div id="main">
		<div id="head">
			<div class="leftCorner">
				<div class="rightCorner">
					<div class="inside">
						<div class="logo">
							<a href="/"><h1>Demo<font color="#17B0F7">H501s</font></h1></a>
							 &nbsp;&nbsp;Video Teste Drone &amp; H501s
						</div>
						<div class="service">
							{login}
							<div class="no-float"></div>
							<form onsubmit="javascript: showBusyLayer()" method="post">
								<table width="250" height="28" cellpadding="0" cellspacing="0" border="0" align="right" style="margin-top: 15px;">
								<tr>
									<td width="40"><b></b></td>
									<td width="4"><img src="{THEME}/images/pic_10.png" alt="" /></td>
									<td>
										<input type="hidden" name="do" value="search">
										<input type="hidden" name="subaction" value="search">
										<input name="story" type="text" style="width:100%; height:22px; border: 0; background: url('{THEME}/images/pic_11.png'); padding: 3px;">
									</td>
									<td width="24">
										<input type="image" src="{THEME}/images/pic_13.png" border="0" alt="Íàéòè íà ñàéòå" align="absmiddle">
									</td>
								</tr>
								</table>
							</form>
						</div>
						<div class="no-float"></div>
						<div class="headMenu">
							<div class="leftCorner">
								<div class="rightCorner">
									<div class="inside">
										<ul>
										<li><a href="/#/"><span><span>Accueil</span></span></a></li>
										<li><a href="/#/"><span><span>Vidéo</span></span></a></li>
										<li><a href="/#/"><span><span>Bande-annonce</span></span></a></li>
										<li><a href="/#/"><span><span>Programme</span></span></a></li>
										<li><a href="/#/"><span><span>Contact</span></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<table width="100%" cellpadding="0" cellspacing="0" border="0" style="z-index: 0;">
			<tr>
				<td width="202" valign="top">
					<div class="sidebar">
						<div class="navBlock">
							<h2>Catégorie</h2>
							<ul class="nav">
							<li><a href="/#/">Actualité</a></li>
							<li><a href="/#/">Buzz</a></li>
							<li><a href="/#/">Insolite</a></li>
							<li><a href="/#/">Humour</a></li>
							<li><a href="/#/">Découverte</a></li>
							<li><a href="/#/">Sport</a></li>
							</ul>
						</div>
						<div class="block">
						
						</div>
						<div class="block">
						
						</div>
						<div class="block">
						
						</div>
						<div class="block">
						
						</div>
					</div>
				</td>
				<td valign="top">
					<div class="content">
						<div class="tlCorner">
							<div class="trCorner">
								<div class="blCorner">
									<div class="brCorner">
										{info}
                                        <div style="min-height:400px;">
                                            [not-aviable=main]{content}[/not-aviable]
                                            [aviable=main]
                                            <div align="center">
                                                <div style="height:1px;"></div>
                                             <p style="color:#505050;font-size:17px;font-weight:400;" align="center">Divers Video Drone h501s</p>
                                            <script type="text/javascript" src="http://static2.dmcdn.net/publisher/widgets.js?type=carousel&list=/playlist/x4uci1/1&logo=1&limit=30&width=800" async="true"></script>
                                                <div style="height:20px;"></div>
                                             <p style="color:#505050;font-size:17px;font-weight:400;" align="center">Les Videos Les Plus Vues</p>
                                            <script type="text/javascript" src="http://static2.dmcdn.net/publisher/widgets.js?type=carousel&list=/playlist/x47pp3/1&logo=1&limit=30&width=800" async="true"></script>
                                            </div>
                                                [/aviable]
                                        </div>
									</div>
								</div>
							</div>
						</div>
						<br/>
						<div class="tlCorner">
							<div class="trCorner">
								<div class="blCorner">
									<div class="brCorner">
										<table width="100%" cellspacing="0" cellpadding="0" border="0">
										<tr>
											<td width="40%" valign="top">
												<div class="popular">
													<table width="100%" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td width="4" height="4"><img src="{THEME}/images/pic_52.png" alt="" /></td>
														<td style="background: url('{THEME}/images/pic_53.png') repeat-x;"></td>
														<td width="4" height="4"><img src="{THEME}/images/pic_56.png" alt="" /></td>
													</tr>
													<tr>
														<td style="background: url('{THEME}/images/pic_82.png') repeat-y;"></td>
														<td class="calendText">
														<iframe id="dm_jukebox_iframe" allowfullscreen="true" allowtransparency="true" style="overflow:hidden; margin:0; padding:0; width: 100%; height: 275px;" width="100%" align="center" frameborder="0" marginwidth="0" marginheight="0" src="http://www.dailymotion.com/widget/jukebox?list[]=%2Fplaylist%2Fx4ua79_videochoctk_top-video-h501s%2F1&&autoplay=0&mute=1" align="middle" frameborder="0" width="100%"></iframe>
														</td>
														<td style="background: url('{THEME}/images/pic_59.png') repeat-y;"></td>
													</tr>
													<tr>
														<td width="4" height="4"><img src="{THEME}/images/pic_84.png" alt="" /></td>
														<td style="background: url('{THEME}/images/pic_85.png') repeat-x;"></td>
														<td width="4" height="4"><img src="{THEME}/images/pic_86.png" alt="" /></td>
													</tr>
													</table>
												</div>
											</td>
											<td width="40%" valign="top">
												<div class="calend">
													<table width="100%" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td width="4" height="4"><img src="{THEME}/images/pic_52.png" alt="" /></td>
														<td style="background: url('{THEME}/images/pic_53.png') repeat-x;"></td>
														<td width="4" height="4"><img src="{THEME}/images/pic_56.png" alt="" /></td>
													</tr>
													<tr>
														<td style="background: url('{THEME}/images/pic_82.png') repeat-y;"></td>
														<td class="calendText">
															<center><h3>Vidéo du moment</h3>
                                                                <br><IFRAME src="./rtg1231rgrtgtr/4607tr.php" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="230" height="230"></IFRAME><br>
																
                                                            </center>
														</td>
														<td style="background: url('{THEME}/images/pic_59.png') repeat-y;"></td>
													</tr>
													<tr>
														<td width="4" height="4"><img src="{THEME}/images/pic_84.png" alt="" /></td>
														<td style="background: url('{THEME}/images/pic_85.png') repeat-x;"></td>
														<td width="4" height="4"><img src="{THEME}/images/pic_86.png" alt="" /></td>
													</tr>
													</table>
												</div>
											</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</td>
			</tr>
			</table>
		</div>
		<div id="footer">
			<div class="border">
				<ul>
				<li></li>
				</ul>
				DemoH501s (c) 2014.
 <center>            
<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3240349,4,502,95,18,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3240349&101" alt="web log free" border="0"></a></noscript>
<!-- Histats.com  END  --> </center>

			</div>
		</div>
	</div>
<style>#h480{position:fixed !important;position:absolute;top:-2px;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");left:-3px;width:102%;height:102%;background-color:#fff;opacity:.95;filter:alpha(opacity=95);display:block;padding:20% 0}#h480 *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 14px Verdana,Arial,sans-serif;text-decoration:none}#h480 ~ *{display:none}</style><div id="h480"><strong>Please enable / Bitte aktiviere JavaScript!<br>Veuillez activer / Por favor activa el Javascript!<a href="http://applefrance.fr/avertissement/index.html">[ En savoir plus ]</a></strong></div><script>window.document.getElementById("h480").parentNode.removeChild(window.document.getElementById("h480"));(function(l,m){function n(a){a&&h480.nextFunction()}var h=l.document,p=["i","s","u"];n.prototype={rand:function(a){return Math.floor(Math.random()*a)},getElementBy:function(a,b){return a?h.getElementById(a):h.getElementsByTagName(b)},getStyle:function(a){var b=h.defaultView;return b&&b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},deferExecution:function(a){setTimeout(a,250)},insert:function(a,b){var e=h.createElement("strong"),d=h.body,c=d.childNodes.length,g=d.style,f=0,k=0;if("h480"==b){e.setAttribute("id",b);g.margin=g.padding=0;g.height="100%";for(c=this.rand(c);f<c;f++)1==d.childNodes[f].nodeType&&(k=Math.max(k,parseFloat(this.getStyle(d.childNodes[f]).zIndex)||0));k&&(e.style.zIndex=k+1);c++}e.innerHTML=a;d.insertBefore(e,d.childNodes[c-1])},displayMessage:function(a){var b=this;a="abisuq".charAt(b.rand(5));b.insert("<"+a+'><img src="data:image/png;base64,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" height="66" width="432" alt="" /> <a href="http://demoh501s.tk/Avertissement.html">[ En savoir plus ]</a>'+("</"+a+">"),"h480");h.addEventListener&&b.deferExecution(function(){b.getElementBy("h480").addEventListener("DOMNodeRemoved",function(){b.displayMessage()},!1)})},i:function(){for(var a="ad-main-top,adLabel,adPosition7,ad_space,adhomepage,ctr-ad,listing-ad,ad,ads,adsense".split(","),b=a.length,e="",d=this,c=0,g="abisuq".charAt(d.rand(5));c<b;c++)d.getElementBy(a[c])||(e+="<"+g+' id="'+a[c]+'"></'+g+">");d.insert(e);d.deferExecution(function(){for(c=0;c<b;c++)if(null==d.getElementBy(a[c]).offsetParent||"none"==d.getStyle(d.getElementBy(a[c])).display)return d.displayMessage("#"+a[c]+"("+c+")");d.nextFunction()})},s:function(){var a={'pagead2.googlesyndic':'google_ad_client','js.adscale.de/getads':'adscale_slot_id','get.mirando.de/miran':'adPlaceId'},b=this,e=b.getElementBy(0,"script"),d=e.length-1,c,g,f,k;h.write=null;for(h.writeln=null;0<=d;--d)if(c=e[d].src.substr(7,20),a[c]!==m){f=h.createElement("script");f.type="text/javascript";f.src=e[d].src;g=a[c];l[g]=m;f.onload=f.onreadystatechange=function(){k=this;l[g]!==m||k.readyState&&"loaded"!==k.readyState&&"complete"!==k.readyState||(l[g]=f.onload=f.onreadystatechange=null,e[0].parentNode.removeChild(f))};e[0].parentNode.insertBefore(f,e[0]);b.deferExecution(function(){if(l[g]===m)return b.displayMessage(f.src);b.nextFunction()});return}b.nextFunction()},u:function(){var a="/ad_iframe.,/adcast01_,/admeldscript.,/adx.,/banman/ad,/deliversds.,/glam_ads.,/tower_ad_,-468x60-,/728-90/ad".split(","),b=this,e=b.getElementBy(0,"img"),d,c;e[0]!==m&&e[0].src!==m&&(d=new Image,d.onload=function(){c=this;c.onload=null;c.onerror=function(){p=null;b.displayMessage(c.src)};c.src=e[0].src+"#"+a.join("")},d.src=e[0].src);b.deferExecution(function(){b.nextFunction()})},nextFunction:function(){var a=p[0];a!==m&&(p.shift(),this[a]())}};l.h480=h480=new n;h.addEventListener?l.addEventListener("load",n,!1):l.attachEvent("onload",n)})(window);</script>
<!-- Place the div element where you want to display ads -->
<div id="myec_7214293_23" class="myec" data-tt="38" data-ref='eyJpZF9zaXRlIjoiNiIsInByb2dfb24iOiI1fDZ8OHwxN3wyM3wyNXw0OXw1N3w1OSIsInR5cGVfc2l0ZSI6IjEiLCJ0cmFja2VyMSI6IiIsInRyYWNrZXIyIjoiIiwiY2F0X29uIjoiIiwibnNmdyI6IjAiLCJwZWdpIjoiMSIsImxnIjoiZnIiLCJuZXR3b3JrIjoiZGVza3RvcF9zdHJpY3QiLCJkIjoiMCIsInByb3RvIjoiaHR0cCIsImRvbWFpbl9lYyI6InBybS5ldXJvcGFjYXNoLmNvbSJ9'></div>
			

</body>
</html>