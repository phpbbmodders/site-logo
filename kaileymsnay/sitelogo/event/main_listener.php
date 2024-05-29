<?php
/**
 *
 * Site Logo extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kaileymsnay\sitelogo\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Site Logo event listener
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config      $config
	 * @param \phpbb\template\template  $template
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.page_header'	=> 'page_header',
		];
	}

	/**
	 * Add template vars for site logo
	 */
	public function page_header($event)
	{
		$this->template->assign_vars([
			'SITELOGO_URL'		=> $this->config['sitelogo_url'],
			'SITELOGO_WIDTH'	=> $this->config['sitelogo_width'],
			'SITELOGO_HEIGHT'	=> $this->config['sitelogo_height'],
		]);
	}
}
