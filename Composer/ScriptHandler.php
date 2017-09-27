<?php 

namespace Parabol\PbTest\Composer;

class ScriptHandler
{
	
	public static function run($event)
	{
		var_dump(dirname(__FILE__));
	}
}