<?php
/**
 *
 * Author: zlz
 * Date: 2023/06/06
 */

namespace FirstComp;

class TestHello
{
	public function __construct()
	{

	}

	public function getCfg()
	{
		return json_encode(["11", "222", "333"]);
	}
}