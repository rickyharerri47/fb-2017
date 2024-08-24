{poll}
<article class="post fullstory">
	<h1 class="title">[full-link]{title}[/full-link]</h1>
	<ul class="post-info">
		<li class="iauthor ico">[profile]<b>{login}</b>[/profile]</li>
		<li class="idate ico">{date}</li>
		<li title="Nombre de vues"><img src="{THEME}/dleimages/vues.png">{views}</li>
		<li title="Nombre de Commentaires"><img src="{THEME}/dleimages/comms.png">{comments-num}</li>
	</ul>
	<p class="icat ico">{link-category}</p>
	<div class="post-cont clrfix">
		{full-story}
	</div>
</article>
[related-news]
<div class="box">
	<h3>Articles Similaires</h3>
	<nav id="rel-news">
		{related-news}
	</nav>
</div>
[/related-news]
<div class="box commentbox">
	<h3>Commentaires ({comments-num})</h3>
	[comments]{comments}[/comments]
</div>