<aside>
  <div id="form_panel">
    <h1>Inscription</h1>
    <form name="input" action="inscription.php" method="post">
      <table>
        <tr class="ligne">
          <td class="libelle">Pseudo :</td>
          <td><input type="text" name="pseudo" value=""/></td>
        </tr>
        <tr class="ligne">
          <td class="libelle">E-mail :</td>
          <td><input type="mail" name="mail" value=""/></td>
        </tr>
        <tr class="ligne">
          <td class="libelle">Mot de passe :</td>
          <td><input type="password" name="password" value=""/></td>
        </tr>
        <tr class="ligne">
          <td class="libelle">Confirmez le mot de passe :</td>
          <td><input type="password" name="password2" value=""/></td>
        </tr>
      </table>
      <input class="submit" type="submit" name="Valider" value="Valider"/>
    </form>
    <form name="input" action="connexion.php" method="post">
      <h1>Connexion</h1>
      <table>
        <tr class="ligne">
          <td class="libelle">Pseudo :</td>
          <td><input type="text" name="pseudo" value=""/></td>
        </tr>
        <tr class="ligne">
          <td class="libelle">Mot de passe :</td>
          <td><input type="password" name="password" value=""/></td>
        </tr>
      </table>
      <a href="game_page.php" title"Jouer !">
        <input class="submit" type="submit" name="Valider" value="Valider"/>
      </a>
    </form> 
  </div>
  <div id="auteur">
    <h1>Auteurs</h1>
    <p>schwei_m</p>
    <p>avazas_o</p>
    <p>brunne_s</p>  
  </div></aside>
