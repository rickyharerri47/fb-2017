{poll}
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 10px;">
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_52.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_53.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_56.png" alt="" /></td>
</tr>
<tr>
	<td style="background: url('{THEME}/images/pic_82.png') repeat-y;"></td>
	<td class="newsText">
		<div class="titleInfo">
			<div class="date">{date=d}&nbsp;&nbsp;{date=M}</div>
			<div style="width: 70%; float: left; line-height: 30px; margin-top: -4px; font-size: 22px;">{title}</div>
			<div class="rating_">{rating}</div>
			<div class="no-float"></div>
		</div>
		<div class="author">
			������� {author} � ��������� {link-category}  {favorites} [edit]<img src="{THEME}/images/edit.gif" style="vertical-align: middle" alt="������������� �������" />[/edit]
		</div>
		<div class="text">
			{full-story}
			{pages}
		</div>
		[group=5]<div class="scriptcode">��������� ����������, �� ����� �� ���� ��� �������������������� ������������. �� ����������� ��� ������������������ ���� ����� �� ���� ��� ����� ������.</div>[/group]
		[tags]<div class="border">�������� ����: {tags}</div>[/tags]
		<div class="moreInfo">
			<div class="info">
				[com-link]����������� ({comments-num})[/com-link]
				���������: {views}
				[print-link]<img src="{THEME}/images/printer.png" border="0" alt="�����������" />[/print-link]
			</div>
		</div>
		<div class="no-float"></div>
		[edit-date]<br /><span class="copy"><i>������� �������������� <font color="red"><strong>{editor}</strong></font> - {edit-date}</i></span>[edit-reason]<div class="quote">�������: {edit-reason}</div>[/edit-reason][/edit-date]<br />
		<div class="related-news"><b>������ ������� �� ����:</b><br/><span class="related">{related-news}</span>{include file="sorting.tpl"}</div>
	</td>
	<td style="background: url('{THEME}/images/pic_59.png') repeat-y;"></td>
</tr>
<tr>
	<td width="4" height="4"><img src="{THEME}/images/pic_84.png" alt="" /></td>
	<td style="background: url('{THEME}/images/pic_85.png') repeat-x;"></td>
	<td width="4" height="4"><img src="{THEME}/images/pic_86.png" alt="" /></td>
</tr>
</table>