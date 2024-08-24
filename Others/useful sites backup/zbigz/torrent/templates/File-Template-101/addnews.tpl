<div class="s-block">
	<div class="title-block">
		<span>Publish news site</span>
	</div>
	<div class="s-block-content">
	<table class="user-info-table" width="100%" style="margin: 0;">
		<tr>
			<td width="130" nowrap="nowrap">Enter the title:</td>
			<td><input type="text" name="title" style="width: 300px;" value="{title}" class="add-n-form" maxlength="150" />&nbsp;<input class="bbcodes" style="height: 22px; font-size: 11px;" title="Ïðîâåðèòü äîñòóïíîñòü ëîãèíà äëÿ ðåãèñòðàöèè" onclick="find_relates(); return false;" type="button" value="Íàéòè ïîõîæèå" /><span id="related_news"></span>


</td>
		</tr>
		<tr>
			<td>Category:<br /><i>(site section)</i></td>
			<td>{category}</td>
		</tr>

		<tr>
			<td class="label">&nbsp;</td>
			<td><a href="#" onclick="$('.addvote').toggle();return false;">Add a Poll</a></td>
		</tr>
		<tr  class="addvote" style="display:none;" >
			<td class="label">Title poll:</td>
			<td><input type="text" name="vote_title" value="{votetitle}" maxlength="150" class="f_input" /></td>
		</tr>
		<tr  class="addvote" style="display:none;" >
			<td class="label">Question:</td>
			<td><input type="text" name="frage" value="{frage}" maxlength="150" class="f_input" /></td>
		</tr>
		<tr  class="addvote" style="display:none;" >
			<td class="label">Possible answers:<br /><br />Each new line is a new variant of the answer</td>
			<td><textarea name="vote_body" rows="10" class="f_textarea" >{votebody}</textarea><br /><input type="checkbox" name="allow_m_vote" value="1" {allowmvote}> Allow multiple selections</td>
		</tr>
	[not-wysywyg]
		<tr>
			<td colspan="2" style="padding: 0;">
			Control Panel<i>(handling content news)</i>:<br />
			<div style="margin-right: -10px;">{bbcode}</div>
			</td>
		</tr>
	[/not-wysywyg]
		<tr>
			<td colspan="2">Summary:<i>(required)</i><br />
			[not-wysywyg]<textarea name="short_story" id="short_story" onclick=setFieldName(this.name) rows="15" class="f_textarea" />{short-story}</textarea>[/not-wysywyg]{shortarea}</td>
		</tr>
		<tr>
			<td colspan="2">Full story:<br />
			[not-wysywyg]<textarea name="full_story" id="full_story" onclick=setFieldName(this.name) rows="15" class="f_textarea" />{full-story}</textarea>[/not-wysywyg]{fullarea}</td>
		</tr>
		<tr>
			<td nowrap="nowrap">Keywords<br /><i>(for search engines)</i></td>
			<td><input type="text" name="tags" value="{tags}" maxlength="150" class="add-n-form"  /></td>
		</tr>
	{xfields}
	[question]
		<tr>
			<td colspan="2">
				<div style="padding: 5px 0 5px 0;">
				question:
			</div>
			<div style="padding: 5px 0 5px 0;">
				{question}
			</div>

			<div style="padding: 5px 0 5px 0;">
				Answer:<span class="impot">*</span>
			</div>

			<div style="padding: 5px 0 5px 0;">
				<input type="text" name="question_answer" id="question_answer" class="f_input" />
			</div>
			</td>
		</tr>
	[/question]
	[sec_code]
		<tr>
			<td>Code:</td>
			<td><br />{sec_code}</td>
		</tr>
		<tr>
			<td>Enter the code:</td>
			<td><input type="text" name="sec_code" id="sec_code" style="width:115px" class="add-n-form" /></td>
		</tr>
	[/sec_code]
	[recaptcha]
	<tr>
		<td colspan="2">
			Enter the two words shown in the image: <span class="impot">*</span>
			<div>{recaptcha}</div>
		</td>
	</tr>
	[/recaptcha]
		<tr>
			<td colspan="2">{admintag}</td>
		</tr>
		<tr>
			<td colspan="2"><input type="image" src="{THEME}/images/add-buttom.jpg" style="border: 0;" name="add" value="submit" />  
			<input type="image" src="{THEME}/images/view-buttom.jpg" style="border: 0;" name="nview" onclick="preview()" value="preview" />
			</td>
		</tr>
	</table>
	</div>
</div>