<!DOCTYPE html>
<html>
  <head>
    <title>Powerpoint karaoke</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <div>
      <form action="?slide=1" method="POST" >
        <div class="h1">
          <h1>Powerpoint karaoke</h1>
        </div>
        <div class="value">
          <div class="name">Nombre de slides : </div>
          <div class="input"><input type="text" name="nb_slide" value="<?php echo $_SESSION['nb_slide']?>" /></div>
          <div class="br" />
            <div class="name">Nombre de secondes par slide : </div>
            <div class="input"><input type="text" name="nb_sec" value="<?php echo $_SESSION['nb_sec']?>" /></div>
          </div>
        </div>
        <div class="br" />
          <div class="name subject">Sujet : </div>
          <div class="input"><input type="text" name="subject" value="<?php echo $_SESSION['subject']?>" /></div>
          <div class="br" />
            <div class="submit"><input type="submit" name="START" value="Remplir les 3 champs verts et cliquer ici pour d&eacute;marrer un powerpoint karaoke" /> </div>
        </form>
      </div>
  </body>
</html>

<!-- set tf=xhtml -->
