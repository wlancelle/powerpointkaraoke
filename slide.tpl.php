<!DOCTYPE html>
<html>
  <head>
    <title>Powerpoint caraoke - <?php echo $_SESSION['subject']; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"/>
<?php if($stop == false) {?>
    <meta http-equiv="refresh" content="<?php echo $_SESSION['nb_sec']?>; url=?slide=<?php echo $_SESSION['current_slide']+1?>" />
    <script type="text/javascript" src="chronos.js"></script>
<?php }?>
    </head>
  <body>
    <div>
    </div>
<?php if($stop == false) {?>
    <div class="content">
        <a href="?reset"><img src="<?php echo $slide ?>" alt="" title="" /></a>
    </div>
    <div class="nb_slide"> <?php print("slide : {$_SESSION['current_slide']}/{$_SESSION['nb_slide']}"); ?> </div>
    <div class="nb_sec">Dur&eacute;e : <span id="nb_sec"></span></div>
    <div class="suject"><?php echo $_SESSION['subject']; ?></div>
<?php } else {?>
    <div class="content end">
        Pr&eacute;sentation termin&eacute;e, bravo !!!
    </div>
    <div class="reset">
    <a href="?reset">Lancer une autre pr&eacutesentation</a>
    </div>
<?php }?>
  </body>
<?php if($stop == false) {?>
    <script>
        chrono(<?php echo $_SESSION['nb_sec'];?>);
    </script>
<?php }?>
</html>
