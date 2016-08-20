<?php
namespace wcf\system\option;
use wcf\data\option\Option;
use wcf\system\exception\UserInputException;
use wcf\system\WCF;
use wcf\util\FontAwesomeIconUtil;

/**
 * Option type implementation for Font Awesome icon selection.
 * 
 * @author	Matthias Schmidt
 * @copyright	2014-2016 Maasdt
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 * @package	com.maasdt.wcf.fontAwesomeIconUtil
 * @subpackage	system.option
 * @category	Community Framework
 */
class FontAwesomeIconSelectOptionType extends SelectOptionType {
	/**
	 * @inheritDoc
	 */
	public function getFormElement(Option $option, $value) {
		$options = $this->parseEnableOptions($option);
		
		return WCF::getTPL()->fetch('selectOptionType', 'wcf', [
			'disableOptions' => $options['disableOptions'],
			'enableOptions' => $options['enableOptions'],
			'option' => $option,
			'selectOptions' => $this->getIcons($option),
			'value' => $value,
			'allowEmptyValue' => $this->allowEmptyValue || $option->allowEmptyValue
		]);
	}
	
	/**
	 * Returns the selectable icons.
	 * 
	 * @param	Option		$option
	 * @return	string[]
	 */
	protected function getIcons(Option $option) {
		$icons = FontAwesomeIconUtil::getIconNames();
		
		// check if selecting an icon is optional
		if ($option->noSelection) {
			$icons = array_merge([
				'' => WCF::getLanguage()->get($option->noSelection != 1 ? $option->noSelection : 'wcf.global.noSelection')
			], $icons);
		}
		
		return $icons;
	}
	
	/**
	 * @inheritDoc
	 */
	public function validate(Option $option, $newValue) {
		if (!isset($this->getIcons($option)[$newValue])) {
			throw new UserInputException($option->optionName, 'validationFailed');
		}
	}
}
