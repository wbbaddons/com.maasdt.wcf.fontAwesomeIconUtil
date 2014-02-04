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
 * @copyright	2014 Maasdt
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 * @package	com.maasdt.wcf.fontAwesomeIconUtil
 * @subpackage	system.option
 * @category	Community Framework
 */
class FontAwesomeIconSelectOptionType extends SelectOptionType {
	/**
	 * @see	\wcf\system\option\IOptionType::getFormElement()
	 */
	public function getFormElement(Option $option, $value) {
		$options = $this->parseEnableOptions($option);
		
		return WCF::getTPL()->fetch('selectOptionType', 'wcf', array(
			'disableOptions' => $options['disableOptions'],
			'enableOptions' => $options['enableOptions'],
			'option' => $option,
			'selectOptions' => $this->getIcons($option),
			'value' => $value,
			'allowEmptyValue' => ($this->allowEmptyValue || $option->allowEmptyValue)
		));
	}
	
	/**
	 * Returns the selectable icons.
	 * 
	 * @param	\wcf\data\option\Option		$option
	 * @return	array<string>
	 */
	protected function getIcons(Option $option) {
		$icons = FontAwesomeIconUtil::getIcons();
		
		// check if selecting an icon is optional
		if ($option->noselection) {
			$icons = array_merge(array(
				'' => WCF::getLanguage()->get($option->noselection != 1 ? $option->noselection : 'wcf.global.noSelection')
			), $icons);
		}
		
		return $icons;
	}
	
	/**
	 * @see	\wcf\system\option\IOptionType::validate()
	 */
	public function validate(Option $option, $newValue) {
		$icons = $this->getIcons($option);
		
		if (!isset($icons[$newValue])) {
			throw new UserInputException($option->optionName, 'validationFailed');
		}
	}
}
