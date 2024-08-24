<article class="post static">
  <h1 class="title">Message personnel</h1>
  [inbox]Boîte de réception[/inbox] <br /> [outbox]Les messages envoyés[/outbox] <br /> [new_pm]Envoyer un message[/new_pm]
</article>
[pmlist]
<div class="ux-form">
  <h3>liste des messages</h3>
  {pmlist}
</div>
[/pmlist]
[newpm]
<div class="ux-form">
  <h3>Envoyer un message</h3>
  <ul class="ui-form">
    <li><input placeholder="Peudo" type="text" name="name" value="{author}" class="f_input f_wide"></li>
    <li><input placeholder="Sujet" type="text" name="subj" value="{subj}" class="f_input f_wide"></li>
    <li><textarea placeholder="Message" name="comments" id="comments" rows="2" class="f_textarea f_wide">{text}</textarea></li>
    <li><input type="checkbox" name="outboxcopy" value="1"> "Enregistrer"</li>
    [sec_code]
    <li>
      <div class="c-captcha-box">
        <label for="sec_code">Entrer le code:</label>
        <div class="c-captcha">
          {sec_code}
          <input title="Entrez le code indiqué sur l'image" type="text" name="sec_code" id="sec_code" class="f_input" >
        </div>
      </div>
    </li>
    [/sec_code]
    [recaptcha]
    <li>
      <div>Entrez les mots</div>
      {recaptcha}
    </li>
    [/recaptcha]
  </ul>
  <div class="submitline">
    <button class="btn f_wide" name="add" type="submit" name="submit">Envoyer</button>
  </div>
</div>
[/newpm]
[readpm]
<div class="comment vcard">
  <div class="com-cont clrfix">
    <strong>{subj}</strong><br />
    {text}
  </div>
  <div class="com-inf">
    <span class="arg">Message de <b class="fn">{author}</b></span>
    <span class="fast">[reply]<b class="thd">Répondre</b>[/reply]</span>
    <span class="del">[del]<b class="thd">Supprimer</b>[/del]</span>
  </div>
</div>
[/readpm]