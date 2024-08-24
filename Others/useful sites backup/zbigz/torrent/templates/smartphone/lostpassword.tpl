<article class="post static">
	<h1>récupération de mot de passe</h1>
</article>
<div class="ux-form">
	<ul class="ui-form">
		<li><input placeholder="Pseudo ou E-mail" class="f_input f_wide" type="text" name="lostname" id="lostname"></li>
		[sec_code]
		<li>
			<div class="c-captcha-box">
				<label for="sec_code">Entrer le code:</label>
				<div class="c-captcha">
					{code}
					<input title="Entrez le code indiqué sur l'image" type="text" name="sec_code" id="sec_code" class="f_input" >
				</div>
			</div>
		</li>
		[/sec_code]
		[recaptcha]
		<li>
			<div>Entrez les mots</div>
			{recaptcha}
		</li>
		[/recaptcha]
	<div class="submitline">
		<button name="submit" class="btn f_wide" type="submit">Envoyer</button>
	</div>
</div>