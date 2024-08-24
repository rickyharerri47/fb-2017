<div id="leftmenu" class="block">
	<div class="dtop">&nbsp;</div>
	<div class="dcont">
		<div class="btl">
			<h4>Navigation</h4>
		</div>
		<div class="bluemenu">
			<ul class="lmenu reset">
				<li><a href="#">Cinéma</a></li>
				<li><a href="#">Album</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">Météo</a></li>
				<li><a href="#">Logiciel</a></li>
				<li><a href="#">Série</a></li>
				<li><a href="#">Tennis</a></li>
				<li><a href="#">Football</a></li>
			</ul>
		</div>
		<div class="dpad">
			<ul class="lmenu reset">
				<li><a href="http://dle-news.ru">Site DLE officiel</a></li>
				<li><a href="/index.php?do=search&amp;mode=advanced">Recherche avancé</a></li>
				<li><a href="/index.php?do=lastnews">articles récents</a></li>
				<li><a href="/index.php?action=mobile">Mobile Version</a></li>
				<li><a href="http://www.dle-fr.org" target="_blank">DLE-fr</a></li>
			</ul>
		</div>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

<div id="news-arch" class="block">
	<div class="dtop">&nbsp;</div>
	<div class="dcont">
		<div class="btl">
			<h4>Archives</h4>
			<span class="tabmenu">
				<a class="thide tabcal" href="#tabln1">Par Calendrier</a>
				<a class="thide tabarh" href="#tabln2">Par liste</a>
			</span>
		</div>
		<div class="tabcont" id="tabln1">
			<p>Par Calendrier</p>
			<div class="dpad">{calendar}</div>
		</div>
		<div class="tabcont" id="tabln2">
			<p>Par Liste</p>
			<div class="dpad">{archives}</div>
		</div>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

<div id="popular" class="block">
	<div class="dtop">&nbsp;</div>
	<div class="dcont">
		<div class="btl">
			<h4>News populaire</h4>
		</div>
		<ul>
			{topnews}
		</ul>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

{vote}

<div id="news-partner" class="blocklite">
	<div class="dpad">
		<h4 class="btl">DLE-FR Flux</h4>
		{inform_dle}
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

<div id="change-skin" class="blocklite">
	<div class="dpad">
		<div class="rcol">{changeskin}</div>
		<b class="rcol">Theme:</b>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>