<?php
namespace wcf\util;
use wcf\system\WCF;

/**
 * Provides Font Awesome-related functions.
 * 
 * @author	Matthias Schmidt
 * @copyright	2014 Maasdt
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 * @package	com.maasdt.wcf.fontAwesomeIconUtil
 * @subpackage	util
 * @category	Community Framework
 */
final class FontAwesomeIconUtil {
	/**
	 * list with the icon names
	 * @var	array<string>
	 */
	protected static $icons = array(
		'adjust' => 'adjust',
		'adn' => 'adn',
		'align-center' => 'align-center',
		'align-justify' => 'align-justify',
		'align-left' => 'align-left',
		'align-right' => 'align-right',
		'ambulance' => 'ambulance',
		'anchor' => 'anchor',
		'android' => 'android',
		'angle-down' => 'angle-down',
		'angle-left' => 'angle-left',
		'angle-right' => 'angle-right',
		'angle-up' => 'angle-up',
		'apple' => 'apple',
		'archive' => 'archive',
		'arrow-down' => 'arrow-down',
		'arrow-left' => 'arrow-left',
		'arrow-right' => 'arrow-right',
		'arrow-up' => 'arrow-up',
		'asterisk' => 'asterisk',
		'backward' => 'backward',
		'ban-circle' => 'ban-circle',
		'bar-chart' => 'bar-chart',
		'barcode' => 'barcode',
		'beaker' => 'beaker',
		'beer' => 'beer',
		'bell' => 'bell',
		'bell-alt' => 'bell-alt',
		'bitbucket' => 'bitbucket',
		'bitbucket-sign' => 'bitbucket-sign',
		'bold' => 'bold',
		'bolt' => 'bolt',
		'book' => 'book',
		'bookmark' => 'bookmark',
		'bookmark-empty' => 'bookmark-empty',
		'briefcase' => 'briefcase',
		'btc' => 'btc',
		'bug' => 'bug',
		'building' => 'building',
		'bullhorn' => 'bullhorn',
		'bullseye' => 'bullseye',
		'calendar' => 'calendar',
		'calendar-empty' => 'calendar-empty',
		'camera' => 'camera',
		'camera-retro' => 'camera-retro',
		'caret-down' => 'caret-down',
		'caret-left' => 'caret-left',
		'caret-right' => 'caret-right',
		'caret-up' => 'caret-up',
		'certificate' => 'certificate',
		'check' => 'check',
		'check-empty' => 'check-empty',
		'check-minus' => 'check-minus',
		'check-sign' => 'check-sign',
		'chevron-down' => 'chevron-down',
		'chevron-left' => 'chevron-left',
		'chevron-right' => 'chevron-right',
		'chevron-sign-down' => 'chevron-sign-down',
		'chevron-sign-left' => 'chevron-sign-left',
		'chevron-sign-right' => 'chevron-sign-right',
		'chevron-sign-up' => 'chevron-sign-up',
		'chevron-up' => 'chevron-up',
		'circle' => 'circle',
		'circle-arrow-down' => 'circle-arrow-down',
		'circle-arrow-left' => 'circle-arrow-left',
		'circle-arrow-right' => 'circle-arrow-right',
		'circle-arrow-up' => 'circle-arrow-up',
		'circle-blank' => 'circle-blank',
		'cloud' => 'cloud',
		'cloud-download' => 'cloud-download',
		'cloud-upload' => 'cloud-upload',
		'cny' => 'cny',
		'code' => 'code',
		'code-fork' => 'code-fork',
		'coffee' => 'coffee',
		'cog' => 'cog',
		'cogs' => 'cogs',
		'collapse' => 'collapse',
		'collapse-alt' => 'collapse-alt',
		'collapse-top' => 'collapse-top',
		'columns' => 'columns',
		'comment' => 'comment',
		'comment-alt' => 'comment-alt',
		'comments' => 'comments',
		'comments-alt' => 'comments-alt',
		'compass' => 'compass',
		'copy' => 'copy',
		'credit-card' => 'credit-card',
		'crop' => 'crop',
		'css3' => 'css3',
		'cut' => 'cut',
		'dashboard' => 'dashboard',
		'desktop' => 'desktop',
		'double-angle-down' => 'double-angle-down',
		'double-angle-left' => 'double-angle-left',
		'double-angle-right' => 'double-angle-right',
		'double-angle-up' => 'double-angle-up',
		'download' => 'download',
		'download-alt' => 'download-alt',
		'dribbble' => 'dribbble',
		'dropbox' => 'dropbox',
		'edit' => 'edit',
		'edit-sign' => 'edit-sign',
		'eject' => 'eject',
		'ellipsis-horizontal' => 'ellipsis-horizontal',
		'ellipsis-vertical' => 'ellipsis-vertical',
		'envelope' => 'envelope',
		'envelope-alt' => 'envelope-alt',
		'eraser' => 'eraser',
		'eur' => 'eur',
		'exchange' => 'exchange',
		'exclamation' => 'exclamation',
		'exclamation-sign' => 'exclamation-sign',
		'expand' => 'expand',
		'expand-alt' => 'expand-alt',
		'external-link' => 'external-link',
		'external-link-sign' => 'external-link-sign',
		'eye-close' => 'eye-close',
		'eye-open' => 'eye-open',
		'facebook' => 'facebook',
		'facebook-sign' => 'facebook-sign',
		'facetime-video' => 'facetime-video',
		'fast-backward' => 'fast-backward',
		'fast-forward' => 'fast-forward',
		'female' => 'female',
		'fighter-jet' => 'fighter-jet',
		'file' => 'file',
		'file-alt' => 'file-alt',
		'file-text' => 'file-text',
		'file-text-alt' => 'file-text-alt',
		'film' => 'film',
		'filter' => 'filter',
		'fire' => 'fire',
		'fire-extinguisher' => 'fire-extinguisher',
		'flag' => 'flag',
		'flag-alt' => 'flag-alt',
		'flag-checkered' => 'flag-checkered',
		'flickr' => 'flickr',
		'folder-close' => 'folder-close',
		'folder-close-alt' => 'folder-close-alt',
		'folder-open' => 'folder-open',
		'folder-open-alt' => 'folder-open-alt',
		'font' => 'font',
		'food' => 'food',
		'forward' => 'forward',
		'foursquare' => 'foursquare',
		'frown' => 'frown',
		'fullscreen' => 'fullscreen',
		'gamepad' => 'gamepad',
		'gbp' => 'gbp',
		'gift' => 'gift',
		'github' => 'github',
		'github-alt' => 'github-alt',
		'github-sign' => 'github-sign',
		'gittip' => 'gittip',
		'glass' => 'glass',
		'globe' => 'globe',
		'google-plus' => 'google-plus',
		'google-plus-sign' => 'google-plus-sign',
		'group' => 'group',
		'h-sign' => 'h-sign',
		'hand-down' => 'hand-down',
		'hand-left' => 'hand-left',
		'hand-right' => 'hand-right',
		'hand-up' => 'hand-up',
		'hdd' => 'hdd',
		'headphones' => 'headphones',
		'heart' => 'heart',
		'heart-empty' => 'heart-empty',
		'home' => 'home',
		'hospital' => 'hospital',
		'html5' => 'html5',
		'inbox' => 'inbox',
		'indent-left' => 'indent-left',
		'indent-right' => 'indent-right',
		'info' => 'info',
		'info-sign' => 'info-sign',
		'inr' => 'inr',
		'instagram' => 'instagram',
		'italic' => 'italic',
		'jpy' => 'jpy',
		'key' => 'key',
		'keyboard' => 'keyboard',
		'krw' => 'krw',
		'laptop' => 'laptop',
		'leaf' => 'leaf',
		'legal' => 'legal',
		'lemon' => 'lemon',
		'level-down' => 'level-down',
		'level-up' => 'level-up',
		'lightbulb' => 'lightbulb',
		'link' => 'link',
		'linkedin' => 'linkedin',
		'linkedin-sign' => 'linkedin-sign',
		'linux' => 'linux',
		'list' => 'list',
		'list-alt' => 'list-alt',
		'list-ol' => 'list-ol',
		'list-ul' => 'list-ul',
		'location-arrow' => 'location-arrow',
		'lock' => 'lock',
		'long-arrow-down' => 'long-arrow-down',
		'long-arrow-left' => 'long-arrow-left',
		'long-arrow-right' => 'long-arrow-right',
		'long-arrow-up' => 'long-arrow-up',
		'magic' => 'magic',
		'magnet' => 'magnet',
		'mail-reply-all' => 'mail-reply-all',
		'male' => 'male',
		'map-marker' => 'map-marker',
		'maxcdn' => 'maxcdn',
		'medkit' => 'medkit',
		'meh' => 'meh',
		'microphone' => 'microphone',
		'microphone-off' => 'microphone-off',
		'minus' => 'minus',
		'minus-sign' => 'minus-sign',
		'minus-sign-alt' => 'minus-sign-alt',
		'mobile-phone' => 'mobile-phone',
		'money' => 'money',
		'moon' => 'moon',
		'move' => 'move',
		'music' => 'music',
		'off' => 'off',
		'ok' => 'ok',
		'ok-circle' => 'ok-circle',
		'ok-sign' => 'ok-sign',
		'paper-clip' => 'paper-clip',
		'paste' => 'paste',
		'pause' => 'pause',
		'pencil' => 'pencil',
		'phone' => 'phone',
		'phone-sign' => 'phone-sign',
		'picture' => 'picture',
		'pinterest' => 'pinterest',
		'pinterest-sign' => 'pinterest-sign',
		'plane' => 'plane',
		'play' => 'play',
		'play-circle' => 'play-circle',
		'play-sign' => 'play-sign',
		'plus' => 'plus',
		'plus-sign' => 'plus-sign',
		'plus-sign-alt' => 'plus-sign-alt',
		'print' => 'print',
		'pushpin' => 'pushpin',
		'puzzle-piece' => 'puzzle-piece',
		'qrcode' => 'qrcode',
		'question' => 'question',
		'question-sign' => 'question-sign',
		'quote-left' => 'quote-left',
		'quote-right' => 'quote-right',
		'random' => 'random',
		'refresh' => 'refresh',
		'remove' => 'remove',
		'remove-circle' => 'remove-circle',
		'remove-sign' => 'remove-sign',
		'renren' => 'renren',
		'reorder' => 'reorder',
		'repeat' => 'repeat',
		'reply' => 'reply',
		'reply-all' => 'reply-all',
		'resize-full' => 'resize-full',
		'resize-horizontal' => 'resize-horizontal',
		'resize-small' => 'resize-small',
		'resize-vertical' => 'resize-vertical',
		'retweet' => 'retweet',
		'road' => 'road',
		'rocket' => 'rocket',
		'rss' => 'rss',
		'rss-sign' => 'rss-sign',
		'save' => 'save',
		'screenshot' => 'screenshot',
		'search' => 'search',
		'share' => 'share',
		'share-alt' => 'share-alt',
		'share-sign' => 'share-sign',
		'shield' => 'shield',
		'shopping-cart' => 'shopping-cart',
		'sign-blank' => 'sign-blank',
		'signal' => 'signal',
		'signin' => 'signin',
		'signout' => 'signout',
		'sitemap' => 'sitemap',
		'skype' => 'skype',
		'smile' => 'smile',
		'sort' => 'sort',
		'sort-by-alphabet' => 'sort-by-alphabet',
		'sort-by-alphabet-alt' => 'sort-by-alphabet-alt',
		'sort-by-attributes' => 'sort-by-attributes',
		'sort-by-attributes-alt' => 'sort-by-attributes-alt',
		'sort-by-order' => 'sort-by-order',
		'sort-by-order-alt' => 'sort-by-order-alt',
		'sort-down' => 'sort-down',
		'sort-up' => 'sort-up',
		'spinner' => 'spinner',
		'stackexchange' => 'stackexchange',
		'star' => 'star',
		'star-empty' => 'star-empty',
		'star-half' => 'star-half',
		'star-half-empty' => 'star-half-empty',
		'step-backward' => 'step-backward',
		'step-forward' => 'step-forward',
		'stethoscope' => 'stethoscope',
		'stop' => 'stop',
		'strikethrough' => 'strikethrough',
		'subscript' => 'subscript',
		'suitcase' => 'suitcase',
		'sun' => 'sun',
		'superscript' => 'superscript',
		'table' => 'table',
		'tablet' => 'tablet',
		'tag' => 'tag',
		'tags' => 'tags',
		'tasks' => 'tasks',
		'terminal' => 'terminal',
		'text-height' => 'text-height',
		'text-width' => 'text-width',
		'th' => 'th',
		'th-large' => 'th-large',
		'th-list' => 'th-list',
		'thumbs-down' => 'thumbs-down',
		'thumbs-down-alt' => 'thumbs-down-alt',
		'thumbs-up' => 'thumbs-up',
		'thumbs-up-alt' => 'thumbs-up-alt',
		'ticket' => 'ticket',
		'time' => 'time',
		'tint' => 'tint',
		'trash' => 'trash',
		'trello' => 'trello',
		'trophy' => 'trophy',
		'truck' => 'truck',
		'tumblr' => 'tumblr',
		'tumblr-sign' => 'tumblr-sign',
		'twitter' => 'twitter',
		'twitter-sign' => 'twitter-sign',
		'umbrella' => 'umbrella',
		'underline' => 'underline',
		'undo' => 'undo',
		'unlink' => 'unlink',
		'unlock' => 'unlock',
		'unlock-alt' => 'unlock-alt',
		'upload' => 'upload',
		'upload-alt' => 'upload-alt',
		'usd' => 'usd',
		'user' => 'user',
		'user-md' => 'user-md',
		'vk' => 'vk',
		'volume-down' => 'volume-down',
		'volume-off' => 'volume-off',
		'volume-up' => 'volume-up',
		'warning-sign' => 'warning-sign',
		'weibo' => 'weibo',
		'windows' => 'windows',
		'wrench' => 'wrench',
		'xing' => 'xing',
		'xing-sign' => 'xing-sign',
		'youtube' => 'youtube',
		'youtube-play' => 'youtube-play',
		'youtube-sign' => 'youtube-sign',
		'zoom-in' => 'zoom-in',
		'zoom-out' => 'zoom-out'
	);
	
	/**
	 * defines the version of Font Awesome the util belongs to
	 * @var	string
	 */
	const FONT_AWESOME_VERSION = '3.2.1';
	
	/**
	 * Returns the available icons.
	 * 
	 * @return	array<string>
	 */
	public static function getIcons() {
		return self::$icons;
	}
	
	/**
	 * Returns true if the given icon exists.
	 * 
	 * @param	string		$icon
	 * @return	boolean
	 */
	public static function isValid($icon) {
		return isset(self::$icons[$icon]);
	}
	
	/**
	 * Disables creating FontAwesomeIconUtil objects.
	 */
	private function __construct() {
		// does nothing
	}
}
