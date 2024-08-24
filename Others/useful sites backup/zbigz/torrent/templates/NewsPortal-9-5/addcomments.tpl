<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_52.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_53.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_56.png" alt="" /></td>
</tr>
<tr>
	<td style="background: url('{THEME}/images/pic_82.png') repeat-y;"></td>
	<td class="newsText">
		<b>{title}</b><br/><br/>

		[not-logged]
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td width="70">Ваше Имя:</td>
			<td><input type="text" name="name" id="name" class="f_input" /></td>
		</tr>	
		<tr>
			<td height="10" colspan="2"></td>
		</tr>
		<tr>
			<td>Ваш E-Mail:</td>
			<td><input type="text" name="mail" id="mail" class="f_input" /></td>
		</tr>
		<tr>
			<td height="10" colspan="2"></td>
		</tr>
		</table>
		[/not-logged]

		<textarea name="comments" id="comments" rows="" cols="" class="f_textarea" onclick="setNewField(this.name, document.getElementById( 'dle-comments-form' ))">{text}</textarea>

		[sec_code]
            Код: {sec_code}<br/><br/>
			Введите код:<input type="text" name="sec_code" id="sec_code" style="width:115px" class="f_input" /><br/><br/>
		[/sec_code]

		<input onclick="doAddComments();return false;" name="submit" type="button" value="Отправить" />
	</td>
	<td style="background: url('{THEME}/images/pic_59.png') repeat-y;"></td>
</tr>
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_84.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_85.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_86.png" alt="" /></td>
</tr>
</table>