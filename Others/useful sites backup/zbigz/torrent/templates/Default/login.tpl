[not-group=5]
	<ul class="reset loginbox">
		<li class="loginava">
			<a href="{profile-link}">
				<img src="{foto}" alt="{login}" />
				<b>&nbsp;</b>
			</a>
		</li>
		<li class="loginbtn">
			<a class="lbn" id="logbtn" href="#"><b>{login}</b></a>
			<a class="thide lexit" href="{logout-link}">Выход</a>
				<div id="logform" class="radial">
					<ul class="reset loginenter">
		[admin-link]<li><a href="{admin-link}" target="_blank"><b>Administration</b></a></li>[/admin-link]
					<li><a href="{profile-link}">Mon Profil</a></li>
					<li><a href="{favorites-link}">Mes favoris ({favorite-count})</a></li>
					<li><a href="{newposts-link}">Articles non lu</a></li>
					<li><a href="/?do=lastcomments">Dernier commentaire</a></li>
					<li><a href="{stats-link}">Statistique</a></li>
				</ul>
			</div>
		</li>
		<li class="lvsep"><a href="{addnews-link}">Ajouter un Article</a></li>
		<li class="lvsep"><a class="radial" href="{pm-link}">{new-pm}</a><a href="{pm-link}">Messages</a></li>
	</ul>
[/not-group]
[group=5]
	<ul class="reset loginbox">
		<li class="loginbtn">
			<a class="lbn" id="logbtn" href="#"><b>Connection</b></a>
			<form method="post" action="">
				<div id="logform" class="radial">
					<ul class="reset">
						<li class="lfield"><label for="login_name">{login-method}</label><input type="text" name="login_name" id="login_name" /></li>
						<li class="lfield lfpas"><label for="login_password">Passe:</label><input type="password" name="login_password" id="login_password" /></li>
						<li class="lfield lfchek"><input type="checkbox" name="login_not_save" id="login_not_save" value="1"/><label for="login_not_save">&nbsp;Ne pas Mémoriser</label></li>
						<li class="lfield lfpas"><a href="{lostpassword-link}">Oublier ?</a></li>
						<li class="lfield lfchek"><div class="sociallogin">
							[vk]<a href="{vk_url}" target="_blank"><img src="{THEME}/images/social/vkontakte.gif" /></a>[/vk]
							[odnoklassniki]<a href="{odnoklassniki_url}" target="_blank"><img src="{THEME}/images/social/odnoklassniki.gif" /></a>[/odnoklassniki]
							[facebook]<a href="{facebook_url}" target="_blank"><img src="{THEME}/images/social/facebook.gif" /></a>[/facebook]
							[mailru]<a href="{mailru_url}" target="_blank"><img src="{THEME}/images/social/mailru.gif" /></a>[/mailru]
							[yandex]<a href="{yandex_url}" target="_blank"><img src="{THEME}/images/social/yandex.gif" /></a>[/yandex]
							[google]<a href="{google_url}" target="_blank"><img src="{THEME}/images/social/google.gif" /></a>[/google]
						</div></li>
						<li class="lbtn"><button class="fbutton" onclick="submit();" type="submit" title="Entrer"><span>Entrer</span></button></li>
					</ul>
					<input name="login" type="hidden" id="login" value="submit" />
				</div>
			</form>
		</li>
		<li class="lvsep"><a href="{registration-link}">Inscription</a></li>
	</ul>
[/group]