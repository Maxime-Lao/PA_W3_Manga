<form method="<?= $config["config"]["method"]??"POST" ?>"
      action="<?= $config["config"]["action"]??""?>"
      id="<?= $config["config"]["id"]??""?>"
      class="<?= $config["config"]["class"]??""?>">


    <?php App\Core\Builder::render($config); ?>



    <input type="submit" value="<?= $config["config"]["submit"]??"Envoyer"?>">
</form>