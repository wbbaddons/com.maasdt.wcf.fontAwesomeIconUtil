Font Awesome Icon Util
======================

Font Awesome Icon Util provides PHP and JavaScript code for selecting Font Awesome icons.


Code examples
-------------

PHP code for getting all available icons and checking if an icon is valid:

```php
<?php
use wcf\util\FontAwesomeIconUtil;

// fetch all icons which can be used as the options parameter for htmlOptions
$icons = FontAwesomeIconUtil::getIcons()

// check if a selected icon is valid
$icon = 'html5';
$isValidIcon = FontAwesomeIconUtil::isValid($icon);
```

HTML and JavaScript code for creating a dialog with an icon list:

```html
<span class="icon icon16 icon-th pointer jsFontAwesomeIconListButton jsTooltip" title="{lang}wcf.icon.fontAwesome.iconSelection{/lang}"></span>
```

```smarty
// shows the icons in $icons as a dialog when clicking on an .jsFontAwesomeIconListButton element
new WCF.Icon.FontAwesome.IconList([ {implode from=$icons item='__icon'}'{@$__icon}'{/implode} ], '.jsFontAwesomeIconListButton');
```

If you want to use the dialog icon list as an additional possibility to select icons, simply add the `data-select` attribute which contains the ID of `select` form element.

```smarty
{htmlOptions options=$icons name="icon" id="icon" selected=$icon}
<span class="icon icon16 icon-th pointer jsFontAwesomeIconListButton jsTooltip" data-select="icon" title="{lang}wcf.icon.fontAwesome.iconSelection{/lang}"></span>
```


License
-------

This package is licensed under the GNU Lesser General Public License which can be found in the LICENSE file in this folder.
