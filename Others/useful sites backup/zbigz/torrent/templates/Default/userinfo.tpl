<div class="pheading">
	<h2 class="lcol">Profil de l'utilisateur: <span>{usertitle}</span></h2>
	<div class="ratebox"><div class="rate">{rate}</div><span>Note:</span></div>
	<div class="clr"></div>
</div>
<div class="basecont"><div class="dpad">
	<div class="userinfo">
		<div class="lcol">
			<div class="avatar"><img src="{foto}" alt=""/></div>
			<ul class="reset">
				<li>{email}</li>
				[not-group=5]
				<li>{pm}</li>
				[/not-group]
			</ul>
		</div>
		<div class="rcol">
			<ul>
				<li><span class="grey">Nom complet:</span> <b>{fullname}</b></li>
				<li><span class="grey">Groupe:</span> {status} [time_limit]&nbsp;time limit: {time_limit}[/time_limit]</li>
				<li><span class="grey">ICQ:</span> <b>{icq}</b></li>
			</ul>
			<ul class="ussep">
				<li><span class="grey">articles poster:</span> <b>{news-num}</b> [ {news} ][rss]<img src="{THEME}/images/rss.png" alt="rss" style="vertical-align: middle; margin-left: 5px;" />[/rss]</li>
				<li><span class="grey">Commentaires:</span> <b>{comm-num}</b> [ {comments} ]</li>
				<li><span class="grey">Date d'enregistrement:</span> <b>{registration}</b></li>
				<li><span class="grey">Dernière visite:</span> <b>{lastdate}</b></li>
				<li><span class="grey">Status:</span> [online]<img src="{THEME}/images/online.png" style="vertical-align: middle;" title="En Ligne" alt="En Ligne" />[/online][offline]<img src="{THEME}/images/offline.png" style="vertical-align: middle;" title="Hors Ligne" alt="Hors Ligne" />[/offline]</li>
			</ul>
			<ul class="ussep">
				<li><span class="grey">Location:</span> {land}</li>
				<li><span class="grey">A mon propos:</span> {info}</li>
			</ul>
			<span class="small">[not-logged] [ {edituser} ] [/not-logged]</span>
		</div>
		<div class="clr"></div>
	</div>
</div></div>
[not-logged]
<div id="options" style="display:none;">
	<br /><br />
	<div class="pheading"><h2>Edit Profile</h2></div>
	<div class="baseform">
		<table class="tableform">
			<tr>
				<td class="label">Nom complet:</td>
				<td><input type="text" name="fullname" value="{fullname}" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">E-mail valide:</td>
				<td><input type="text" name="email" value="{editmail}" class="f_input" /><br />
				<div class="checkbox">{hidemail}</div>
				<div class="checkbox"><input type="checkbox" id="subscribe" name="subscribe" value="1" /> <label for="subscribe">Se désinscrire des nouvelles souscrites</label></div></td>
			</tr>
			<tr>
				<td class="label">Location:</td>
				<td><input type="text" name="land" value="{land}" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Ma liste de bloqué:</td>
				<td>{ignore-list}</td>
			</tr>
			<tr>
				<td class="label">ICQ:</td>
				<td><input type="text" name="icq" value="{icq}" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Mot de passe actuel:</td>
				<td><input type="password" name="altpass" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Nouveau mot de passe:</td>
				<td><input type="password" name="password1" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Repété mot de passe:</td>
				<td><input type="password" name="password2" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label" valign="top">Block IP:<br />Votre IP: {ip}</td>
				<td>
				<div><textarea name="allowed_ip" style="width:98%;" rows="5" class="f_textarea">{allowed-ip}</textarea></div>
				<div>
					<span class="small" style="color:red;">
					* Attention! Soyez prudent lorsque vous modifiez ce paramètre.
					L'accés à votre compte sera disponible uniquement à  partir des adresses IP et sous-réseaux que vous avez spécifiés.
					Vous pouvez indiquer plusieurs adresses IP, une adresse sur chaque ligne.
					<br />
					Example: 192.48.25.71 or 129.42.*.*</span>
				</div>
				</td>
			</tr>
			<tr>
				<td class="label">Avatar:</td>
				<td>Télécharger depuis votre ordinateur: <input type="file" name="image" class="f_input" /><br /><br />
				Utilisez avatar de <a href="http://www.gravatar.com/" target="_blank">Gravatar</a>: <input type="text" name="gravatar" value="{gravatar}" class="f_input" /> (Entrer votre E-mail de gravatar.com)
				<br /><br /><div class="checkbox"><input type="checkbox" name="del_foto" id="del_foto" value="yes" /><label for="del_foto"> Supprimer l'avatar actuel</label></div>
				</td>
			</tr>
			
			<tr>
				<td class="label">toutes les heures:</td>
				<td>{timezones}</td>
			</tr>			
			
			<tr>
				<td class="label">Apropos de moi:</td>
				<td><textarea name="info" style="width:98%;" rows="5" class="f_textarea">{editinfo}</textarea></td>
			</tr>
			<tr>
				<td class="label">Signature:</td>
				<td><textarea name="signature" style="width:98%;" rows="5" class="f_textarea">{editsignature}</textarea></td>
			</tr>
			{xfields}
		</table>
		<div class="fieldsubmit">
			<input class="fbutton" type="submit" name="submit" value="Soumettre" />
		</div>
	</div>
</div>
[/not-logged]