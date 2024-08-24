<div id="addcform" class="baseform" style="display:[not-aviable=comments]none[/not-aviable][aviable=comments]block[/aviable];">
		<table class="tableform">
			[not-logged]
			<tr>
				<td class="label">
					Nom:<span class="impot">*</span>
				</td>
				<td><input type="text" name="name" id="name" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">
					E-Mail:
				</td>
				<td><input type="text" name="mail" id="mail" class="f_input" /></td>
			</tr>
			[/not-logged]
			<tr>
				<td class="label">
					Commentaires:
				</td>
				<td class="editorcomm">{editor}</td>
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
					<div><input type="text" name="question_answer" id="question_answer" class="f_input" /></div>
				</td>
			</tr>
			[/question]
			[sec_code]
			<tr>
				<td class="label">
				 Question: <span class="impot">*</span>
				</td>
				<td>
					<div>{sec_code}</div>
					<div><input type="text" name="sec_code" id="sec_code" style="width:115px" class="f_input" /></div>
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
		</table>
		<div class="fieldsubmit">
			<button type="submit" name="submit" class="fbutton"><span>[not-aviable=comments]Soumettre[/not-aviable][aviable=comments]Edit[/aviable]</span></button>
		</div>
</div>