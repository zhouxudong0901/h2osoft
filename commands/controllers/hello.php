<?php
namespace app\commands\controllers;
use H2O\console\Controller;
class Hello extends Controller
{
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		$request = $this->request();
		$params = $request->getParams();
		print_r($params);
		return 'hello world';
	}
}