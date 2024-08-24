[votelist]
<div>{title}</div>
<div style="text-align: center;">
<form method="post" name="vote" action=''>
<div style="padding: 5px; text-align: left;">{list}</div>
<input type="hidden" name="vote_action" value="vote" />
<input type="hidden" name="vote_id" id="vote_id" value="1" />
<input type="submit" onclick="doVote('vote'); return false;" value="Vote" class="vote-buttom" />
</form>
<form method=post name="vote_result" action=''>
<input type="hidden" name="vote_action" value="results" />
<input type="hidden" name="vote_id" value="1" />
<input type="submit" onclick="doVote('results'); return false;" value="Search" class="vote-buttom" />
</form>
<br />
</div>
[/votelist]
[voteresult]
<div style="padding: 5px;">
<div>{title}</div>
<div>{list}</div>
<div>Total Votes: {votes}</div>
</div>
[/voteresult]