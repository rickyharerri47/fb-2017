<div class="pheading"><h2>Récupération du mot de passe</h2></div>
<div class="baseform">
	<table class="tableform">
		<tr>
			<td class="label">
				Votre speudo ou adresse email:
			</td>
			<td><input class="f_input" type="text" name="lostname" /></td>
		</tr>
		[sec_code]<tr>
			<td class="label">
				Code de sécurité<span class="impot">*</span>
			</td>
			<td>
				<div>{code}</div>
				<div><input class="f_input" style="width:115px" maxlength="45" name="sec_code" size="14" /></div>
			</td>
		</tr>[/sec_code]
		[recaptcha]<tr>
			<td colspan="2" align="center">
				<div>{recaptcha}</div>
			</td>
		</tr>[/recaptcha]
	</table>
	<div class="fieldsubmit">
		<button name="submit" class="fbutton" type="submit"><span>Soumettret</span></button>
	</div>
</div>