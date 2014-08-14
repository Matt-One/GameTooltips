<?php

/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace paybas\gametooltips\migrations;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('gttips_version', '1.0.0')),
			array('config.add', array('gttips_wowhead', 0)),
			array('config.add', array('gttips_diablo3', 0)),
			array('config.add', array('gttips_wildheap', 0)),
			array('config.add', array('gttips_loltip', 0)),
			array('config.add', array('gttips_zam', 0)),
			array('config.add', array('gttips_region', 1)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'GAME_TOOLTIPS'
			)),

			array('module.add', array(
				'acp',
				'GAME_TOOLTIPS',
				array(
					'module_basename'	=> '\paybas\gametooltips\acp\gametooltips_module',
					'modes'	=> array('settings'),
				),
			)),
		);
	}
}
