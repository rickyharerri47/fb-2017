<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 10px;">
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_52.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_53.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_56.png" alt="" /></td>
</tr>
<tr>
	<td style="background: url('{THEME}/images/pic_82.png') repeat-y;"></td>
	<td class="newsText">
        Пользователь: <b>{usertitle}</b>
		<br/><br/>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" width="110" valign="top">
				<table cellspacing="0" cellpadding="0" border="0" style="float: left; margin-bottom: 5px;">
				<tr>
					<td width="14" height="14"><img src="{THEME}/images/com_03.png" alt="" /></td>
					<td background="{THEME}/images/com_04.png"></td>
					<td width="14" height="14"><img src="{THEME}/images/com_06.png" alt="" /></td>
				</tr>
				<tr>
					<td background="{THEME}/images/com_08.png"></td>
					<td><img src="{foto}" border="0" alt="" /></td>
					<td background="{THEME}/images/com_12.png"></td>
				</tr>
				<tr>
					<td width="14" height="14"><img src="{THEME}/images/com_13.png" alt="" /></td>
					<td background="{THEME}/images/com_14.png"></td>
					<td width="14" height="14"><img src="{THEME}/images/com_15.png" alt="" /></td>
				</tr>
				</table>
			</td>
            <td align="left" valign="top" style="padding-left:5px;">Полное имя: {fullname}
            <br />Дата регистрации: {registration}
            <br />Последнее посещение: {lastdate}
            <br />Группа:    <font color="red">{status}</font>[time_limit] в группе до: {time_limit}[/time_limit]
            <br /><br />Рейтинг: {rate}
            <br /><br />Место жительства: {land}
            <br />Номер ICQ: {icq}
            <br />Немного о себе:<br />{info}<br /><br />Количество публикаций:     {news-num} [ {news} ] [rss]<img src="{THEME}/images/rss_icon.gif" border="0" />[/rss]
            <br />Количество комментариев: {comm-num} [ {comments} ]<br /><br />E-Mail адрес: [ {email} ] [ {pm} ] {edituser}
            </td>
        </tr>
        </table>
[not-logged]
<div id="options" style="display:none;">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 10px;">
<tr>
	<td width="4" height="4"><img src="{THEME}/images/some_48.png" alt="" /></td>
	<td style="background: url('{THEME}/images/some_49.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/some_52.png" alt="" /></td>
</tr>
<tr>
	<td style="background: url('{THEME}/images/some_73.png') repeat-y;"></td>
	<td class="someText" bgcolor="#ffb58d">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="abl02"><b>Редактирование информации</b></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="stext">
                                    <table width="left" border="0" cellspacing="0" cellpadding="0" style="margin-top: 10px;">
                                      <tr>
                                        <td width="130" height="25">Ваш E-Mail:</td>
                                        <td width="350"><input type="text" name="email" value="{editmail}" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td>{hidemail}</td>
                                      </tr>
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Ваше Имя:</td>
                                        <td><input type="text" name="fullname" value="{fullname}" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25"><nobr>Место жительства:  </nobr></td>
                                        <td><input type="text" name="land" value="{land}" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Номер ICQ:</td>
                                        <td><input type="text" name="icq" value="{icq}" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Старый пароль:</td>
                                        <td><input type="password" name="altpass" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Новый пароль:</td>
                                        <td><input type="password" name="password1" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Повторите:</td>
                                        <td><input type="password" name="password2" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Блокировка по IP:</td>
                                        <td><textarea name="allowed_ip" style="width:320px; height:70px" rows="" cols="" class="f_textarea">{allowed-ip}</textarea><br />Ваш текущий IP: <strong>{ip}</strong><br /><br /><font style="color:red;">* Внимание! Будьте бдительны при изменении данной настройки. Доступ к Вашему аккаунту будет доступен только с того IP-адреса или подсети, который Вы укажете. <br /><br />Вы можете указать несколько IP-адресов, по одному адресу в каждой строке.<br />Пример: 192.48.25.71 или 129.42.*.*</font></td>
                                      </tr>
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Фото:</td>
                                        <td><input type="file" name="image" style="width:304px; height:18px" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td><input type="checkbox" name="del_foto" value="yes" />  Удалить фотографию</td>
                                      </tr>
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">О себе:</td>
                                        <td style="padding-bottom:5px;"><textarea name="info" style="width:320px; height:70px" rows="" cols="" class="f_textarea">{editinfo}</textarea></td>
                                      </tr>
                                      <tr>
                                        <td width="130" height="25">Подпись:</td>
                                        <td><textarea name="signature" style="width:320px; height:70px" rows="" cols="" class="f_textarea">{editsignature}</textarea></td>
                                      </tr>
{xfields}
                                      <tr>
                                        <td width="130">&nbsp;</td>
                                        <td height="25"><div style="padding-top:2px; padding-left:0px;">
                                          <input type="image" src="{THEME}/images/send.png" name="submit" alt="Отправить" /><br />
                                          <input name="submit" type="hidden" id="submit" value="submit" />
                                          </div></td>
                                      </tr>
                                    </table>
                            </td>
                          </tr>
                        </table>
</td>
	<td style="background: url('{THEME}/images/some_55.png') repeat-y;"></td>
</tr>
<tr>
	<td width="4" height="4"><img src="{THEME}/images/some_75.png" alt="" /></td>
	<td style="background: url('{THEME}/images/some_76.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/some_77.png" alt="" /></td>
</tr>
</table>
</div>
[/not-logged]

</td>
	<td style="background: url('{THEME}/images/pic_59.png') repeat-y;"></td>
</tr>
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_84.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_85.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_86.png" alt="" /></td>
</tr>
</table>