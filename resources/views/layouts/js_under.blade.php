<?php
	$config_asset = Config::get("asset.base_asset");
?>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=asset("$config_asset"."js/jquery.min.js")?>" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=asset("$config_asset"."js/bootstrap.min.js")?>"></script>
    <script src=<?=asset("$config_asset"."js/jasny-bootstrap.min.css")?>></script>