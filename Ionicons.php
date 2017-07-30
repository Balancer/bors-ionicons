<?php

namespace B2;

class Ionicons
{
	static function load()
	{
		if(empty(\bors::$bower_asset_packages['bower-asset/ionicons']))
			bors_use('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
		else
			bors_use('/bower-asset/ionicons/css/ionicons.min.css');
	}
}
