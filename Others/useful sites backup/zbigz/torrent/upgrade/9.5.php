<?php

if( ! defined( 'DATALIFEENGINE' ) ) {
	die( "Hacking attempt!" );
}

if( !$_SESSION['step_update'] ) {

	$tableSchema = array();

$tableSchema[] = "CREATE TABLE IF NOT EXISTS " . PREFIX . "_post_extras (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL DEFAULT '0',
  `news_read` mediumint(8) NOT NULL DEFAULT '0',
  `allow_rate` tinyint(1) NOT NULL DEFAULT '1',
  `rating` mediumint(8) NOT NULL DEFAULT '0',
  `vote_num` mediumint(8) NOT NULL DEFAULT '0',
  `votes` tinyint(1) NOT NULL DEFAULT '0',
  `view_edit` tinyint(1) NOT NULL DEFAULT '0',
  `disable_index` tinyint(1) NOT NULL DEFAULT '0',
  `related_ids` varchar(255) NOT NULL DEFAULT '',
  `access` varchar(150) NOT NULL DEFAULT '',
  `editdate` int(11) NOT NULL DEFAULT '0',
  `editor` varchar(40) NOT NULL DEFAULT '',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`eid`),
  KEY `news_id` (`news_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";
	
	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_static`  ADD `disable_index` TINYINT(1) NOT NULL DEFAULT '0'";
	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_usergroups` ADD `disable_news_captcha` SMALLINT(6) NOT NULL DEFAULT '0'";
	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_usergroups` ADD `disable_comments_captcha` SMALLINT(6) NOT NULL DEFAULT '0'";
	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_banners` ADD `fpage` TINYINT(1) NOT NULL DEFAULT '0'";
	
	foreach($tableSchema as $table) {
		$db->query ($table);
	}

	if ($db->error_count) {
	
		$error_info = "Toutes les demandes prévues: <b>".$db->query_num."</b> Échec de la demande: <b>".$db->error_count."</b>. Peut-être qu'ils ont déjà effectué plus tôt.<br /><br /><div class=\"quote\"><b>Liste des demandes ayant échoué:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$sql_info = "<div style=\"background:#F2DDDD;border:1px solid #992A2A;padding:5px;color: #992A2A;text-align: justify;\"><b>informations importantes:</b><br /><br />Dans l'étape suivante, le DLE système doit réaliser une mises à jour  difficile pour une table de nouvelles. Sur certains sites plus importants  la requête peut prendre un certain temps et peut ne pas être en mesure de ce terminer correctement. Si le script se bloque, et la requête échoue, vous devrez exécuter la requête manuellement à l'aide de SSH. Copiez la requête que vous devrez faire si elle ne fonctionne pas automatiquement:<br/><br/><b>INSERT INTO `" . PREFIX . "_post_extras` (`news_id`, `news_read`, `allow_rate`, `rating`, `vote_num`, `votes`, `view_edit`, `access`, `editdate`, `editor`, `reason`, `user_id`) SELECT `id`, `news_read`, `allow_rate`, `rating`, `vote_num`, `votes`, `view_edit`, `access`, `editdate`, `editor`, `reason`, `user_id` FROM `" . PREFIX . "_post` LEFT JOIN " . PREFIX . "_users ON (" . PREFIX . "_post.autor=" . PREFIX . "_users.name)</b><br /><br />Avant d'exécuter la requête manuellement, assurez-vous que la table `" . PREFIX . "_post_extras` est vide et ne contient aucun enregistrement.</div>";

	$_SESSION['step_update'] = 1;

	if ( $error_info ) {

		msgbox("info","Information", "<form action=\"index.php\" method=\"GET\">{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script<br /><br /><input type=\"hidden\" name=\"next\" value=\"step1\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	} else {

	    msgbox("info","Information", "<form action=\"index.php\" method=\"GET\"><br /><br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">A été accomplie avec succès <b>5 MySQL</b> requêtes.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script<br /><br /><input type=\"hidden\" name=\"next\" value=\"step1\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	}

	die();

}

if( $_SESSION['step_update'] == 1 ) {

	$row = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_post_extras" );

	if ( !$row['count'] ) {
		$db->query ("INSERT INTO `" . PREFIX . "_post_extras` (`news_id`, `news_read`, `allow_rate`, `rating`, `vote_num`, `votes`, `view_edit`, `access`, `editdate`, `editor`, `reason`, `user_id`) SELECT `id`, `news_read`, `allow_rate`, `rating`, `vote_num`, `votes`, `view_edit`, `access`, `editdate`, `editor`, `reason`, `user_id` FROM `" . PREFIX . "_post` LEFT JOIN " . PREFIX . "_users ON (" . PREFIX . "_post.autor=" . PREFIX . "_users.name)");
	}

	if ($db->error_count) {
	
		$error_info = "Toutes les demandes prévues: <b>".$db->query_num."</b> Impossible d'exécuter la requête: <b>".$db->error_count."</b>. Peut-être qu'ils ont déjà effectué plus tôt.<br /><br /><div class=\"quote\"><b>Liste des demandes ayant échoué:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$_SESSION['step_update'] = 2;

	$sql_info = "<div style=\"background:#F2DDDD;border:1px solid #992A2A;padding:5px;color: #992A2A;text-align: justify;\"><b>informations importantes:</b><br /><br />Dans l'étape suivante, le DLE système doit réaliser une mises à jour  difficile pour une table de nouvelles. Sur certains sites plus importants  la requête peut prendre un certain temps et peut ne pas être en mesure de ce terminer correctement. Si le script se bloque, et la requête échoue, vous devrez exécuter la requête manuellement à l'aide de SSH. Copiez la requête que vous devrez faire si elle ne fonctionne pas automatiquement:<br/><br/><b>ALTER TABLE `" . PREFIX . "_post` DROP `allow_rate`, DROP `rating`, DROP `vote_num`, DROP `news_read`, DROP `votes`, DROP `access`, DROP `editdate`, DROP `editor`, DROP `reason`, DROP `view_edit`, DROP `flag`</b><br /><br /></div>";

	if ( $error_info ) {

		msgbox("info","informations", "<form action=\"index.php\" method=\"GET\">{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"step2\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	} else {

	    msgbox("info","informations", "<form action=\"index.php\" method=\"GET\"><br /><br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">A été exécutée avec succès <b>1 MySQL</b> demander.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script<br /><br /><input type=\"hidden\" name=\"next\" value=\"step2\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	}

	die();
}

if( $_SESSION['step_update'] == 2 ) {

	$db->query ("ALTER TABLE `" . PREFIX . "_post` DROP `allow_rate`, DROP `rating`, DROP `vote_num`, DROP `news_read`, DROP `votes`, DROP `access`, DROP `editdate`, DROP `editor`, DROP `reason`, DROP `view_edit`, DROP `flag`");

	if ($db->error_count) {
	
		$error_info = "Toutes les demandes prévues: <b>".$db->query_num."</b> Impossible d'exécuter la requête: <b>".$db->error_count."</b>. Возможно они уже выполнены ранее.<br /><br /><div class=\"quote\"><b>Liste des demandes ayant échoué:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$_SESSION['step_update'] = 3;

	$sql_info = "<div style=\"background:#F2DDDD;border:1px solid #992A2A;padding:5px;color: #992A2A;text-align: justify;\"><b>informations importantes:</b><br /><br />Dans l'étape suivante, le DLE système doit réaliser une mises à jour  difficile pour une table de nouvelles. Sur certains sites plus importants  la requête peut prendre un certain temps et peut ne pas être en mesure de ce terminer correctement. Si le script se bloque, et la requête échoue, vous devrez exécuter la requête manuellement à l'aide de SSH. Copiez la requête que vous devrez faire si elle ne fonctionne pas automatiquement:<br/><br/><b>ALTER TABLE `" . PREFIX . "_post` ADD INDEX `fixed` (`fixed`)</b><br /><br /></div>";

	if ( $error_info ) {

		msgbox("info","Information", "<form action=\"index.php\" method=\"GET\">{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script<br /><br /><input type=\"hidden\" name=\"next\" value=\"step3\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	} else {

	    msgbox("info","Information", "<form action=\"index.php\" method=\"GET\"><br /><br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">A été exécutée avec succès <b>1 MySQL</b> запрос.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"step3\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	}

	die();
}


if( $_SESSION['step_update'] == 3 ) {

	$db->query ("ALTER TABLE `" . PREFIX . "_post` ADD INDEX `fixed` (`fixed`)");

	if ($db->error_count) {
	
		$error_info = "Toutes les demandes prévues: <b>".$db->query_num."</b> Impossible d'exécuter la requête: <b>".$db->error_count."</b>. Peut-être qu'ils ont déjà effectué plus tôt.<br /><br /><div class=\"quote\"><b>Liste des demandes ayant échoué:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$_SESSION['step_update'] = 4;

	$sql_info = "";

	if ( $error_info ) {

		msgbox("info","Information", "<form action=\"index.php\" method=\"GET\">{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"step4\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	} else {

	    msgbox("info","Information", "<form action=\"index.php\" method=\"GET\"><br /><br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">A été exécutée avec succès <b>1 MySQL</b> demander.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"step4\"><input class=\"edit\" type=\"submit\" value=\"Далее ...\"></form>");

	}

	die();
}
if( $_SESSION['step_update'] == 4 ) {
	$tableSchema = array();

	$tableSchema[] = "UPDATE " . PREFIX . "_pm SET pm_read='1' WHERE pm_read='yes'";
	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_pm` CHANGE `pm_read` `pm_read` TINYINT(1) NOT NULL DEFAULT '0', ADD `sendid` INT(10) UNSIGNED NOT NULL DEFAULT '0'";
	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_pm` ADD INDEX `pm_read` (`pm_read`)";
	
	foreach($tableSchema as $table) {
		$db->query ($table);
	}

	if ($db->error_count) {
	
		$error_info = "Toutes les demandes prévues: <b>".$db->query_num."</b> Échec de l'exécution demander: <b>".$db->error_count."</b>. Peut-être qu'ils ont déjà effectué plus tôt.<br /><br /><div class=\"quote\"><b>La liste demander non exécuté:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$_SESSION['step_update'] = 5;

	$sql_info = "";

	if ( $error_info ) {

		msgbox("info","Information", "<form action=\"index.php\" method=\"GET\">{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"step5\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	} else {

	    msgbox("info","Information", "<form action=\"index.php\" method=\"GET\"><br /><br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">S'est achevée avec succès <b>3 MySQL</b> demanderа.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"step5\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

	}

	die();

}

if( $_SESSION['step_update'] == 5 ) {

	$config['version_id'] = "9.6";
	$config['allow_comments_cache'] = "1";
	
	$handler = fopen(ENGINE_DIR.'/data/config.php', "w") or die("Désolé, mais vous ne pouvez pas écrire dans le fichier <b>.engine/data/config.php</b>.<br />Vérifiez les autorisations CHMOD!");
	fwrite($handler, "<?PHP \n\n//System Configurations\n\n\$config = array (\n\n");
	foreach($config as $name => $value)
	{
		fwrite($handler, "'{$name}' => \"{$value}\",\n\n");
	}
	fwrite($handler, ");\n\n?>");
	fclose($handler);
	
	$fdir = opendir( ENGINE_DIR . '/cache/system/' );
	while ( $file = readdir( $fdir ) ) {
		if( $file != '.' and $file != '..' and $file != '.htaccess' ) {
			@unlink( ENGINE_DIR . '/cache/system/' . $file );
			
		}
	}
	
	@unlink(ENGINE_DIR.'/data/snap.db');
	
	clear_cache();
	
	$_SESSION['step_update'] = false;
	
	msgbox("info","Information", "<form action=\"index.php\" method=\"GET\">Mise à niveau de la base de données de la version <b>9.5</b> à la version <b>9.6</b> Réussi.<br /><br />Cliquez sur Suivant pour continuer le processus de mise à niveau du script <br /><br /><input type=\"hidden\" name=\"next\" value=\"next\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");

}
?>