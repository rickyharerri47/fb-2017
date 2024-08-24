<div class="pheading"><h2>
	[registration]Enregistrement d'un nouveau compte[/registration]
	[validation]Mettez à jour vos informations[/validation]
</h2></div>
<div class="baseform">
	<table class="tableform">
		<tr>
			<td colspan="2">
	[registration]
			<b>Bienvenue sur notre site</b><br />
			Inscrivez-vous sur notre site vous permet d'être un membre à part entière.
			Vous serez en mesure d'ajouter des nouvelles sur le site, laissez vos commentaires, voir le texte caché, et plus.
			<br />En cas de problèmes avec l'inscription, Contactez <a href="/index.php?do=feedback">L'administrateur</a> of website.
	[/registration]
	[validation]
			<b>Complétez vos informations,</b><br />
			 Le compte a bien etait enregistrer sur notre site,
			Toutefois, les informations vous concernant sont incomplètes, svp remplir les champs supplémentaires, vous pouvez également mettre à jour ces informations dans votre profil.
	[/validation]
			</td>
		</tr>
	[registration]
		<tr>
			<td class="label">
				Nom d'utilisateur:<span class="impot">*</span>
			</td>
			<td>
				<input type="text" name="name" id='name' style="width:175px; margin-right: 6px;" class="f_input" /><input class="bbcodes" style="height: 22px; font-size: 11px;" title="Vérifié la disponibilité" onclick="CheckLogin(); return false;" type="button" value="Vérifié" />
				<div id='result-registration'></div>
			</td>
		</tr>
		<tr>
			<td class="label">
				Mot de passe:<span class="impot">*</span>
			</td>
			<td><input type="password" name="password1" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">
				Répété mot de passe:<span class="impot">*</span>
			</td>
			<td><input type="password" name="password2" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">Adresse email valide:<span class="impot">*</span></td>
			<td><input type="text" name="email" class="f_input" /></td>
		</tr>
		[question]
		<tr>
			<td class="label">
				Question:
			</td>
			<td>
				<div>{question}</div>
			</td>
		</tr>
		<tr>
			<td class="label">
				Répondre:<span class="impot">*</span>
			</td>
			<td>
				<div><input type="text" name="question_answer" class="f_input" /></div>
			</td>
		</tr>
		[/question]
		[sec_code]
		<tr>
			<td class="label">
				Code de sécurité<span class="impot">*</span>
			</td>
			<td>
				<div>{reg_code}</div>
				<div><input type="text" name="sec_code" style="width:115px" class="f_input" /></div>
			</td>
		</tr>
		[/sec_code]
		[recaptcha]
		<tr>
			<td colspan="2" align="center">
				<div>{recaptcha}</div>
			</td>
		</tr>
		[/recaptcha]
	[/registration]
	[validation]
		<tr>
			<td class="label">Nom complet:</td>
			<td><input type="text" name="fullname" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">Location:</td>
			<td><input type="text" name="land" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">ICQ:</td>
			<td><input type="text" name="icq" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">Avatar:</td>
			<td><input type="file" name="image" style="width:304px; height:18px" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">A mon propos:</td>
			<td><textarea name="info" style="width: 98%;" rows="8" class="f_textarea" /></textarea></td>
		</tr>
		{xfields}
	[/validation]
	</table>
	<div class="fieldsubmit">
		<button name="submit" class="fbutton" type="submit"><span>Continuer</span></button>
	</div>
</div>