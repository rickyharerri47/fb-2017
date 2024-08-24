<script type="text/javascript">
	$(function(){
		$('.hidden-comment h3').click(function(){
			$(this).next('div').slideToggle();
		});
	});
</script>
<div class="full-news">
	<h1><span id="news-title">{title}</span></h1>

	<div class="full-news-content">
		{full-story}
		<div style="clear: both;"></div>
	</div>
	<div style="clear: both;height: 20px;"></div>

	<div class="ttfav"></div>
	<div style="clear: both;"></div>

	<div class="scrinshot-block">
		<div class="scrinshot-block-title">
		Screenshots
		</div>
		<div class="scrinshot-block-content">
			[xfvalue_scrinlist]
			<div style="clear: both;"></div>
		</div>
	</div>

	<div class="link-download">
		<div style="padding: 0 0 10px 0;color: #ffbb29;font-weight: bold;">Download:</div>
		[xfvalue_download]
	</div>

	<div style="clear: both;"></div>

	<div class="info-full-news">
		<span>Author:</span>{author}  <span>Published:</span>{date=d-m-Y} - {date=H:i}  <span>Views:</span>{views}  <span>Comments:</span>{comments-num}
	</div>

	[related-news]
	<div class="rel-news">
		<div class="rel-news-title">
			Related News:
		</div>
		<div style="clear: both;"></div>
		{related-news}
		<div style="clear: both;"></div>
	</div>
	<div style="clear: both;"></div>
	[/related-news]
	<div style="clear: both;"></div>
	<div class="rel-news-title">
	[not-comments]Comments yet. You can be the first![/not-comments]
	[comments]Comments ({comments-num})[/comments]
	</div>
{comments}
{navigation}
	<div class="hidden-comment">
		<h3>Add a comment!</h3>
		<div class="hidden-comment-form" style="display: none;">
			{addcomments}
		</div>
	</div>
	<div style="clear: both;height: 20px;"></div>
</div>