<link rel="stylesheet" type="text/css" href="{THEME}/js/chosen/chosen.css"/>
<script type="text/javascript" src="{THEME}/js/chosen/chosen.js"></script>
<script type="text/javascript">
$(function(){
	$('#category').chosen({allow_single_deselect:true, no_results_text: 'No category found'});
});
</script>
<div class="pheading"><h2>Ajouter - Soumettre Nouvelles</h2></div>
<div class="baseform">	
	<table class="tableform">
		<tr>
			<td class="label">
				Title:<span class="impot">*</span>
			</td>
			<td><input type="text" id="title" name="title" value="{title}" maxlength="150" class="f_input" />&nbsp;<input class="bbcodes" style="height: 22px; font-size: 11px;" title="Vérifiez la disponibilité" onclick="find_relates(); return false;" type="button" value="Trouvez similaire" /><span id="related_news"></span></td>
		</tr>
	[urltag]
		<tr>
			<td class="label">SEO URL:</td>
			<td><input type="text" name="alt_name" value="{alt-name}" maxlength="150" class="f_input" /></td>
		</tr>
	[/urltag]
		<tr>
			<td class="label">
				Categorie:<span class="impot">*</span>
			</td>
			<td>{category}</td>
		</tr>
		<tr>
			<td class="label">&nbsp;</td>
			<td><a href="#" onclick="$('.addvote').toggle();return false;">Ajouter un sondageс</a></td>
		</tr>
		<tr  class="addvote" style="display:none;" >
			<td class="label">Titre du sondage:</td>
			<td><input type="text" name="vote_title" value="{votetitle}" maxlength="150" class="f_input" /></td>
		</tr>
		<tr  class="addvote" style="display:none;" >
			<td class="label">Question:</td>
			<td><input type="text" name="frage" value="{frage}" maxlength="150" class="f_input" /></td>
		</tr>
		<tr  class="addvote" style="display:none;" >
			<td class="label">Les réponses possibles:<br /><br />Une réponse par ligne</td>
			<td><textarea name="vote_body" rows="10" class="f_textarea" >{votebody}</textarea><br /><input type="checkbox" name="allow_m_vote" value="1" {allowmvote}> Autoriser les sélections multiples</td>
		</tr>
		<tr>
			<td colspan="2">
				<b>Courte Description: <span class="impot">*</span></b> (Requis)
				[not-wysywyg]
				<div class="bb-editor">
					{bbcode}
					<textarea name="short_story" id="short_story" onfocus="setFieldName(this.name)" rows="15" class="f_textarea" >{short-story}</textarea>
				</div>
				[/not-wysywyg]
				{shortarea}
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<b>Description complète:</b> (Option)
				[not-wysywyg]
				<div class="bb-editor">
					{bbcode}
					<textarea name="full_story" id="full_story" onfocus="setFieldName(this.name)" rows="20" class="f_textarea" >{full-story}</textarea>
				</div>
				[/not-wysywyg]
				{fullarea}
			</td>
		</tr>
		{xfields}
		<tr>
			<td class="label">Mots clés, Tags:</td>
			<td><input type="text" name="tags" id="tags" value="{tags}" maxlength="150"  class="f_input" autocomplete="off" /></td>
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
				Security Code<span class="impot">*</span>
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
		<tr>
			<td colspan="2">{admintag}</td>
		</tr>
	</table>
	<div class="fieldsubmit">
		<button name="add" class="fbutton" type="submit"><span>Soumettre</span></button>
		<button name="nview" onclick="preview()" class="fbutton" type="submit"><span>Prévisualisé</span></button>
	</div>
</div>