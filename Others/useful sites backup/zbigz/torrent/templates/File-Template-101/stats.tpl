<div class="s-block">
	<div class="s-block-title"><span>General statistics Site</span></div>
	<div class="s-block-content">
		<table class="statss" cellpadding="0" cellspacing="0">
			<tr>
				<td valign="top">
					Total number of news:{news_num}<br />
					Published Stories:{news_allow}<br />
					Of them in the main:{news_main}<br />
					Moderated:{news_moder}<br />
					Published this month:{news_month}<br />
					Published this week:{news_week}<br />
					Posted per night:{news_day}<br />
				</td>
				<td valign="top">
					Total Comments:{comm_num} (<a href="index.php?do=lastcomments">lastcomments</a>)<br />
					Added this month:{comm_month}<br />
					Added this week:{comm_week}<br />
					Added per night:{comm_day}<br />
				</td>
				<td valign="top">
					Registered users:{user_num}<br />
					Banned from them:{user_banned}<br />
					Registered in the past month:{user_month}<br />
					Registered this week:{user_week}<br />
					Registered per night:{user_day}<br />
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<span style="color: #39a5d9;">Total size of the database: {datenbank}</span>
				</td>
			</tr>
		</table><br /><br />
		<div style="padding: 10px;">
		<div class="shot-title"><h1><i>Ten of the best writers on the site:</i></h1></div>
		<table border="0" cellspacing="0" cellpadding="0" class="statss">{topusers}</table>
		</div>
	</div>
</div>