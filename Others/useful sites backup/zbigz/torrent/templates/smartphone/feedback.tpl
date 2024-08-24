<article class="post static">
  <h1>Nous Contacter</h1>
</article>
<div class="ux-form">
  <ul class="ui-form">
    [not-logged]
    <li><input placeholder="Pseudo" type="text" maxlength="35" name="name" class="f_input f_wide"></li>
    <li><input placeholder="E-mail" type="email" maxlength="35" name="email" class="f_input f_wide"></li>
    [/not-logged]
    <li><input placeholder="Sujet" type="text" maxlength="45" name="subject" class="f_input f_wide"><div style="display: none">{recipient}</div></li>
    <li><textarea placeholder="Message" name="message" row="3" class="f_textarea f_wide"></textarea></li>
    [sec_code]
    <li>
      <div class="c-captcha-box">
        <label for="sec_code">Entrer le code:</label>
        <div class="c-captcha">
          {code}&nbsp;
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
  <div class="submitline">
    <button name="submit" class="btn f_wide" type="submit">Envoyer</button>
  </div>
</div>