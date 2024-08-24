<div class="wrap">  
	<h2> <img src="<? echo plugins_url('controlpanel/');?>/icon2.png" style="float:left;padding-top:0px;padding-right:5px;"> ControlPanel <small>v3.0</small></h2>
	<h3><img src="<? echo plugins_url('controlpanel/');?>/icon4.png" style="float:left;padding-top:0px;padding-right:5px;"> Main Settings</h3>

	<?php
	if (isset($_POST['submit']) || isset($_POST['submit2'])) {  
	
		
		update_option("amazon_accesskey", $_POST['accesskey']);
		update_option("amazon_secretkey", $_POST['secretkey']);
		update_option("amazon_associate", $_POST['associate']);
		update_option("amazon_locale", $_POST['locale']);
		update_option("amazon_category", $_POST['category']);
		update_option("amazon_type", $_POST['type']);
		update_option("amazon_brand", $_POST['brand']);
		update_option("amazon_platform", $_POST['platform']);
		
		if (isset($_POST['show_slideshow'])) {update_option("show_slideshow", 1);} else {update_option("show_slideshow", 0);}
		if (isset($_POST['show_toppicks'])) {update_option("show_toppicks", 1);} else {update_option("show_toppicks", 0);}
		if (isset($_POST['show_categories'])) {update_option("show_categories", 1);} else {update_option("show_categories", 0);}
		if (isset($_POST['show_brands'])) {update_option("show_brands", 1);} else {update_option("show_brands", 0);}
		if (isset($_POST['show_platforms'])) {update_option("show_platforms", 1);} else {update_option("show_platforms", 0);}
		if (isset($_POST['show_news'])) {update_option("show_news", 1);} else {update_option("show_news", 0);}
		if (isset($_POST['show_prices'])) {update_option("show_prices", 1);} else {update_option("show_prices", 0);}
		if (isset($_POST['show_similar'])) {update_option("show_similar", 1);} else {update_option("show_similar", 0);}
		if (isset($_POST['show_comments'])) {update_option("show_comments", 1);} else {update_option("show_comments", 0);}
		
		
		if (isset($_POST['submit2']) ) {

		include("../cronjob/fetch.php");
		
		}
	?>	
	
	<SCRIPT language="JavaScript"> 
	function getgoing()
	{
		window.location = "<? $clearcache = str_replace('&amp;','&',wp_nonce_url(admin_url('admin.php?page=w3tc_general&amp;w3tc_flush_all'), 'w3tc')); echo $clearcache; ?>"
	}
	
	setTimeout('getgoing()',500);
	</SCRIPT> 
	
	<?php
	}
	?>
	
