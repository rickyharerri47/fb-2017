<article class="post static">
  <h1 class="title">Utilisateur: {usertitle}</h1>
  Nom: {fullname}<br />
  Inscrit le: {registration}<br />
  Dernière visite: {lastdate}<br />
  Groupe: <font color="red">{status}</font>[time_limit] depuis le: {time_limit}[/time_limit]<br /><br />
  Résidence: {land}<br />
  ICQ: {icq}<br />
  Description:<br />{info}<br /><br />
  Articles: {news-num}<br />
  [ {news} ]<br /><br />
  Commentaires: {comm-num}<br />
  [ {comments} ]<br /><br />
  [ {email} ]<br />
  [ {pm} ]<br />
  {edituser}
</article>
[not-logged]
<div id="options" style="display:none;">
  <div class="ux-form">
    <h3>Modification des informations</h3>
    <ul class="ui-form">
      <li><input placeholder="E-mail" type="email" name="email" value="{editmail}" class="f_input f_wide"><div>{hidemail}</div></li>
      <li><br /></li>
      <li><input placeholder="Nom" type="text" name="fullname" value="{fullname}" class="f_input f_wide"></li>
      <li><input placeholder="Résidence" type="text" name="land" value="{land}" class="f_input f_wide"></li>
      <li><input placeholder="ICQ" type="text" name="icq" value="{icq}" class="f_input f_wide"></li>
      <li><br /></li>
      <li><input placeholder="Ancien mot de passe" type="password" name="altpass" class="f_input f_wide"></li>
      <li><input placeholder="Nouveau mot de passe" type="password" name="password1" class="f_input f_wide"></li>
      <li><input placeholder="Répété" type="password" name="password2" class="f_input f_wide"></li>
      <li><br /></li>
      <li><textarea name="allowed_ip" rows="2" class="f_textarea f_wide">{allowed-ip}</textarea><br />
        Bloquer IP: <b>{ip}</b><br /><div style="color:red;font-size:11px;">* Attention! Soyez prudent lorsque vous modifiez ce paramètre. Accédez à votre compte sera disponible uniquement à partir des adresses IP ou sous-réseaux que vous spécifiez. Vous pouvez spécifier plusieurs adresses IP, une adresse par ligne.<br />exemple: 192.48.25.71 ou 129.42.*.*</div>
      </li>
      <li><br /></li>
      <li><label for="image">Photo:</label><input type="file" name="image" class="f_input f_wide"><p><input type="checkbox" name="del_foto" value="yes">  Supprimer la photo</p></li>
      <li><br /></li>
      <li><textarea placeholder="Description" name="info" rows="2" class="f_textarea f_wide">{editinfo}</textarea></li>
      <li><textarea placeholder="Signature" name="signature" rows="2" class="f_textarea f_wide">{editsignature}</textarea></li>
    </ul>
    <div class="submitline">
      <button name="submit" class="btn f_wide" type="submit">Enregistrer</button>
      <input name="submit" type="hidden" id="submit" value="submit">
    </div>
  </div>
</div>
[/not-logged]