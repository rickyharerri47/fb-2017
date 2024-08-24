<div class="s-block">
	<div class="title-block"><span>Forgotten Password Recovery</span></div>
	<div class="s-block-content">
		<table class="user-info-table">
			<tr>
				<td width="200" height="25">Your Username or E-Mail Online:</td>
				<td height="25"><input type="text" name="lostname" class="lost-input-text"></td>
			</tr>
			[sec_code]
			<tr>
				<td align="left">Security Code:</td>
				<td>{code}</td>
			</tr>
			<tr>
				<td align="left">Enter the code:</td>
				<td><input class="lost-input-text" maxlength="45" name="sec_code" size="14"></td>
			</tr>
			[/sec_code]
			[recaptcha]
	<tr>
		<td class="label">
			Enter the two words shown in the image: <span class="impot">*</span>
		</td>
		<td>
			<div>{recaptcha}</div>
		</td>
	</tr>
	[/recaptcha]
			<tr>
				<td></td>
				<td><input type="image" src="{THEME}/images/ok.jpg" style="border: 0;background: none;" value="Send" name="submit" alt="Send"></td>
			</tr>
		</table>
	</div>
</div>