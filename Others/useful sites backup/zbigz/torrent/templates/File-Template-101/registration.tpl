<div class="s-block">
	<div class="title-block"><span>[registration]Register a new account[/registration][validation]Updating a user profile[/validation]</span></div>
	<div class="s-block-content">
		<table class="user-info-table" style="padding: 0;margin: 0;">
		[registration]
			<tr>
				 <td colspan="2"><strong> Hello, dear visitors of our site!</strong><br /><br />Registering on our site will allow you to be a full participant in it. You can add news to the site, leave comments, view hidden text and more.<br /><br /> In case of problems with registration, contact the site administrator.<br /><br /></td>
			</tr>
		[/registration]
		[validation]
			<tr>
				<td colspan="2"><strong>Dear visitor</strong>,<br /><br />Your account has been registered on our website, but the information about you is incomplete, so please complete the additional fields in your profile.<br /><br /></td>
			</tr>
		[/validation]
		[registration]
			<tr>
				<td width="200"> Login:<br /><i>(Your name on the site, nickname)</i></td>
				<td><input type="text" name="name" id='name' style="width:165px"  /> <input style="height:18px; font-family:tahoma; font-size:11px; border:1px solid #DFDFDF; background: #FFFFFF" title="Check availability for registration login" onclick="CheckLogin(); return false;" type="button" value="Check Name" /><div id='result-registration'></div></td>
			</tr>
			<tr>
				<td width="200">Password:<br /><i>(Your complex password)</i></td>
				<td><input type="password" name="password1"  /></td>
			</tr>
			<tr>
				<td width="200">Confirm password:<br /><i>(Once more, not to forget)</i></td>
				<td><input type="password" name="password2"  /></td>
			</tr>
			<tr>
				<td width="200">Your E-Mail:<br /><i>(E-mail for communication)</i></td>
				<td><input type="text" name="email"  /></td>
			</tr>
		[question]
			<tr>
				<td colspan="2">
					<div style="padding: 5px 0 5px 0;">
					Question:
				</div>
				<div style="padding: 5px 0 5px 0;">
					{question}
				</div>

				<div style="padding: 5px 0 5px 0;">
					Answer::<span class="impot">*</span>
				</div>

				<div style="padding: 5px 0 5px 0;">
					<input type="text" name="question_answer" id="question_answer" class="f_input" />
				</div>
				</td>
			</tr>
		[/question]
		[sec_code]
			<tr>
				<td colspan="2" height="25"><strong>Confirm security code</strong></td>
			</tr>
			<tr>
				<td width="200">Security Code:</td>
				<td>{reg_code}</td>
			</tr>
			<tr>
				<td width="200"> Enter the code:<br /><i>(Prove that you are human)</i></td>
				<td><input type="text" name="sec_code" style="width:115px"  /></td>
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
		[/registration]
		[validation]
			<tr>
				<td width="120" height="25">Your Name:<br /><i>(Real Name)</i></td>
				<td><input type="text" name="fullname"  /></td>
			</tr>
			<tr>
				<td width="120" height="25">Location:<br /><i>(Where are you from?)</i></td>
				<td><input type="text" name="land"  /></td>
			</tr>
			<tr>
				<td width="120" height="25">Number ICQ:</td>
				<td><input type="text" name="icq"  /></td>
			</tr>
			<tr>
				<td width="120" height="25">Photo:<br /><i>(your photo or avatar)</i></td>
				<td><input type="file" name="image" style="width:304px; height:18px"  /></td>
			</tr>
			<tr>
				<td width="120" height="25">Statement:<br /><i>(What person are you?)</i></td>
				<td><textarea name="info" style="width:320px; height:70px" /></textarea></td>
			</tr>
		{xfields}
		[/validation]
			<tr>
				<td width="120" height="25">&nbsp;</td>
				<td><div style="padding-top:2px; padding-left:0px;">
					<input type="image" src="{THEME}/images/ok.jpg" name="submit" style="border: 0;background: none;" alt="Send" /></div>
				</td>
			</tr>
		</table>
	</div>
</div>