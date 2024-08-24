<?php

if( ! defined( 'DATALIFEENGINE' ) ) {
	die( "Hacking attempt!" );
}

if( !$_SESSION['step_update'] ) {

	$tableSchema = array();

	$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_social_login";
	$tableSchema[] = "CREATE TABLE " . PREFIX . "_social_login (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(40) NOT NULL DEFAULT '',
  `uid` int(11) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '',
  `provider` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

	$tableSchema[] = "ALTER TABLE `" . PREFIX . "_links` ADD `rcount` TINYINT(3) NOT NULL DEFAULT '0'";

	foreach($tableSchema as $table) {
		$db->query ($table);
	}

	if ($db->error_count) {
	
		$error_info = "Demandes prévues au total: <b>".$db->query_num."</b> mpossible d exécuter la requête: <b>".$db->error_count."</b>. Peut-être qu ils ont déjà fait plus tôt.<br /><br /><div class=\"quote\"><b>Список не выполненных запросов:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$sql_info = "<div style=\"background:#F2DDDD;border:1px solid #992A2A;padding:5px;color: #992A2A;text-align: justify;\"><b>Informations importantes:</b><br /><br />Dans l étape suivante la mise à jour du système DLE doit effectuer une enquête difficile pour la table des utilisateurs. Sur certains grands sites exécuter cette requête peut prendre un certain temps et ne sera probablement pas fait avec PHP. Si le script se bloque et la demande est faite, vous devrez exécuter manuellement la requête à l aide de SSH. Copiez la demande dont vous aurez besoin pour effectuer si elle ne fonctionne pas automatiquement:<br/><br/><b>ALTER TABLE `" . PREFIX . "_users` DROP `icq`;</b><br /><br /></div>";

	$_SESSION['step_update'] = 1;

	if ( $error_info ) {

		msgbox("info","informations", "{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer la protsessa script de mise à niveau.");

	} else {

	    msgbox("info","informations", "<br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">Qui a été accompli avec succès <b>3 MySQL</b> demande.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer la protsessa script de mise à niveau.");

	}

	die();
}

if( $_SESSION['step_update'] == 1 ) {

	$db->query ("ALTER TABLE `" . PREFIX . "_users` DROP `icq`;");

	if ($db->error_count) {
	
		$error_info = "Nombre total de demandes prévues: <b>".$db->query_num."</b> Impossible d exécuter la requête: <b>".$db->error_count."</b>. Peut-être qu ils ont déjà fait plus tôt.<br /><br /><div class=\"quote\"><b>La liste est pas terminée demandes:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$_SESSION['step_update'] = 2;

	$sql_info = "<div style=\"background:#F2DDDD;border:1px solid #992A2A;padding:5px;color: #992A2A;text-align: justify;\"><b>informations importantes:</b><br /><br />Dans l étape suivante la mise à jour du système DLE doit effectuer une enquête difficile pour la table des utilisateurs. Sur certains grands sites exécuter cette requête peut prendre un certain temps et ne sera probablement pas fait avec PHP. Si le script se bloque et la demande est faite vous devrez exécuter manuellement la requête à l aide de SSH. Copiez la demande dont vous aurez besoin pour effectuer si elle ne fonctionne pas automatiquement:<br/><br/><b>ALTER TABLE `" . PREFIX . "_users` ADD `timezone` VARCHAR(100) NOT NULL DEFAULT ''</b><br /><br /></div>";

	if ( $error_info ) {

		msgbox("info","informations", "{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer la protsessa script de mise à niveau.");

	} else {

	    msgbox("info","informations", "<br /><br /><div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">A été exécuté avec succès <b>1 MySQL</b> Demande.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer la protsessa script de mise à niveau.");

	}

	die();

}

if( $_SESSION['step_update'] == 2 ) {

	$db->query ("ALTER TABLE `" . PREFIX . "_users` ADD `timezone` VARCHAR(100) NOT NULL DEFAULT ''");

	if ($db->error_count) {
	
		$error_info = "Demandes prévues au total: <b>".$db->query_num."</b> Impossible d exécuter la requête: <b>".$db->error_count."</b>. Peut-être qu ils ont déjà fait plus tôt.<br /><br /><div class=\"quote\"><b>La liste est pas terminée demandes:</b><br /><br />"; 
	
		foreach ($db->query_list as $value) {
	
			$error_info .= $value['query']."<br /><br />";
	
		}
	
		$error_info .= "</div>";
	
	} else $error_info = "";

	$_SESSION['step_update'] = 3;

	$sql_info = "";

	if ( $error_info ) {

		msgbox("info","informations", "{$error_info}<br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer la mise à niveau du script.");

	} else {

	    msgbox("info","informations", "<div style=\"border: 1px solid #475936; background: #6F8F52; color: #FFFFFF;padding:8px;text-align: justify;\">A été exécuté avec succès <b>1 MySQL</b> Demande.</div><br /><br />{$sql_info}<br /><br />Cliquez sur Suivant pour continuer la mise à niveau du script.");

	}

	die();
}

if( $_SESSION['step_update'] == 3 ) {

	$config['version_id'] = "10.3";
	$config['category_separator'] = "/";
	$config['speedbar_separator'] = "&raquo;";
	$config['adminlog_maxdays'] = "30";
	$config['allow_social'] = "0";
	$config['medium_image'] = "0";
	$config['date_adjust'] = date_default_timezone_get();

	$handler = fopen(ENGINE_DIR.'/data/config.php', "w") or die("Désolé, mais vous ne pouvez pas enregistrer les informations dans le fichier <b>.engine/data/config.php</b>.<br />Vérifiez CHMOD!");
	fwrite($handler, "<?PHP \n\n//System Configurations\n\n\$config = array (\n\n");
	foreach($config as $name => $value)
	{
		fwrite($handler, "'{$name}' => \"{$value}\",\n\n");
	}
	fwrite($handler, ");\n\n?>");
	fclose($handler);

$social_config = <<<HTML
<?PHP

//Social Configurations

\$social_config = array (

'vk' => '0',

'vkid' => '',

'vksecret' => '',

'od' => '0',

'odid' => '',

'odpublic' => '',

'odsecret' => '',

'fc' => '0',

'fcid' => '',

'fcsecret' => '',

'google' => '0',

'googleid' => '',

'googlesecret' => '',

'mailru' => '0',

'mailruid' => '',

'mailrusecret' => '',

'yandex' => '0',

'yandexid' => '',

'yandexsecret' => '',

);

?>
HTML;

	$con_file = fopen(ENGINE_DIR."/data/socialconfig.php", "w+") or die("Désolé mais vous ne pouvez pas créer un fichier <b>.engine/data/socialconfig.php</b>.<br />Vérifier CHMOD!");
	fwrite($con_file, $social_config);
	fclose($con_file);
	@chmod(ENGINE_DIR."/data/socialconfig.php", 0666);
	
	$fdir = opendir( ENGINE_DIR . '/cache/system/' );
	while ( $file = readdir( $fdir ) ) {
		if( $file != '.' and $file != '..' and $file != '.htaccess' ) {
			@unlink( ENGINE_DIR . '/cache/system/' . $file );
			
		}
	}
	
	@unlink(ENGINE_DIR.'/data/snap.db');
	
	clear_cache();

	$_SESSION['step_update'] = false;

	msgbox("info","informations", "Mise à jour de la version de base de données <b>10.2</b> à la version <b>10.3</b> réussi.<br /><br />Cliquez sur Suivant pour continuer la mise à niveau du script.");

}

?>