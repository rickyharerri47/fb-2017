[not-group=5]
<a id="login-btn" class="logged ico">{login}</a>
<div id="lg-dialog" title="Panneau" class="wideDialog">
	<a id="lg-close"><img src="{THEME}/dleimages/supp.png"></a>
	<ul id="usermenu">
	[admin-link]<li><a href="{admin-link}" target="_blank"><b>Administration</b></a></li>[/admin-link]
		<li><a href="{profile-link}">Mon profile</a></li>
		<li><a href="{pm-link}">Messages ({new-pm} | {all-pm})</a></li>
		<li><a href="{favorites-link}">Mes Favoris</a></li>
		<li><a href="{stats-link}">Statistiques</a></li>
		<li><a href="{newposts-link}">Nouvelles</a></li>
		<li><a href="{logout-link}">Quitter</a></li>
	</ul>
</div>
[/not-group]
[group=5]
<a id="login-btn" class="ico">Entrer</a>
<div id="lg-dialog" title="Panneau" class="wideDialog">
	<a id="lg-close" class="thd">Fermer</a>
	<form class="login-form" method="post" action="">
		<ul>
			<li><label for="login_name">{login-method}</label>
			<input class="f_input" type="text" name="login_name" id="login_name" ></li>
			<li><label for="login_password">Passe:</label>
			<input class="f_input" type="password" name="login_password" id="login_password" ></li>
		</ul>
		<div class="submitline">
			<button onclick="submit();" type="submit" title="Entrer" class="btn f_wide">Entrer</button>
		</div>
		<div class="log-links">
			<a href="{lostpassword-link}">Oublié ?</a> |
			<a href="{registration-link}">Inscription</a>
		</div>
		<input name="login" type="hidden" id="login" value="submit">
	</form>
</div>
[/group]