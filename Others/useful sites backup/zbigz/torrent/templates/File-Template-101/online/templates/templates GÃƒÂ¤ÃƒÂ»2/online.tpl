<div class="ionline">
<div id="ionline_vis"></div>
<div class="online_user">
Now Online: <b>{all}</b>&nbsp;<a href="javascript://" onClick="$('#online_user').slideToggle('slow');"><b>(See)</b></a><br />
Users:  <b>{users_count}</b>  Guests: <b>{guests_count}</b> Robots: <b>{robots_count}</b></div>
<div id="online_user" style="display: none;">
<br />
<div class="online_user">
<u>Users:</u><br /><b>{users}</b></div>
<br />
<div class="online_user">
<u>Guests:</u><br /><b>{guests}</b></div>
<br />	
<div class="online_user">
<u>Robots:</u><br /><b>{robots}</b></div>
<br />
<div class="online_user">
<a href="javascript://" onClick="$('#online_users').slideToggle('slow');"><b>The last 20 visitors ...</b></a>
<div id="online_users" style="display:none;"><br /><b>{twenty_users}</b></div></div></div></div>