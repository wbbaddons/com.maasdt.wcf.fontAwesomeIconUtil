/**
 * @author	Matthias Schmidt
 * @copyright	2014 Maasdt
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 * @package	com.maasdt.wcf.fontAwesomeIconUtil
 */

/**
 * Initializes WCF.Icon namespace.
 */
if (!WCF.Icon) {
	WCF.Icon = { };
}

/**
 * Initializes WCF.Icon.FontAwesome namespace.
 */
WCF.Icon.FontAwesome = { };

/**
 * Handles icon list dialogs.
 */
WCF.Icon.FontAwesome.IconList = Class.extend({
	/**
	 * list of buttons triggering the icon lists
	 * @var	array<jQuery>
	 */
	_buttons: [ ],
	
	/**
	 * CSS selector for the buttons which trigger the icon list
	 * @var	string
	 */
	_buttonSelector: '',
	
	/**
	 * list of icon list dialogs
	 * @var	object
	 */
	_iconLists: { },
	
	/**
	 * selector for the clickable icons the in the list
	 * @var	string
	 */
	_iconSelector: 'span.icon.icon32',
	
	/**
	 * names of the icons
	 * @var	array<string>
	 */
	_icons: [ ],
	
	/**
	 * Initializes a new WCF.Icon.FontAwesome.IconList list.
	 * 
	 * @param	array<string>	icons
	 * @param	string		buttonSelector
	 */
	init: function(icons, buttonSelector) {
		this._buttonSelector = buttonSelector;
		this._icons = icons;
		
		this._buttons = $(this._buttonSelector);
		if (!this._buttons.length) {
			console.log('[WCF.Icon.FontAwesome.IconList] Selector does not match any element, aborting.');
			return;
		}
		
		this._buttons.click($.proxy(this._showIconList, this));
		
		this._iconListPrototype = $('<ul class="containerBoxList tripleColumned" />');
		this._createListItems();
	},
	
	/**
	 * Adds the list items to the icon list prototype.
	 */
	_createListItems: function() {
		for (var $index in this._icons) {
			var $iconName = this._icons[$index];
			
			$('<li><div class="box32"><span class="icon icon32 icon-' + $iconName + '" data-icon-name="' + $iconName + '" /> <p>' + $iconName + '</p></div></li>').appendTo(this._iconListPrototype);
		}
	},
	
	/**
	 * Handles click on an icon to select it.
	 * 
	 * @param	Event		event
	 */
	_selectIcon: function(event) {
		var $icon = $(event.currentTarget);
		$('#' + $icon.data('select')).val($icon.data('iconName'));
		
		this._iconLists[$icon.parents('ul.containerBoxList.tripleColumned').data('buttonID')].wcfDialog('close');
	},
	
	/**
	 * Handles a click on a show icon list button.
	 * 
	 * @param	Event		event
	 */
	_showIconList: function(event) {
		var $button = $(event.currentTarget);
		var $buttonID = $button.wcfIdentify();
		var $select = $button.data('select');
		
		if (this._iconLists[$buttonID] === undefined) {
			this._iconLists[$buttonID] = $('<div />').hide().appendTo(document.body);
			
			var $ul = this._iconListPrototype.clone();
			$ul.data('buttonID', $buttonID).appendTo(this._iconLists[$buttonID]);
			
			if ($select) {
				$ul.find(this._iconSelector).attr('title', WCF.Language.get('wcf.icon.fontAwesome.selectIcon')).addClass('pointer jsTooltip').data('select', $select).click($.proxy(this._selectIcon, this));
			}
		}
		
		this._iconLists[$buttonID].wcfDialog({
			title: WCF.Language.get('wcf.icon.fontAwesome.dialogTitle')
		});
	}
});
