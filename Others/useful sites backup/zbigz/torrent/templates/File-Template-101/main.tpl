<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
{headers}
	<link rel="stylesheet" href="{THEME}/css/style.css" type="text/css" />
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="{THEME}/css/style-ie.css" type="text/css" />
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" href="{THEME}/css/style-ie8.css" type="text/css" />
	<![endif]-->
	<script type="text/javascript" src="{THEME}/js/shareTT.js"></script>
	<script type="text/javascript" src="{THEME}/js/active.js"></script>
	<script type="text/javascript" src="{THEME}/js/jquery.carouFredSel-5.6.2.js"></script>
</head>
<body>
{AJAX}
<div class="main">
	<div class="header">
		<a href="/index.php" class="logo"></a>
		[not-group=5]<div class="login">Panel</div>[/not-group]
		[group=5]<div class="login">Login</div>
		<a href="/index.php?do=register" class="registration">Register</a>[/group]

		<div class="search-block">
			<form method="post"  action='' style="margin: 0;padding: 0;">
				<input type="hidden" name="do" value="search"><input type="hidden" name="subaction" value="search" />
				<input name="story" type="text" class="form-text" id="story" value="Search" onblur="if(this.value=='') this.value='Search';" onfocus="if(this.value=='Search') this.value='';" title="Type your query and press enter" />
				<input type="image" src="{THEME}/images/search.png" value="Search!" border="0" class="form-search" alt="Search!">
			</form>
		</div>
		<div class="top-menu-block">
			<ul>
				<li>
					<a href="#" class="menu-link"><span class="mini video"></span>Movies</a>
						<div class="hidden-menu-block">
							<a href="#" class="hidden-menu-link">Anime</a>
							<a href="#" class="hidden-menu-link">TV Shows</a>
                            <a href="#" class="hidden-menu-link">New 2011</a>
                            <a href="#" class="hidden-menu-link">New 2012</a>
                            <a href="#" class="hidden-menu-link">Action</a>
                            <a href="#" class="hidden-menu-link">Westerns</a>
                            <a href="#" class="hidden-menu-link">Military</a>
                            <a href="#" class="hidden-menu-link">Detectives</a>
                            <a href="#" class="hidden-menu-link">Drama</a>
                            <a href="#" class="hidden-menu-link">History</a>
                            <a href="#" class="hidden-menu-link">Comedy</a>
                            <a href="#" class="hidden-menu-link">Criminal</a>
							<a href="#" class="hidden-menu-link">Adventure</a>
							<a href="#" class="hidden-menu-link">Melodrama</a>
							<a href="#" class="hidden-menu-link">Mystery</a>
							<a href="#" class="hidden-menu-link">Cartoon</a>
							<a href="#" class="hidden-menu-link">Family</a>
							<a href="#" class="hidden-menu-link">Thriller</a>
							<a href="#" class="hidden-menu-link">Horror</a>
							<a href="#" class="hidden-menu-link">Fiction</a>
					      <div style="clear: both;"></div>
				  </div>
				</li>
				<li>
				<a href="#" class="menu-link"><span class="mini audio"></span>Music</a>
				<div class="hidden-menu-block">
							<a class="hidden-menu-link" href="#">Vector clipart</a>
							<a class="hidden-menu-link" href="#">raster clipart</a>
							<a class="hidden-menu-link" href="#">Flash Templates</a>
							<a class="hidden-menu-link" href="#">PSD, HTML and CSS templates</a>
							<a class="hidden-menu-link" href="#">templates for Wordpress</a>
                            <a class="hidden-menu-link" href="#">Templates for Joomla</a>
                            <a class="hidden-menu-link" href="#">3D-Graphics</a>
                            <a class="hidden-menu-link" href="#">Icons (ico, png, psd)</a>
                            <a class="hidden-menu-link" href="#">Templates for Photoshop</a>
                            <a class="hidden-menu-link" href="#">Dle templates</a>
							<div style="clear: both;"></div>
						</div>
				</li>
				<li>
				<a href="#" class="menu-link"><span class="mini soft"></span>Software</a>
				    <div class="hidden-menu-block">
							<a class="hidden-menu-link" href="#">Vector clipart</a>
							<a class="hidden-menu-link" href="#">raster clipart</a>
							<a class="hidden-menu-link" href="#">Flash Templates</a>
							<a class="hidden-menu-link" href="#">PSD, HTML and CSS templates</a>
							<a class="hidden-menu-link" href="#">templates for Wordpress</a>
                            <a class="hidden-menu-link" href="#">Templates for Joomla</a>
                            <a class="hidden-menu-link" href="#">3D-Graphics</a>
                            <a class="hidden-menu-link" href="#">Icons (ico, png, psd)</a>
                            <a class="hidden-menu-link" href="#">Templates for Photoshop</a>
                            <a class="hidden-menu-link" href="#">Dle templates</a>
							<div style="clear: both;"></div>
						</div>
				</li>
				<li>
				<a href="#" class="menu-link"><span class="mini games"></span>Games</a>
				    <div class="hidden-menu-block" style="left: -430px;">
							<a class="hidden-menu-link" href="#">Vector clipart</a>
							<a class="hidden-menu-link" href="#">raster clipart</a>
							<a class="hidden-menu-link" href="#">Flash Templates</a>
							<a class="hidden-menu-link" href="#">PSD, HTML and CSS templates</a>
							<a class="hidden-menu-link" href="#">templates for Wordpress</a>
                            <a class="hidden-menu-link" href="#">Templates for Joomla</a>
                            <a class="hidden-menu-link" href="#">3D-Graphics</a>
                            <a class="hidden-menu-link" href="#">Icons (ico, png, psd)</a>
                            <a class="hidden-menu-link" href="#">Templates for Photoshop</a>
                            <a class="hidden-menu-link" href="#">Dle templates</a>
							<div style="clear: both;"></div>
						</div>
				</li>
				<li>
				<a href="#" class="menu-link"><span class="mini text"></span>Lyrics</a>
				  <div class="hidden-menu-block" style="left: -430px;">
							<a class="hidden-menu-link" href="#">Vector clipart</a>
							<a class="hidden-menu-link" href="#">raster clipart</a>
							<a class="hidden-menu-link" href="#">Flash Templates</a>
							<a class="hidden-menu-link" href="#">PSD, HTML and CSS templates</a>
							<a class="hidden-menu-link" href="#">templates for Wordpress</a>
                            <a class="hidden-menu-link" href="#">Templates for Joomla</a>
                            <a class="hidden-menu-link" href="#">3D-Graphics</a>
                            <a class="hidden-menu-link" href="#">Icons (ico, png, psd)</a>
                            <a class="hidden-menu-link" href="#">Templates for Photoshop</a>
                            <a class="hidden-menu-link" href="#">Dle templates</a>
							<div style="clear: both;"></div>
						</div>
				</li>
				<li>
					<a href="#" class="menu-link"><span class="mini oboi"></span>Wallpaper</a>
						<div class="hidden-menu-block" style="left: -430px;">
							<a class="hidden-menu-link" href="#">Vector clipart</a>
							<a class="hidden-menu-link" href="#">raster clipart</a>
							<a class="hidden-menu-link" href="#">Flash Templates</a>
							<a class="hidden-menu-link" href="#">PSD, HTML and CSS templates</a>
							<a class="hidden-menu-link" href="#">templates for Wordpress</a>
                            <a class="hidden-menu-link" href="#">Templates for Joomla</a>
                            <a class="hidden-menu-link" href="#">3D-Graphics</a>
                            <a class="hidden-menu-link" href="#">Icons (ico, png, psd)</a>
                            <a class="hidden-menu-link" href="#">Templates for Photoshop</a>
                            <a class="hidden-menu-link" href="#">Dle templates</a>
							<div style="clear: both;"></div>
						</div>
				</li>
			</ul>
		</div>

	</div>
	<div style="clear: both;"></div>

	<div class="main-content">

			<div class="left-col">
				<div class="left-col-item-vn">
				      {info}
				[not-aviable=main]<div class="speedbar">{speedbar}</div>{content}[/not-aviable]
				</div>
                [aviable=main]
				<div class="left-col-item">
					<!---Slaider--->
						<div class="slaider-block">
							{custom category="1" template="slider-block" aviable="main" from="0" order="date" limit="4" cache="no"}
						</div>
						<div style="clear: both;"></div>
					<!---End-Slaider--->

				</div>

				<div class="left-col-item1">
					<div class="left-col-item1-title">Games<a href="#">See all games</a></div>
					<div class="left-col-item1-content">
						<div class="image_carousel">
							<div id="foo1">
								{custom category="1" template="slaider1-news" aviable="main" from="0" limit="10" cache="no"}
							</div>
							<div class="clearfix"></div>
							<a class="prev" id="foo1_prev" href="#"><span></span></a>
							<a class="next" id="foo1_next" href="#"><span></span></a>
						</div>
					</div>
				</div>
				<div class="left-col-item5">
					<div class="left-col-item1-title">Program (SOFT)<a href="#">See all programs</a></div>
					<div class="left-col-item5-content">
						<div class="image_carousel">
							<div id="foo5">
								{custom category="1" template="slaider1-news" aviable="main" from="0" limit="10" cache="no"}
							</div>
							<div class="clearfix"></div>
							<a class="prev" id="foo5_prev" href="#"><span></span></a>
							<a class="next" id="foo5_next" href="#"><span></span></a>
						</div>
					</div>
				</div>

				<div class="left-col-item2">
					<div class="left-col-item2-title">Movies<a href="#">See all movies</a></div>
					<div class="left-col-item2-content">
						<div class="image_carousel">
							<div id="foo2">
								{custom category="1" template="slaider2-news" aviable="main" from="0" limit="10" cache="no"}
							</div>
							<div class="clearfix"></div>
							<a class="prev" id="foo2_prev" href="#"><span></span></a>
							<a class="next" id="foo2_next" href="#"><span></span></a>
						</div>
					</div>
				</div>

				<div class="left-col-item3">
					<div class="left-col-item3-title">Music<a href="#">See all music</a></div>
					<div class="left-col-item3-content">
						<div class="image_carousel">
							<div id="foo3">
								{custom category="1" template="slaider1-news" aviable="main" from="0" limit="10" cache="no"}
							</div>
							<div style="clear:both;"></div>
							<div class="clearfix"></div>
							<a class="prev" id="foo3_prev" href="#"><span></span></a>
							<a class="next" id="foo3_next" href="#"><span></span></a>
						</div>
					</div>
					<div class="line-left-col-item3"></div>
				</div>
				<div class="left-col-item4">
					<div class="left-col-item3-title">TV Shows<a href="#">See all series</a></div>
					<div class="left-col-item3-content">
						<div class="image_carousel1">
							<div id="foo4">
								{custom category="1" template="slaider1-news" aviable="main" from="0" limit="10" cache="no"}
							</div>
							<div style="clear:both;"></div>
							<div class="clearfix"></div>
							<a class="prev" id="foo4_prev" href="#"><span></span></a>
							<a class="next" id="foo4_next" href="#"><span></span></a>
						</div>
					</div>
				</div>
	           [/aviable]
				<div style="clear: both;"></div>
			</div>
			<div class="right-col">
				<div class="block-menu">
					<div class="block-menu-top">
						<div class="block-menu-bottom">
							<div class="block-menu-line">
								<div class="block-menu-left">
									<div class="block-menu-left-title">Genres</div>
									<div class="block-menu-left-content">
										<a href="#">Anime</a>
										<a href="#">Biography</a>
										<a href="#">Action</a>
										<a href="#">Clips</a>
										<a href="#">Military</a>
										<a href="#">Detective</a>
										<a href="#">Children</a>
										<a href="#">Documentary</a>
										<a href="#">Drama</a>
										<a href="#">History</a>
										<a href="#">Comedy</a>
										<a href="#">Short film</a>
										<a href="#">Crime</a>
										<a href="#">Melodramma</a>
									</div>

								</div>
								<div class="block-menu-right">
									<div class="block-menu-left-title">Categories</div>
									<div class="block-menu-left-content">
										<a href="#">Program</a>
										<a href="#">Books</a>
										<a href="#">Magazines</a>
										<a href="#">Music</a>
										<a href="#">TV Shows</a>
										<a href="#">Games</a>
										<a href="#">Online-Videos</a>
										<a href="#">Design</a>
										<a href="#">Humor</a>
										<a href="#">Tips</a>
										<a href="#">News</a>
										<a href="#">Pharmacy</a>
										<a href="#" style="color: #008aff;">Dating</a>
										<a href="/sitemap.xml" style="color: #008aff;">Site Map</a>
									</div>
								</div>
								<div style="clear:both;"></div>
							</div>
						</div>
					</div>
				</div>


				<div class="banner">
	                 <p align="center"><a target="_blank" href="#">
