<?php
/**
 *
 * Author: zlz
 * Date: 2023/06/08
 */

namespace Zlz\Packagetest\Facades;

use Illuminate\Support\Facades\Facade;

class Packagetest extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'packagetest';
	}

}