<form method="post" name="settings" action="?page=controlpanel/controlpanel_main.php&do=update">
Please enter the information below in order to <i>setup and monetize</i> your website. <a href="?page=controlpanel/controlpanel_instructions.php"><i>Not sure where to start?</i></a><br><br>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Your Amazon Access Key ID</th>
        <td><input type="text" name="accesskey" size="50" value="<?php echo get_option('amazon_accesskey'); ?>" /> ( As per the <i>Access Credentials</i> of your Amazon Developer account. )</td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Your Amazon Secret Access Key</th>
        <td><input type="text" name="secretkey" size="50" value="<?php echo get_option('amazon_secretkey'); ?>" /> ( As per the <i>Access Credentials</i> of your Amazon Developer account. )</td>
        </tr>
		<tr valign="top">
        <th scope="row">Your Amazon Associate ID</th>
        <td><input type="text" name="associate" size="50" value="<?php echo get_option('amazon_associate'); ?>" /> ( That's your <i>Tracking ID</i>, usually in the  following format "username-20" )</td>
        </tr>
        <tr><td></td></tr>
        <tr valign="top">
        <th scope="row">Amazon Locale<br>( <font size=2px><b>9</b></font> locations available ) </th>
		<?
		$locale = get_option('amazon_locale');
		switch ($locale) {
		case "amazon.com": $locale="United States"; 	break;
		case "amazon.ca": $locale="Canada"; break;
		case "amazon.co.uk": $locale="United Kingdom"; break;
		case "amazon.es": $locale="Spain"; break;
		case "amazon.co.jp": $locale="Japan"; break;
		case "amazon.it": $locale="Italy"; break;
		case "amazon.fr": $locale="France"; break;
		case "amazon.de": $locale="Germany"; break;
		case "amazon.cn": $locale="China"; break;

		default: $locale = "United States";
		break;
		}
		?>
        <td>
			<select name="locale" style="width:210px;">
			<option value="<?php echo get_option('amazon_locale'); ?>" selected="selected"><?php echo ucfirst(get_option('amazon_locale')); ?> (<? echo $locale; ?>)</option>
			<option disabled>--------------------------------------</option>
			<? if($locale != "United States") { ?><option value="amazon.com" >Amazon.com (United States)</option><? } ?>
			<? if($locale != "United Kingdom") { ?><option value="amazon.co.uk" >Amazon.co.uk (United Kingdom)</option><? } ?>
			<? if($locale != "Canada") { ?><option value="amazon.ca" >Amazon.ca (Canada)</option><? } ?>
			<? if($locale != "Germany") { ?><option value="amazon.de" >Amazon.de (Germany)</option><? } ?>
			<? if($locale != "Spain") { ?><option value="amazon.es" >Amazon.es (Spain)</option><? } ?>
			<? if($locale != "Italy") { ?><option value="amazon.it" >Amazon.it (Italy)</option><? } ?>
			<? if($locale != "France") { ?><option value="amazon.fr" >Amazon.fr (France)</option><? } ?>
			<? if($locale != "Japan") { ?><option value="amazon.co.jp" >Amazon.co.jp (Japan)</option><? } ?>
			<? if($locale != "China") { ?><option value="amazon.cn" >Amazon.cn (China)</option><? } ?>
			</select>
		</td>
        </tr>
		<?
		$category = get_option('amazon_category');
		?>
		<tr valign="top">
        <th scope="row">Category Targeting<br>( <font size=2px><b>25+</b></font> categories available ) </th>
		 <td>
			<select name="category" style="width:210px;">
			<option value="<?=$category?>" selected="selected"><?=$category?></option>
			<option disabled>--------------------------------------</option>
			<? if($category != "All Categories") { ?><option value="All Categories" style="font-weight: bold">All Categories</option><? } ?>
			<? if($category != "Action & Adventure") { ?><option value="Action & Adventure" >Action & Adventure</option><? } ?>
			<? if($category != "Anime") { ?><option value="Anime" >Anime</option><? } ?>
			<? if($category != "Comedy") { ?><option value="Comedy" >Comedy</option><? } ?>
			<? if($category != "Documentary") { ?><option value="Documentary" >Documentary</option><? } ?>
			<? if($category != "Drama") { ?><option value="Drama" >Drama</option><? } ?>
			<? if($category != "Exercise & Fitness") { ?><option value="Exercise & Fitness" >Exercise & Fitness</option><? } ?>
			<? if($category != "Faith & Spirituality") { ?><option value="Faith & Spirituality" >Faith & Spirituality</option><? } ?>
			<? if($category != "Fantasy") { ?><option value="Fantasy" >Fantasy</option><? } ?>
			<? if($category != "Foreign Films") { ?><option value="Foreign Films" >Foreign Films</option><? } ?>
			<? if($category != "Gay & Lesbian") { ?><option value="Gay & Lesbian" >Gay & Lesbian</option><? } ?>
			<? if($category != "Horror") { ?><option value="Horror" >Horror</option><? } ?>
			<? if($category != "Kids & Family") { ?><option value="Kids & Family" >Kids & Family</option><? } ?>
			<? if($category != "Military & War") { ?><option value="Military & War" >Military & War</option><? } ?>
			<? if($category != "Music Videos & Concerts") { ?><option value="Music Videos & Concerts" >Music Videos & Concerts</option><? } ?>
			<? if($category != "Musicals") { ?><option value="Musicals" >Musicals</option><? } ?>
			<? if($category != "Mystery & Thrillers") { ?><option value="Mystery & Thrillers" >Mystery & Thrillers</option><? } ?>
			<? if($category != "Performing Arts") { ?><option value="Performing Arts" >Performing Arts</option><? } ?>
			<? if($category != "Reality TV") { ?><option value="Reality TV" >Reality TV</option><? } ?>
			<? if($category != "Romance") { ?><option value="Romance" >Romance</option><? } ?>
			<? if($category != "Science Fiction") { ?><option value="Science Fiction" >Science Fiction</option><? } ?>
			<? if($category != "Soap Operas") { ?><option value="Soap Operas" >Soap Operas</option><? } ?>
			<? if($category != "Special Interests") { ?><option value="Special Interests" >Special Interests</option><? } ?>
			<? if($category != "Sports") { ?><option value="Sports" >Sports</option><? } ?>
			<? if($category != "TV Game Shows") { ?><option value="TV Game Shows" >TV Game Shows</option><? } ?>
			<? if($category != "TV News Programming") { ?><option value="TV News Programming" >TV News Programming</option><? } ?>
			<? if($category != "TV Talk Shows") { ?><option value="TV Talk Shows" >TV Talk Shows</option><? } ?>
			<? if($category != "Westerns") { ?><option value="Westerns" >Westerns</option><? } ?>
			</select>
		</td>
		</tr>
		<tr valign="top">
        <th scope="row">Product Format<br>( <font size=2px><b>3</b></font> product formats available ) </th>
		<?
		$platform = get_option('amazon_platform');
		?>
        <td>
			<select name="platform" style="width:210px;">
			<option value="<?php echo get_option('amazon_platform'); ?>" selected="selected"><? echo $platform; ?></option>
			<option disabled>--------------------------------------</option>
			<? if($platform != "All Formats") { ?><option value="All Formats" >All Formats</option><? } ?>
			<? if($platform != "DVD") { ?><option value="DVD" >DVD</option><? } ?>
			<? if($platform != "Blu-ray") { ?><option value="Blu-ray" >Blu-ray</option><? } ?>
			<? if($platform != "Instant Video") { ?><option value="Instant Video" >Instant Video</option><? } ?>
			</select>
		</td>
        </tr>
		<tr valign="top">
        <th scope="row">Product Niche<br>( <font size=2px><b>3</b></font> product niches available ) </th>
		<?
		$brand = get_option('amazon_brand');
		if ($brand  == '') {$brand = 'Movies & TV Shows';}
		?>
        <td>
			<select name="brand" style="width:210px;">
			<option value="<?php echo get_option('amazon_brand'); ?>" selected="selected"><? echo $brand; ?></option>
			<option disabled>--------------------------------------</option>
			<? if($brand != "Movies & TV Shows") { ?><option value="" >Movies & TV Shows</option><? } ?>
			<? if($brand != "Movies") { ?><option value="Movies" >Movies</option><? } ?>
			<? if($brand != "TV Shows") { ?><option value="TV Shows" >TV Shows</option><? } ?>
			</select>
		</td>
        </tr>
		<tr valign="top">
        <th scope="row">Product Type<br>( <font size=2px><b>3</b></font> product types available ) </th>
		<?
		$type = get_option('amazon_type');
		switch ($type) {
		case "": $type="All Product Types"; 	break;
		case "digital-downloads": $type="Digital Downloads"; break;
		case "physical-media": $type="Physical Media"; break;

		default: $type = "All Product Types";
		break;
		}
		?>
        <td>
			<select name="type" style="width:210px;">
			<option value="<?php echo get_option('amazon_type'); ?>" selected="selected"><? echo $type; ?></option>
			<option disabled>--------------------------------------</option>
			<? if($type != "All Product Types") { ?><option value="" >All Product Types</option><? } ?>
			<? if($type != "Digital Downloads") { ?><option value="digital-downloads" >Digital Downloads</option><? } ?>
			<? if($type != "Physical Media") { ?><option value="physical-media" >Physical Media</option><? } ?>
			</select>
		</td>
        </tr>
		<?
		if (get_option('show_slideshow') == 1) {$s1 = 'checked';}
		if (get_option('show_toppicks') == 1) {$s2 = 'checked';}
		if (get_option('show_categories') == 1) {$s3 = 'checked';}
		if (get_option('show_brands') == 1) {$s4 = 'checked';}
		if (get_option('show_prices') == 1) {$s5 = 'checked';}
		if (get_option('show_similar') == 1) {$s6 = 'checked';}
		if (get_option('show_comments') == 1) {$s7 = 'checked';}
		if (get_option('show_platforms') == 1) {$s8 = 'checked';}
		if (get_option('show_news') == 1) {$s9 = 'checked';}
		?>
		<tr><td></td></tr>
		<tr valign="top">
        <th scope="row">Show Prices </th>
		 <td>
			<input type="checkbox" name="show_prices" <?=$s5?> />
		</td>
		</tr>
		<tr valign="top">
        <th scope="row">Similar Products </th>
		 <td>
			<input type="checkbox" name="show_similar" <?=$s6?> />
		</td>
		</tr>
		<tr valign="top">
        <th scope="row">Comments </th>
		 <td>
			<input type="checkbox" name="show_comments" <?=$s7?> />
		</td>
		</tr>
		<tr><td></td></tr>
		<tr valign="top">
        <th scope="row">Homepage Slideshow</th>
		 <td>
			<input type="checkbox" name="show_slideshow" <?=$s1?> />
		</td>
		</tr>		
		<tr valign="top">
        <th scope="row">Homepage Top Picks </th>
		 <td>
			<input type="checkbox" name="show_toppicks" <?=$s2?> />
		</td>
		</tr>
		<tr valign="top">
        <th scope="row">Homepage Formats </th>
		 <td>
			<input type="checkbox" name="show_platforms" <?=$s8?> />
		</td>
		</tr>
		<tr valign="top">
        <th scope="row">Homepage Top Categories </th>
		 <td>
			<input type="checkbox" name="show_categories" <?=$s3?> />
		</td>
		</tr>
			<tr valign="top">
        <th scope="row">Homepage News </th>
		 <td>
			<input type="checkbox" name="show_news" <?=$s9?> />
		</td>
		</tr>
    </table>
    <p class="submit">
    <input type="submit" name="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /> 
    <?/*<input class="button-primary" onclick="window.location='<? echo wp_nonce_url(admin_url('admin.php?page=w3tc_general&amp;w3tc_flush_all'), 'w3tc'); ?>'" value="<?php _e('Empty All Caches') ?>" style="width:101px" />*/?>&nbsp;
    <input type="submit" name="submit2" class="button-primary1" value="<?php _e('Execute Updates*') ?>" style="width:120px" />
    </p>
	* Click on <i>Execute Updates</i> if you have made a change in <i>Amazon Locale</i>, <i>Category Targeting</i> or to <i>update</i> the content. Please allow up to a few minutes to complete.
</form>
<br><b>Don't have an Amazon Developer and/or Associate account?</b> Check the <a href="?page=controlpanel/controlpanel_instructions.php"><i>Usage Instructions</i></a> on how to create one.
<br><br><br>
 <b>Are you having issues/questions?</b> We are there to help! Please contact our customer support over email. 

</div>
