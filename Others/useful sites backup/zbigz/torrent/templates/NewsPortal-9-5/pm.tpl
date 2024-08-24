<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_52.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_53.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_56.png" alt="" /></td>
</tr>
<tr>
	<td style="background: url('{THEME}/images/pic_82.png') repeat-y;"></td>
	<td class="newsText">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="abl02"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="abl121">
                                <tr>
                                  <td align="left" class="ntitle"><b>Персональные сообщения</b></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="abl22"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="30" class="abl221">&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="center" valign="top" class="stext"><div align="center">[inbox]Входящие сообщения[/inbox] &nbsp; | &nbsp; [outbox]Отправленные сообщения[/outbox] &nbsp; | &nbsp; [new_pm]Отправить сообщение[/new_pm]</div></td>
                          </tr>
                        </table>
                        <br />
[pmlist]
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="abl02"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="abl121">
                                <tr>
                                  <td align="left" class="ntitle"><b>Список сообщений</b></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="abl22"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="30" class="abl221">&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="stext" height="40">{pmlist}</td>
                          </tr>
                        </table>
                        <br />
                        <br />
[/pmlist]
[newpm]
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="abl02"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="abl121">
                                <tr>
                                  <td align="left" class="ntitle"><b>Отправка персонального сообщения</b></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="abl22"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="30" class="abl221">&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="stext">
                                    <table width="480" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="80" height="25">Получатель:</td>
                                        <td width="400" height="25"><input type="text" name="name" value="{author}" class="f_input" /></td>
                                      </tr>
                                      <tr>
                                        <td width="80" height="25">Тема:</td>
                                        <td width="400" height="25"><input type="text" name="subj" value="{subj}" class="f_input" /></td>
                                      </tr>
[not-wysywyg]
                                      <tr>
                                        <td colspan="2">{bbcode}</td>
                                      </tr>
[/not-wysywyg]
                                      <tr>
                                        <td colspan="2">[not-wysywyg]<textarea name="comments" id="comments" rows="" cols="" class="f_textarea">{text}</textarea>[/not-wysywyg]{wysiwyg}<br /><input type="checkbox" name="outboxcopy" value="1" /> Сохранить сообщение в папке "Отправленные"<br />
                                        </td>
                                      </tr>
[sec_code]
                                      <tr>
                                        <td width="80" height="25">Код:</td>
                                        <td width="400" height="25"><br />{sec_code}</td>
                                      </tr>
                                      <tr>
                                        <td width="80" height="25">Введите код:</td>
                                        <td width="400" height="25"><input type="text" name="sec_code" id="sec_code" style="width:115px" class="f_input" /></td>
                                      </tr>
[/sec_code]
                                      <tr>
                                        <td colspan="2">
                                          <input type="submit" name="add" value="отправить" />&nbsp;&nbsp;<input type="button" onclick="dlePMPreview()" value="просмотр" />
                                        </td>
                                      </tr>
                                    </table>
                            </td>
                          </tr>
                        </table>
                        <br />
                        <br />
[/newpm]
[readpm]
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="abl02"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="abl121">
                                <tr>
                                  <td align="left" class="ntitle"><b>{subj}</b></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="abl22"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="30" class="abl221">&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="stext">{text}<br /><br />Отправил: <strong>{author}</strong> &nbsp; | &nbsp; [reply]ответить[/reply] &nbsp; | &nbsp; [del]удалить[/del]</td>
                          </tr>
                        </table>
[/readpm]

</td>
	<td style="background: url('{THEME}/images/pic_59.png') repeat-y;"></td>
</tr>
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_84.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_85.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_86.png" alt="" /></td>
</tr>
</table>