<div class="s-block">
	<div class="title-block">
		<span>Edit Profile<span>
	</div>
	<div class="s-block-content">
	<table class="user-info-table">
		<tr>
			<td width="120">
				<img src="{foto}" border="0" />
			</td>
			<td>
				<br /><br />User: <small>{usertitle}</small>
				<br /><br />Status: <small>[online]<img src="{THEME}/images/online.png" title="User Online" alt="User Online" /> online[/online][offline]<img src="{THEME}/images/offline.png" title="User Offline" alt="User Offline" /> offline[/offline]</small>
				<br /><br />Full name: <small>{fullname}</small>
				<br /><br />Registration date: <small>{registration}</small>
				<br /><br />Last Seen: <small>{lastdate}</small>
				<br /><br />Group: <font color="red">{status}</font>[time_limit] in the group to: {time_limit}[/time_limit]
				<br /><br />Rating: {rate}
				<br /><br />Location: <small>{land}</small>
				<br /><br />Number ICQ: <small>{icq}</small>
				<br /><br />A little about yourself:<small>{info}</small>
				<br /><br />Publications: <small>{news-num}</small> [ {news} ]
				<br /><br />Number of comments: <small>{comm-num}</small> [ {comments} ]
				<br /><br />[ {email} ] [ {pm} ] {edituser}
				<br /><br />Ignore List: {ignore-list}


			</td>
		</tr>
	</table>
	[not-logged]
	<div id="options" style="display:none;">
	<div class="shot-title"><h1><i>Editing information</i></h1></div>
	<table class="user-info-table">
		<tr>
			<td width="120" height="25">Your E-Mail:</td>
			<td><input type="text" name="email" value="{editmail}" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{hidemail}</td>
		</tr>
		<tr>
			<td height="25">Your Name:</td>
			<td><input type="text" name="fullname" value="{fullname}" /></td>
		</tr>
		<tr>
			<td height="25"><nobr>Location:  </nobr></td>
			<td><input type="text" name="land" value="{land}" /></td>
		</tr>
		<tr>
			<td height="25">Number ICQ:</td>
			<td><input type="text" name="icq" value="{icq}" /></td>
		</tr>
		<tr>
			<td height="25">Old Password:</td>
			<td><input type="password" name="altpass" /></td>
		</tr>
		<tr>
			<td height="25">New Password:</td>
			<td><input type="password" name="password1" /></td>
		</tr>
		<tr>
			<td height="25">Repeat:</td>
			<td><input type="password" name="password2" /></td>
		</tr>
		<tr>
			<td height="25" valign="top">Blocking IP:</td>
			<td><textarea name="allowed_ip" style="width:320px; height:70px" class="f_textarea" />{allowed-ip}</textarea><br />Your current IP: <strong>{ip}</strong><br /><br /><font style="color:red;font-size:10px;">* Attention! Be careful when changing this setting. Access to your account will be available only from the IP-addresses or subnets that you specify. You can specify multiple IP addresses, one address per line.<br />Example: 192.48.25.71 or 129.42.*.*</font></td>
		</tr>
			<tr>
				<td class="label">Picture:</td>
				<td>Upload from your computer: <input type="file" name="image" class="f_input" /><br /><br />
				Service <a href="http://www.gravatar.com/" target="_blank">Gravatar</a>: <input type="text" name="gravatar" value="{gravatar}" class="f_input" /> (Enter your E-mail on this service)
				<br /><div class="checkbox"><input type="checkbox" name="del_foto" id="del_foto" value="yes" /> <label for="del_foto">Delete picture</label></div>
				</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="checkbox" name="del_foto" value="yes" />  Delete photo</td>
		</tr>
		<tr>
			<td height="25">About Me:</td>
			<td><textarea name="info" style="width:320px; height:70px" />{editinfo}</textarea></td>
		</tr>
		<tr>
			<td height="25">Signature:</td>
			<td><textarea name="signature" style="width:320px; height:70px" />{editsignature}</textarea></td>
		</tr>
	{xfields}
		<tr>
			<td colspan="2" height="25"><div style="padding-top:2px; padding-left:0px;">
			<input type="image" src="{THEME}/images/ok.jpg" name="submit" alt="Send" style="border: 0;" /><br />
			<input name="submit" type="hidden" id="submit" value="submit" />
			</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>
	</div>
	[/not-logged]
	</div>
</div>