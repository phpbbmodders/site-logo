<?php
/**
 *
 * Site Logo extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kaileymsnay\sitelogo\migrations\v10x;

class m1_initial_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . $this->table_prefix . "modules
			WHERE module_class = 'acp'
				AND module_langname = 'ACP_SITELOGO_TITLE'";
		$result = $this->db->sql_query($sql);
		$module_id = $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id !== false;
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v330\v330'];
	}

	/**
	 * Add, update or delete data
	 */
	public function update_data()
	{
		return [
			// Add config settings
			['config.add', ['sitelogo_url', '']],
			['config.add', ['sitelogo_width', '']],
			['config.add', ['sitelogo_height', '']],

			// Add ACP module
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SITELOGO_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_SITELOGO_TITLE',
				[
					'module_basename'	=> '\kaileymsnay\sitelogo\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
