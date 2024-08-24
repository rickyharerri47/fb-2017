{poll}
<div class="base fullstory">
	<div class="dpad">
		<h3 class="btl"><span id="news-title">{title}</span></h3>
		<div class="bhinfo">
		[not-group=5]
			<ul class="isicons reset">
				<li>[edit]<img src="{THEME}/dleimages/editstore.png" title="Edité" alt="Edition" />[/edit]</li>
				<li>{favorites}</li>
				<li>[complaint]<img src="{THEME}/images/complaint.png" title="Signalé une erreur" alt="Signalé une erreur" />[/complaint]</li>
			</ul>
		[/not-group]
			<span class="baseinfo radial">
				Auteur: {author} on [day-news]{date}[/day-news]
			</span>
			[rating]<div class="ratebox"><div class="rate">{rating}</div></div>[/rating]
		</div>
		<div class="maincont">
			{full-story}
			<div class="clr"></div>
			[edit-date]<p class="editdate"><br /><i>Dernière modification par: <b>{editor}</b> - {edit-date}
			<br />[edit-reason]Raison: {edit-reason}[/edit-reason]</i></p>[/edit-date]
			[tags]<br /><p class="basetags"><i>Tags: {tags}</i></p>[/tags]
		</div>
		[pages]<div class="storenumber">{pages}</div>[/pages]
	</div>
	[related-news]<div class="related">
		<div class="dtop"><span><b>Articles similaires:</b></span></div>	
		<ul class="reset">
			{related-news}
		</ul>
		<br />
	</div>[/related-news]
	<div class="mlink">
		<span class="argback"><a href="javascript:history.go(-1)"><b>Retour</b></a></span>
		<span class="argviews"><span title="Vues: {views}"><b>{views}</b></span></span>
		<span class="argcoms">[com-link]<span title="Commentaires: {comments-num}"><b>{comments-num}</b></span>[/com-link]</span>
		<div class="mlarrow">&nbsp;</div>
		<p class="lcol argcat">Categorie: {link-category}</p>
	</div>
	[group=5]
	<div class="clr berrors" style="margin: 0;">
		Cher visiteur, vous parcourez notre site en tant qu'invité.<br />
		Nous vous recommandons fortement de <a href="/index.php?do=register">de vous enregistrer</a> ou de vous identifié.
	</div>
	[/group]
</div>
<div class="pheading">
	<h2 class="lcol">Commentaires:</h2>
	<a class="addcombtn" href="#" onclick="$('#addcform').toggle();return false;"><b>Ajouter commentaire</b></a>
	<div class="clr"></div>
</div>
{addcomments}
{comments}
{navigation}