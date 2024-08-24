<div id="pollbox" class="gr-box">
	<h4 class="vtitle">{question}</h4>
	<div class="vlist">
		{list}
	</div>
	<div class="vfoot">
		[voted]<span class="small">{votes} votes</span>[/voted]
		[not-voted]
			<button class="btn" type="submit" onclick="doPoll('vote'); return false;" >Votez</button>
			<button class="btn" type="submit" onclick="doPoll('results'); return false;">Résultats</button>
		[/not-voted]
	</div>
</div>