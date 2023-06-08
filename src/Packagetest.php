<?php
/**
 *
 * Author: zlz
 * Date: 2023/06/08
 */

namespace Zlz\Packagetest;

use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Packagetest
{

	/**
	 * @var SessionManager
	 */

	protected $session;

	/**
	 * @var Repository
	 */

	protected $config;

	/**
	 * Packagetest constructor.
	 * @param SessionManager $session
	 * @param Repository $config
	 */

	public function __construct(SessionManager $session, Repository $config)
	{

		$this->session = $session;

		$this->config = $config;
	}

	/**
	 * @param string $msg
	 * @return string
	 */

	public function test_rtn($msg = '')
	{

		//$config_arr = $this->config->get('packagetest.options');

		return $msg . ' <strong>from your custom develop package!</strong>>';
	}

}