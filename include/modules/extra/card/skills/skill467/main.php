<?php

namespace skill467
{
	function init() 
	{
		define('MOD_SKILL467_INFO','club;unique;');
		eval(import_module('clubbase'));
		$clubskillname[467] = '巨力';
	}
	
	function acquire467(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function lost467(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function check_unlocked467(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return 1;
	}

	function check_skill467_proc(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (rand(0,99)<17 && \skillbase\skill_query(467,$pa))
		{
			eval(import_module('player','logger'));
			if ($active)
				$log.="<span class=\"clan\">敌人被你一拳打晕了过去！</span></span><br>";
			else  $log.="<span class=\"clan\">你被敌人一拳打晕了过去！</span></span><br>";
			\skill602\set_stun_period(2500,$pd);
			\skill602\send_stun_battle_news($pa['name'],$pd['name']);
		}
		return Array();
	}
	
	function get_physical_dmg_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		check_skill467_proc($pa,$pd,$active);
		return $chprocess($pa,$pd,$active);
	}
}

?>
