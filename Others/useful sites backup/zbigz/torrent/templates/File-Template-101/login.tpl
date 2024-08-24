[not-group=5]
<div class="loginform">
<ul class="reset loginbox">
	<li class="lvsep"><a class="lbn" id="loginlink" href="#"><span>Mon Compte</span></a></li>
	<li class="loginbtn"><a class="lbn" href="{logout-link}"><span>Sortir</span></a></li>
</ul>
</div>
<div id="logindialog" title="{login}" style="display: none;">
	<div class="userinfo">
		<center>
		<div class="lcol">
			<div style="margin: 0" class="avatar"><a href="{profile-link}"><img src="{foto}" alt="{login}" border="0" /></a></div>
		</div>
		<div class="rcol"><br>
				[admin-link]<li><a href="{admin-link}" target="_blank"><b>Administration</b></a></li>[/admin-link]
				<li><a href="{addnews-link}"><b>ajouter</b></a></li>
				<li><a href="{pm-link}">Messagerie:({new-pm} | {all-pm})</a></li>
				<li><a href="{profile-link}">Mon Profil</a></li>
				<li><a href="{favorites-link}">Mes Favoris</a></li>
		</div>
		<div class="clr"></div>
        </center>
	</div>
</div>
[/not-group]

[group=5]
<div class="loginform">
<ul class="reset loginbox">
	<li class="loginbtn"><a class="lbn" id="loginlink" href="#"><span>Login</span></a></li>
	<li class="lvsep"><a class="lbn" href="{registration-link}"><span>Inscription</span></a></li>
</ul>
</div>
<div id="logindialog" title="Àâòîðèçàöèÿ" style="display: none;">
	<center>
	<form method="post" action="">
		<div class="logform">
				<li class="lfield"><label for="login_name">Èìÿ:</label><br /><input type="text" name="login_name" id="login_name" /></li>
				<br /><li class="lfield lfpas"><label for="login_password">Ïàðîëü (<a href="{lostpassword-link}">Çàáûëè?</a>):</label><br /><input type="password" name="login_password" id="login_password" /></li>
				<br /><li class="lbtn"><button class="fbutton" onclick="submit();" type="submit" title="Âîéòè"><span>Âîéòè</span></button></li>
			<input name="login" type="hidden" id="login" value="submit" />
		</div>
	</form>
	</center>
</div>
[/group]