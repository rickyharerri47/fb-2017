<div class="s-block">
	<div class="title-block">
		Feedback
	</div>
	<div class="s-block-content">
		<table class="user-info-table">
		[not-logged]
			<tr>
				<td width="120">Your name:</td>
				<td><input type="text" maxlength="35" name="name" class="f_input" /></td>
			</tr>
			<tr>
				<td>E-Mail:</td>
				<td><input type="text" maxlength="35" name="email" class="f_input" /></td>
			</tr>
		[/not-logged]
			<tr>
				<td>Title:</td>
				<td><input type="text" maxlength="45" name="subject" class="f_input" /></td>
			</tr>
			<tr>
				<td>Recipient:</td>
				<td>{recipient}</td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><textarea name="message" style="width:320px; height:160px" class="f_textarea" /></textarea></td>
			</tr>
			[sec_code]
			<tr>
				<td>Security Code:</td>
				<td><br />{code}</td>
			</tr>
			<tr>
				<td>Enter the code:</td>
				<td><input type="text" maxlength="45" name="sec_code" style="width:115px" class="f_input" /></td>
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
				<td>&nbsp;</td>
				<td><input name="send_btn" type="image" src="{THEME}/images/ok.jpg" style="border: 0;" value="Send!" /></td>
			</tr>
		</table>
	</div>
</div>