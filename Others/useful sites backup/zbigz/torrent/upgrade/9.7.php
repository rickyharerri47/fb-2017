<?php

if( ! defined( 'DATALIFEENGINE' ) ) {
	die( "Hacking attempt!" );
}

$config['version_id'] = "9.8";
$config['allow_share'] = "1";
$config['auth_domain'] = "1";

$tableSchema = array();

$tableSchema[] = "ALTER TABLE `" . PREFIX . "_vote` ADD `grouplevel` VARCHAR(250) NOT NULL DEFAULT 'all'";

foreach($tableSchema as $table) {
	$db->query ($table);
}


$handler = fopen(ENGINE_DIR.'/data/config.php', "w") or die("D&#233;sol&#233;, mais ne peut pas &#233;crire les donn&#233;es dans le fichier<b>engine/data/config.php</b>, il n est pas accessible en &#233;criture.<br />S il vous plait v&#233;rifiez les permissions des fichiers (CHMOD)!");
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

if ($db->error_count) {

	$error_info = "Toutes les requ&#234;tes planifi&#233;es: <b>".$db->query_num."</b> Impossible d'ex&#233;cuter des requ&#234;tes: <b>".$db->error_count."</b>. Peut-&#234;tre qu ils ont d&#233;j&#224; effectu&#233; plus tot.<br /><br /><div class=\"quote\"><b>Liste des requ&#234;tes ayant &#233;chou&#233;:</b><br /><br />"; 

	foreach ($db->query_list as $value) {

		$error_info .= $value['query']."<br /><br />";

	}

	$error_info .= "</div>";

} else $error_info = "";

msgbox("info","Information", "<form action=\"index.php\" method=\"GET\">Mise &#224; jour de la base de donn&#233;es de la version <b>9.7</b> &#224; la version <b>9.8</b> est termin&#233; avec succ&#232;s.<br />{$error_info}<br />Cliquez sur Suivant pour poursuivre le processus de mise &#224; niveau de script<br /><br /><input type=\"hidden\" name=\"next\" value=\"next\"><input class=\"edit\" type=\"submit\" value=\"Suivant ...\"></form>");
?>