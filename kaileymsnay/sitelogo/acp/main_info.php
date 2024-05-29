<?php
/**
 *
 * Site Logo extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kaileymsnay\sitelogo\acp;

/**
 * Site Logo ACP module info
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\kaileymsnay\sitelogo\acp\main_module',
			'title'		=> 'ACP_SITELOGO_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_SITELOGO_TITLE',
					'auth'	=> 'ext_kaileymsnay/sitelogo && acl_a_board',
					'cat'	=> ['ACP_SITELOGO_TITLE'],
				],
			],
		];
	}
}
