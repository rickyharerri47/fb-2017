<div class="bcomment">
	<div class="dtop">
		<div class="lcol"><span><img src="{foto}" alt=""/></span></div>
		<div class="rcol">
			<span class="reply">[fast]<b>Répondre</b>[/fast]</span>
			<ul class="reset">
				<li><h4>{author}</h4></li>
				<li>{date}</li>
			</ul>
			<ul class="cmsep reset">
				<li>Groupe: {group-name}</li>
				<li>ICQ: {icq}</li>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
	<div class="cominfo"><div class="dpad">
		[not-group=5]
		<div class="comedit">
			<div class="selectmass">{mass-action}</div>
			<ul class="reset">
				<li>[spam]Spam[/spam]</li>
				<li>[complaint]Rapporté une erreur[/complaint]</li>
				<li>[com-edit]Edition[/com-edit]</li>
				<li>[com-del]Supprimer[/com-del]</li>
			</ul>
		</div>
		[/not-group]
		<ul class="cominfo reset">
			<li>Enregistrement: {registration}</li>
			<li>Status: [online]<img src="{THEME}/images/online.png" style="vertical-align: middle;" title="En ligne" alt="En ligne" />[/online][offline]<img src="{THEME}/images/offline.png" style="vertical-align: middle;" title="Hors ligne" alt="Hors ligne" />[/offline]</li>
			<li>[declination={comm-num}]:Commentaire[/declination]</li>
			<li>[declination={news-num}]:Publication[/declination]</li>
		</ul>
	</div>
	<span class="thide">^</span>
	</div>
	<div class="dcont">
		[aviable=lastcomments]<h3 style="margin-bottom: 0.4em;">{news_title}</h3>[/aviable]
		{comment}
		[signature]<br clear="all" /><div class="signature">--------------------</div><div class="slink">{signature}</div>[/signature]
		<div class="clr"></div>
	</div>
</div>