<div class="s-block">
	<div class="title-block">
		Personal Message
	</div>
	<div class="s-block-content">
		<div class="imp" style="padding: 0;margin: 0;">
		<div class="dpad">
			<div class="pm_status">
				<div class="pm_status_head">Condition folders</div>
				<div class="pm_status_content"> Folders filled with personal messages to:
					{pm-progress-bar}
					{proc-pm-limit}% of the limit ({pm-limit} posts)
				</div>
			</div>
		</div>
		<div style="clear: both;height: 10px;"></div>

		<div class="pm-block-menu">[inbox]Inbox[/inbox] | [outbox]Posted messages[/outbox] | [new_pm]Send message[/new_pm]</div>
		[pmlist]
		<div class="pm-content">
		<strong>Message List:</strong><br /><br /><br />
		{pmlist}</div>
		[/pmlist]
		[newpm]
		<div class="pm-tititittile">Sending a message</div>
		<div class="new-PM"><span>Recipient:</span><input type="text" class="add-n-form" name="name" value="{author}" /></div>
		<div class="new-PM"><span>Subject:</span><input type="text" class="add-n-form" name="subj" value="{subj}" /></div>

		<div class="pm-content">{editor}

		<br /><input type="checkbox" name="outboxcopy" class="poiskk" value="1" /> Save the message in the "Sent"</div>
		[sec_code]
		<div>Code:{sec_code}</div>
		<div>Enter the code:<input type="text" name="sec_code" id="sec_code" style="width:115px" class="f_input" /></td></div>
		[/sec_code]
		[recaptcha]
			Enter the two words shown in the image: <span class="impot">*</span>
			<div>{recaptcha}</div>
		[/recaptcha]
		<input type="image" src="{THEME}/images/ok.jpg" name="add" value="submit" style="margin: 0 10px 0 50px; border: 0; float: left;background: none;" />&nbsp;&nbsp;<input type="button" style="background: url({THEME}/images/view-buttom.png); width: 202px; height: 27px; padding: 0; margin: 0;border: 0;float: left; cursor: pointer;"  onclick="dlePMPreview()" value="" />
		<div style="clear: both;height: 1px;"></div>
		   [/newpm]
		[readpm]
		<div class="a-mess">Author: <strong>{author}</strong> | Status: [online]<img src="{THEME}/images/online.png" style="vertical-align: middle;" title="User Online" alt="User Online" />[/online][offline]<img src="{THEME}/images/offline.png" style="vertical-align: middle;" title="User is Offline" alt="User is Offline" />[/offline] | [declination={comm-num}]Comments|d|i|s[/declination] | [declination={news-num}]Publication|i|and|y[/declination]

 | [reply]answer[/reply] | [del]delete[/del] | [complaint]complaint[/complaint] | [ignore]ignore[/ignore]</div>
		<div class="theme-mess">Subject - {subj}</div>
		<div style="padding: 10px;">{text}</div>
		[/readpm]
		</div>
	</div>
