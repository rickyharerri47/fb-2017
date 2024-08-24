<?php
/*
=====================================================
 Модуль UserList v1.0
=====================================================
 Файл: userlist.php
=====================================================
*/
if(!defined('DATALIFEENGINE')) die("Hacking attempt!");

$grp = array();
$grp_sql = $db->query("SELECT id, group_name FROM ".PREFIX."_usergroups");
while($row=$db->get_array($grp_sql)) {
	$grp[] = $row['id'].":".$row['group_name'];
}
$grp_l = implode(';',$grp);

$content = <<<HTML
<!--link rel="stylesheet" type="text/css" media="screen" href="/engine/modules/UserList/css/start/custom.css" /-->
<link rel="stylesheet" type="text/css" media="screen" href="/engine/modules/UserList/css/ui.jqgrid.css" />

<script type="text/javascript" src="/engine/modules/UserList/js/grid.locale-ro.js"></script>
<script type="text/javascript" src="/engine/modules/UserList/js/jquery.jqGrid.min.js"></script>


<div align="center" style="margin-bottom: 10px; margin-top: 10px;" class="userlist"><a href="#" onclick="gR('0'); return false;">0</a><a href="#" onclick="gR('1'); return false;">1</a><a href="#" onclick="gR('2'); return false;">2</a><a href="#" onclick="gR('3'); return false;">3</a><a href="#" onclick="gR('4'); return false;">4</a><a href="#" onclick="gR('5'); return false;">5</a><a href="#" onclick="gR('6'); return false;">6</a><a href="#" onclick="gR('7'); return false;">7</a><a href="#" onclick="gR('8'); return false;">8</a><a href="#" onclick="gR('9'); return false;">9</a><br>
<a href="#" onclick="gR('a'); return false;">A</a><a href="#" onclick="gR('b'); return false;">B</a><a href="#" onclick="gR('c'); return false;">C</a><a href="#" onclick="gR('d'); return false;">D</a><a href="#" onclick="gR('e'); return false;">E</a><a href="#" onclick="gR('f'); return false;">F</a><a href="#" onclick="gR('g'); return false;">G</a><a href="#" onclick="gR('h'); return false;">H</a><a href="#" onclick="gR('i'); return false;">I</a><a href="#" onclick="gR('j'); return false;">J</a><a href="#" onclick="gR('k'); return false;">K</a><a href="#" onclick="gR('l'); return false;">L</a><a href="#" onclick="gR('m'); return false;">M</a><a href="#" onclick="gR('n'); return false;">N</a><a href="#" onclick="gR('o'); return false;">O</a><a href="#" onclick="gR('p'); return false;">P</a><a href="#" onclick="gR('q'); return false;">Q</a><a href="#" onclick="gR('r'); return false;">R</a><a href="#" onclick="gR('s'); return false;">S</a><a href="#" onclick="gR('t'); return false;">T</a><a href="#" onclick="gR('u'); return false;">U</a><a href="#" onclick="gR('v'); return false;">V</a><a href="#" onclick="gR('w'); return false;">W</a><a href="#" onclick="gR('x'); return false;">X</a><a href="#" onclick="gR('y'); return false;">Y</a><a href="#" onclick="gR('z'); return false;">Z</a><br></div><br />
<table><tr class="sf">
<td class="cauta">Rechercher&nbsp;&nbsp;</td>
<td class="ops"><select style="" class="default" name="op" id="op" onKeyUp='doSearch(arguments[0]||event);' onKeyDown='doSearch(arguments[0]||event);' onChange='doSearch(arguments[0]||event);'><option value="3">contient</option><option value="2">egal</option><option value="1">commence par</option><option value="4">se termine par</option></select>&nbsp;&nbsp;</td>
<td class="data"><input type="text" id="item_nm" onkeydown="doSearch(arguments[0]||event)" style="display: inline;" class="default vdata" /></td>
</tr>
</table>
<table id="list"></table>
<div id="pager"></div>

<script type="text/javascript">
jQuery(document).ready(function(){
jQuery("#list").jqGrid({
	url:'/engine/modules/UserList/userlist.php',
	datatype: 'xml',
	mtype: 'POST',
	colNames:['ID', 'Login', 'pm', 'Groupe', 'Post', 'Com', 'Inscrit'],
	colModel :[
		{name:'user_id', index:'user_id', width:40, search:false},
		{name:'name', index:'name', width:150, search:false},
		{name:'mail', index:'mail', width:65, sortable:false, search:false},
		{name:'user_group', index:'user_group', width:125, stype:'select', editoptions:{value:":Toţi;{$grp_l}"}},
		{name:'news_num', index:'news_num', width:75, align:"center", search:false},
		{name:'comm_num', index:'comm_num', width:75, align:"center", search:false},
		{name:'reg_date', index:'reg_date', width:110, search:false}
	],
	pager: jQuery('#pager'),
		rowNum:50,
		rowList:[50,100,200,300],
		sortname: 'user_id',
		sortorder: "asc",
		height: "100%",
                autowidth: true,
		viewrecords: true,
});
jQuery("#list").jqGrid('navGrid','#pager',
{del:false,add:false,edit:false,search:false}, //options
{}, // edit options
{}, // add options
{}, // del options
{} // search options
);
jQuery("#list").jqGrid('filterToolbar',{autosearch:true, searchOnEnter:false});
});
function gR(b){
jQuery("#list").jqGrid('setGridParam',{url:"/engine/modules/UserList/userlist.php?nm_mask="+b,page:1}).trigger("reloadGrid");
}
var timeoutHnd;
function doSearch(ev){
	if(timeoutHnd) clearTimeout(timeoutHnd);
	timeoutHnd = setTimeout(gridReload,1000);
}
function gridReload(){
	var field = jQuery("#field").val();
	var op = jQuery("#op").val();
	var nm_mask = jQuery("#item_nm").val();
	jQuery("#list").jqGrid('setGridParam',{url:"/engine/modules/UserList/userlist.php?nm_mask="+nm_mask+"&nm_field="+field+"&nm_op="+op,page:1}).trigger("reloadGrid");
}
</script>
HTML;

$tpl->load_template('static.tpl');
$tpl->set('{description}', "Liste des utilisateurs");
$tpl->set('{static}', $content);
$tpl->set( '{pages}', $pages );
$tpl->compile('content');
$tpl->clear();
?>