<img border="0" src="{THEME}/images/banner.jpg" width="310" height="247"></a></p>
	            </div>

              <div class="right-block-item">
					<div class="right-block-item-top">
						<div class="right-block-item-bottom">
							<div class="right-block-item-title">News<a href="#" class="view-all">>><span>See all</span></a>
							<div style="clear:both;"></div>
							</div>
							<div class="right-block-item-content">
								{custom category="1" template="right-news" aviable="global" order="reads" from="0" limit="3" cache="no"}
								<div style="clear: both;"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="right-block-item2">
					<div class="right-block-item2-top">
						<div class="right-block-item2-bottom">
							<div class="right-block-item2-title">Over the past 24 hours</div>
							<div class="right-block-item2-content">
								{custom category="1" template="last-link" aviable="global" from="0" limit="3" cache="no"}
								<a href="#" class="views-all-film">>><span>See all</span></a>
								<div style="clear: both;"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="calendar-block">
					<div class="calendar-title">Calendar</div>
					<div class="calendar-content">{calendar}</div>
				</div>

			</div>
			<div style="clear:both;"></div>
	</div>
</div>

<div class="footer">
	<div class="main">
		<div style="position: relative;">
			<div class="copir"> <noindex><nofollow><a href="http://dle-guides.blogspot.com/" target="_blank">templates dle</a></noindex></nofollow>  &copy; 2013.   When using material reference is obligatory Development </div>
			<div class="footer-menu">
				<a href="#">Video</a>
				<a href="#">Audio</a>
				<a href="#">Software</a>
				<a href="#">Games</a>
				<a href="#">Lyrics</a>
				<a href="#">Wallpapers</a>
			</div>
		</div>
	</div>
</div>

<div class="login-block-hidden-dark"></div>
{login}
<!--[if IE 6]>
<a href="http://www.microsoft.com/rus/windows/internet-explorer/worldwide-sites.aspx" class="alert"></a>
<![endif]-->
</body>
</html>