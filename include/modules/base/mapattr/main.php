<?php

namespace mapattr
{
	function init() {}
	
	function calculate_itemfind_obbs()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player','mapattr'));
		if (!isset($pls_itemfind_obbs[$pls])) $r=0; else $r=$pls_itemfind_obbs[$pls];
		return $chprocess()+$r;
	}
	
	function calculate_meetman_obbs(&$edata)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player','mapattr'));
		if (!isset($pls_meetman_obbs[$pls])) $r=0; else $r=$pls_meetman_obbs[$pls];
		return $chprocess($edata)+$r;
	}
	
	function get_att_multiplier(&$pa,&$pd,$active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','mapattr'));
		if (isset($pls_attack_modifier[$pa['pls']]))		
			return $chprocess($pa,$pd,$active)*(1+$pls_attack_modifier[$pa['pls']]/100);
		else  return $chprocess($pa,$pd,$active);
	}
	
	function get_def_multiplier(&$pa,&$pd,$active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','mapattr'));
		if (isset($pls_defend_modifier[$pa['pls']]))		
			return $chprocess($pa,$pd,$active)*(1+$pls_defend_modifier[$pa['pls']]/100);
		else  return $chprocess($pa,$pd,$active);
	}
	
	function calculate_real_trap_obbs()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('player'));
		if($pls == 0)	//在后台非常容易踩陷阱
			return $chprocess()+15;
		else  return $chprocess();
	}
}

?>
