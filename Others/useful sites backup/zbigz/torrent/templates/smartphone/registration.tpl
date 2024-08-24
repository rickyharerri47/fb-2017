<article class="post static">
  <h1 class="title">
    [registration]Inscription[/registration]
    [validation]Continuation de l'enregistrement[/validation]
  </h1>
    [registration]
      <b>Bonjour, chers visiteurs de notre site!</b><br />
      Inscrire sur notre site vous permettra d'être un participant à part entière en elle.
       Vous pourrez ajouter des nouvelles sur le site, laisser des commentaires, voir le texte masqué, et plus encore.
       <br /> En cas de problèmes avec l'enregistrement, le contact <a href="/index.php?do=feedback">l'Administrateur</a> du Site.
    [/registration]
    [validation]
      <b>Cher visiteur,</b><br />
      Votre compte a été inscrit sur notre site,
       Toutefois, les informations vous concernant sont incomplètes, de sorte à remplir des champs supplémentaires dans votre profil.
    [/validation]
</article>
<div class="ux-form">
  <ul class="ui-form">
    [registration]
      <li>
        <div class="combofield">
          <input placeholder="Pseudo" type="text" name="name" id="name" class="f_input f_wide">
          <input class="bbcodes" title="Vérifier" onclick="CheckLogin(); return false;" type="button" value="Vérifier le Nom">
        </div>
        <div class="clr" id='result-registration'></div>
      </li>
      <li>
        <input placeholder="Passe" type="password" name="password1" id="password1" class="f_input f_wide">
      </li>
      <li>
        <input placeholder="Répété" type="password" name="password2" id="password2" class="f_input f_wide">
      </li>
      <li>
        <input placeholder="E-mail" type="email" name="email" id="email" class="f_input f_wide">
      </li>
      [question]
      <li>
        Question: <b>{question}</b>
        <div><input placeholder="Réponse" type="text" name="question_answer" id="question_answer" class="f_input f_wide" ></div>
      </li>
      [/question]
      [sec_code]
      <li>
        <div class="c-captcha-box">
          <label for="sec_code">Entrer le code:</label>
          <div class="c-captcha">
            {reg_code}
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
      [/registration]
      [validation]
      <li><input placeholder="Nom" type="text" id="fullname" name="fullname" class="f_input f_wide"></li>
      <li><input placeholder="Résidence" type="text" id="land" name="land" class="f_input f_wide"></li>
      <li><input placeholder="ICQ" type="text" id="icq" name="icq" class="f_input f_wide"></li>
      <li><textarea placeholder="Description" id="info" name="info" rows="3" class="f_textarea f_wide"></textarea></li>
      <li><label for="image">Photo:</label><input type="file" id="image" name="image" class="f_input f_wide"></li>
      [/validation]
  </ul>
  <div class="submitline">
    <button name="submit" class="btn f_wide" type="submit">Enregistrer</button>
  </div>
</div>