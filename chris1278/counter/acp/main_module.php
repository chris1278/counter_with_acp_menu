<?php
/**
 *
 * Counter. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\counter\acp;

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main()
	{
		global $phpbb_container;

		$this->tpl_name = 'acp_counter_body';

		$acp_controller = $phpbb_container->get('chris1278.counter.controller.acp');

		$language = $phpbb_container->get('language');

		$this->page_title = $language->lang('ACP_COUNTER_TITLE');

		$acp_controller->set_page_url($this->u_action);

		$acp_controller->display_options();
	}
}
