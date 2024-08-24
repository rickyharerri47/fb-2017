<div class="pheading"><h2>Site Statistics</h2></div>
<div class="basecont statistics">
	<ul class="lcol reset">
		<li><h5 class="blue">Articles:</h5></li>
		<li>Total Articles: <b class="blue">{news_num}</b></li>
		<li>Articles Publiés: <b class="blue">{news_allow}</b></li>
		<li>Articles Publiés sur l'accueil: <b class="blue">{news_main}</b></li>
		<li>Articles en attente de modération: <b class="blue">{news_moder}</b></li>
	</ul>
	<ul class="lcol reset">
		<li><h5 class="blue">Utilisateurs:</h5></li>
		<li>Total Utilisateurs enregistrer: <b class="blue">{user_num}</b></li>
		<li>Bannis: <b class="blue">{user_banned}</b></li>
	</ul>
	<ul class="lcol reset">
		<li><h5 class="blue">Comments:</h5></li>
		<li>Total Commentaires: <b class="blue">{comm_num}</b></li>
		<li><a href="/?do=lastcomments">Dernier Commentaires</a></li>
	</ul>
	<br clear="all" />
	<div class="dpad infoblock radial">
		<ul class="reset">
			<li>Jour: <span class="blue">Total {news_day} articles et {comm_day} commentaires, {user_day}  utilisateurs enregistrés</span></li>
			<li>Par semaine: <span class="blue">Total {news_week} articles et {comm_week} commentaires, {user_week}  utilisateurs enregistrés</span></li>
			<li>Par mois: <span class="blue">Total {news_month} articles et {comm_month} commentaires, {user_month}  utilisateurs enregistrés</span></li>
		</ul>
	</div>
</div>
<div class="pheading"><p><b>Taille de la base de donnée: {datenbank}</b></p></div>
<div class="basecont">
	<div class="pheading">
		<h3 class="heading">Top Utilisateurs</h3>
		<table width="100%" class="userstop">{topusers}</table>
	</div>
</div>