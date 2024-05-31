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
 * Site Logo ACP module
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	/**
	 * Main ACP module
	 */
	public function main($id, $mode)
	{
		global $template, $request, $config, $user, $phpbb_log, $language;

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'acp_sitelogo';

		// Set the page title for our ACP page
		$this->page_title = 'ACP_SITELOGO_TITLE';

		// Create a form key for preventing CSRF attacks
		add_form_key('acp_sitelogo');

		// Is the form being submitted?
		if ($request->is_set_post('submit'))
		{
			// Test if the submitted form is valid
			if (!check_form_key('acp_sitelogo'))
			{
				trigger_error($language->lang('FORM_INVALID'));
			}

			$config->set('sitelogo_url', $request->variable('sitelogo_url', ''));
			$config->set('sitelogo_width', $request->variable('sitelogo_width', ''));
			$config->set('sitelogo_height', $request->variable('sitelogo_height', ''));

			$user_id = $user->data['user_id'];
			$user_ip = $user->ip;

			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, $language->lang('LOG_ACP_SITELOGO_SETTINGS'));

			trigger_error($language->lang('LOG_ACP_SITELOGO_SETTINGS') . adm_back_link($this->u_action));
		}

		$template->assign_vars([
			'SITELOGO_URL'		=> $config['sitelogo_url'],
			'SITELOGO_WIDTH'	=> $config['sitelogo_width'],
			'SITELOGO_HEIGHT'	=> $config['sitelogo_height'],
		]);
	}
}
