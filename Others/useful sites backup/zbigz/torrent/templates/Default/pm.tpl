[pmlist]
<div class="pheading"><h2>PM Liste</h2></div>
[/pmlist]
[newpm]
<div class="pheading"><h2>Envoyer un nouveau PM</h2></div>
[/newpm]
[readpm]
<div class="pheading"><h2>Lire Message</h2></div>
[/readpm]
<div class="basecont">
<div class="dpad">
<div class="pm_status">
	<div class="pm_status_head">PM Statistique</div>
	<div class="pm_status_content">PM Statut:
{pm-progress-bar}
{proc-pm-limit}% de ({pm-limit} permis)
	</div>
</div>
<div style="padding-top:10px;">[inbox]Boîte de réception[/inbox]<br /><br />
[outbox]Sauver/ Boîte d'envoi[/outbox]<br /><br />
[new_pm]Envoyer un nouveau message[/new_pm]</div>
</div><br />
<div class="clr"></div>
<br />
[pmlist]
<div class="dpad">{pmlist}</div>
[/pmlist]
[newpm]
<div class="baseform">
	<table class="tableform">
		<tr>
			<td class="label">
				Destinataire:
			</td>
			<td><input type="text" name="name" value="{author}" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">
				Sujet:<span class="impot">*</span>
			</td>
			<td><input type="text" name="subj" value="{subj}" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">
				Message:<span class="impot">*</span>
			</td>
			<td class="editorcomm">
			{editor}<br />
			<div class="checkbox"><input type="checkbox" id="outboxcopy" name="outboxcopy" value="1" /> <label for="outboxcopy">Sauvegardé le message dans "Sauver/Boîte d'envoi"</label></div>
			</td>
		</tr>
		[sec_code]
		<tr>
			<td class="label">
				Code de sécurité:<span class="impot">*</span>
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
	</table>
	<div class="fieldsubmit">
		<button type="submit" name="add" class="fbutton"><span>Soumettre</span></button>
		<input type="button" class="fbutton" onclick="dlePMPreview()" title="Prévisualisé" value="Prévisualisé" />
	</div>	
</div>
[/newpm]
[readpm]
<div class="bcomment">
	<div class="dtop">
		<div class="lcol"><span><img src="{foto}" alt=""/></span></div>
		<div class="rcol">
			<span class="reply">[reply]<b>Répondre</b>[/reply]</span>
			<ul class="reset">
				<li><h4>{author}</h4></li>
				<li>{date}</li>
			</ul>
			<ul class="cmsep reset">
				<li>Groupe: {group-name}</li>
				<li>ICQ: {icq}</li>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
	<div class="cominfo"><div class="dpad">
		<div class="comedit">
			<ul class="reset">
				<li>[complaint]Signaler un abus[/complaint]</li>
				<li>[ignore]Bloquer l'expéditeur[/ignore]</li>
				<li>[del]Supprimer[/del]</li>
			</ul>
		</div>
		<ul class="cominfo reset">
			<li>Registration: {registration}</li>
			<li>Commentaires: {comm-num}</li>
			<li>Articles: {news-num}</li>
		</ul>
	</div>
	<span class="thide">^</span>
	</div>
	<div class="dcont">
		<h3 style="margin-bottom: 0.4em;">[reply]{subj}[/reply]</h3>
		{text}
		[signature]<br clear="all" /><div class="signature">--------------------</div><div class="slink">{signature}</div>[/signature]
		<div class="clr"></div>
	</div>
</div>
[/readpm]
</div>