<?php
	
	namespace App\Helpers;
	use Config;
	
	class AssetHelper{
		
		function asset_url($url = "")
		{
			$config = Config::get('asset.base_asset');
			return 	"$config/$url" ;
		}
		
		
	}